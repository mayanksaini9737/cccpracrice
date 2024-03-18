<?php
class Sales_Model_Quote extends Core_Model_Abstract
{
    public function init()
    {
        $this->_modelClass = 'sales/quote';
        $this->_resourceClass = 'Sales_Model_Resource_Quote';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote';
    }
    public function initQuote()
    {
        $quoteId = Mage::getSingleton('core/session')->get("quote_id");
        $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        $existingQuote = Mage::getModel('sales/quote')->getCollection()
            ->addFieldToFilter('customer_id', $customerId)
            ->addFieldToFilter('order_id', 0)
            ->getFirstItem();
        if(!$quoteId){
            if ($existingQuote){
                Mage::getSingleton('core/session')->set('quote_id', $existingQuote->getId());
                $this->load($existingQuote->getId());
            }
            else {
                $quote = Mage::getModel("sales/quote")
                    ->setData(["tax_percent" => 8, "grand_total" => 0])
                    ->save();
                Mage::getSingleton('core/session')->set("quote_id", $quote->getId());
                $quoteId = $quote->getId();
                $this->load($quoteId);
            }
        } else {
            $this->load($quoteId);
        }
        return $this;
    }

    public function getItemCollection()
    {
        // $this->initQuote();
        return Mage::getModel('sales/quote_item')->getCollection()
            ->addFieldToFilter('quote_id', $this->getId())->getData();
    }
    protected function _beforeSave()
    {
        $grandTotal = 0;
        $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        foreach ($this->getItemCollection() as $item) {
            $grandTotal += (int)$item->getRowTotal();
        }
        if ($this->getTaxPercent()) {
            $tax = round($grandTotal / $this->getTaxPercent(), 2);
            $grandTotal = $grandTotal + $tax;
        }
        $this->addData('grand_total', $grandTotal)
            ->addData('customer_id', $customerId);
    }

    public function addProduct($request)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel('sales/quote_item')->addItem($this, $request['product_id'], $request['qty']);
        }
        $this->save();
    }

    public function updateProduct($request)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel('sales/quote_item')->updateItem($this, $request['product_id'], $request['qty']);
        }
        $this->save();
    }
    public function deleteProduct($request)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel('sales/quote_item')->deleteItem($this, $request['product_id']);
        }
        $this->save();
    }
    public function addQuoteAddress($addressData)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel('sales/quote_customer')->saveAddress($this, $addressData);
        }
        return $this;
    }
    public function addQuotePayment($paymentData)
    {
        $this->initQuote();
        if ($this->getId()) {
            $payment = Mage::getModel('sales/quote_payment')->savePayment($this, $paymentData);
        }
        $this->addData('payment_id', $payment->getId())->save();
        return $this;
    }
    public function addQuoteShipping($shippingData)
    {
        $this->initQuote();
        if ($this->getId()) {
            $shipping = Mage::getModel('sales/quote_shipping')->saveShipping($this, $shippingData);
        }
        $this->addData('shipping_id', $shipping->getId())->save();
        return $this;
    }
    
    public function convert()
    {
        $this->initQuote();

        if ($this->getId()) {
            $order = $this->quoteToOrder();
            $this->quoteItemToOrderItem($order->getId());
            $this->quoteAddToOrderAdd($order->getId());
            $payment = $this->quotePaymentToOrderPayment($order->getId());
            $shipping = $this->quoteShippingToOrderShipping($order->getId());

            $order->addData('payment_id', $payment->getId())
                ->addData('shipping_id', $shipping->getId())
                ->save();
        }

        $this->addData('order_id', $order->getId())
            ->save();

        Mage::getSingleton('core/session')->remove('quote_id');
        return $order;
    }

    public function quoteToOrder()
    {
        $orderNumber = time();
        if ($this->getId()){
            return Mage::getModel('sales/order')
                ->setData($this->getData())
                ->removeData('quote_id')
                ->removeData('customer_id')
                ->removeData('payment_id')
                ->removeData('shipping_id')
                ->removeData('order_id')
                ->addData('order_number', $orderNumber)
                ->addData('status', 'Pending')
                ->save();
        }
    }

    public function quoteItemToOrderItem($orderId)
    {
        if($this->getId()){
            foreach ($this->getItemCollection() as $item) {
                Mage::getModel('sales/order_item')
                    ->setData($item->getData())
                    ->addData('order_id', $orderId)
                    ->save();
                $product = Mage::getModel('catalog/product')->load($item->getProductId());
                $updatedInventory = $product->getInventory() - $item->getQty();
                $product->addData('inventory', $updatedInventory)->save();
            }
        }
    }
    public function quoteAddToOrderAdd($orderId)
    {
        if($this->getId()){
            $quateAddress = Mage::getModel('sales/quote_customer')->getCollection()
            ->addFieldToFilter('quote_id', $this->getId())->getFirstItem();
            
            Mage::getModel('sales/order_customer')
                ->setData($quateAddress->getData())
                ->addData('order_id', $orderId)
                ->save();
        }
    }
    public function quotePaymentToOrderPayment($orderId)
    {
        if($this->getId()){
            $quatePayment = Mage::getModel('sales/quote_payment')->getCollection()
                ->addFieldToFilter('quote_id', $this->getId())->getFirstItem();

            return Mage::getModel('sales/order_payment')
                    ->setData($quatePayment->getData())
                    ->addData('order_id', $orderId)
                    ->save();
        }
    }
    public function quoteShippingToOrderShipping($orderId)
    {
        if($this->getId()){
            $quateShipping = Mage::getModel('sales/quote_shipping')->getCollection()
                ->addFieldToFilter('quote_id', $this->getId())->getFirstItem();

            return Mage::getModel('sales/order_shipping')
                    ->setData($quateShipping->getData())
                    ->addData('order_id', $orderId)
                    ->save();
        }
    }
}

