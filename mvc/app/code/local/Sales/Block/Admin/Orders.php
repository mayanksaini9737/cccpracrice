<?php 
class Sales_Block_Admin_Orders extends Core_Block_Template
{   
    public function __construct()
    {
        $this->setTemplate('sales/admin/orders.phtml');
    }

    public function getAllOrders()
    {
        return Mage::getModel('sales/order_item')->getCollection()->addOrderBy('item_id DESC')->addLimit(10)->getData();
    }
    public function getOrderNumber($id)
    {
        return Mage::getModel('sales/order')->load($id)->getOrderNumber();
    }
    public function getOrderStatus($id)
    {
        return Mage::getModel('sales/order')->load($id)->getStatus();
    }
}
