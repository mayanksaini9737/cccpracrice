<?php 
class Sales_Block_Admin_Orders extends Core_Block_Template
{   
    public function __construct()
    {
        $this->setTemplate('sales/admin/orders.phtml');
    }

    public function getAllOrders()
    {
        return Mage::getModel('sales/order')->getCollection()
            ->addOrderBy('order_id DESC')->getData();
    }

    public function checkCancelRequest($orderId)
    {
        return Mage::getModel('sales/order_history')->getCollection()
            ->addFieldToFilter('order_id', $orderId)
            ->addFieldToFilter('action_by', 0)
            ->addFieldToFilter('to_status', 'cancel')
            ->getFirstItem();
    }
}
