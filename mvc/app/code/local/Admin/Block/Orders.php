<?php 
class Admin_Block_Orders extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('admin/orders.phtml');
    }

    public function getAllOrders()
    {
        return Mage::getModel('sales/order_item')->getCollection()->getData();
    }
    public function getProduct($id)
    {
        return Mage::getModel('catalog/product')->load($id);
    }
}
?>