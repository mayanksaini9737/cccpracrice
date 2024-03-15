<?php 
class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function addAction()
    {
        $requestData = $this->getRequest()->getPostData();
        $request = ['product_id'=>$requestData['product_id'],'qty'=> $requestData['quantity']];
        Mage::getSingleton("sales/quote")
            ->addProduct($request);
        $this->setRedirect('cart/quote/view');
    }
    public function updateAction()
    {
        $requestData = $this->getRequest()->getPostData();
        $request = ['product_id'=>$requestData['product_id'],'qty'=> $requestData['quantity']];
        Mage::getSingleton("sales/quote")
            ->updateProduct($request);    
        $this->setRedirect('cart/quote/view');
    }
    public function deleteAction()
    {
        $request = ['product_id'=>$this->getRequest()->getParams('product_id')];
        Mage::getSingleton("sales/quote")
            ->deleteProduct($request);
        $this->setRedirect('cart/quote/view');
    }

    public function checkoutAction()
    {
        $addressData = $this->getRequest()->getPostData('address');
        $paymentData = $this->getRequest()->getPostData('payment_method');
        $shippingData = $this->getRequest()->getPostData('shipping_method');

        $salesQuate = Mage::getSingleton('sales/quote')->addQuoteAddress($addressData)
            ->addQuotePayment($paymentData)->addQuoteShipping($shippingData);
        
        $orderDetails = $salesQuate->convert();
        
        $orderNumber = $orderDetails->getOrderNumber();
        $this->setRedirect("cart/order/finish?orderNum={$orderNumber}");
    }
}