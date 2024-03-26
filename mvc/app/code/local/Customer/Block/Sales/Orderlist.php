<?php 
class Customer_Block_Sales_Orderlist extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('customer/order/list.phtml');
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
    
    public function getOrderStatus($orderId)
    {
        return Mage::getModel('sales/order')->getCollection()
            ->addFieldToFilter('order_id', $orderId)->getFirstItem()->getStatus();
    }
    public function checkStatusHistory($orderId)
    {
        return Mage::getModel('sales/order_history')->getCollection()
            ->addFieldToFilter('order_id', $orderId)->addOrderBy('history_id', 'DESC')
            ->getFirstItem()
            ->getToStatus();
    }
}
