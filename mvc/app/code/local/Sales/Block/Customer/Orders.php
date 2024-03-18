<?php 
class Sales_Block_Customer_Orders extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('sales/customer/orders.phtml');
    }

    public function getAllOrders()
    {
        $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        return Mage::getModel('sales/order_customer')
            ->getCollection()->addFieldToFilter('customer_id', $customerId)->getData();
    }
    public function getOrderedProduct($orderId)
    {
        return Mage::getModel('sales/order_item')
            ->getCollection()->addFieldToFilter('order_id', $orderId)->getData();
    }
    public function getProductImage($productId)
    {
        return Mage::getModel('catalog/product')
            ->getCollection()->addFieldToFilter('product_id', $productId)->getFirstItem()->getImageLink();
    }
    
}
