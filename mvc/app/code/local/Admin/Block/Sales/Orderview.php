<?php 
class Admin_Block_Sales_Orderview extends Core_Block_Template
{   
    protected $orderId = null;
    protected $customer = null;
    public function __construct()
    {
        $this->orderId = $this->getRequest()->getParams('order_id');
        $this->setTemplate('admin/order/view.phtml');
    }
    public function getCustomerDetails()
    {
        $this->customer = Mage::getModel('sales/order_customer')->getCollection()
            ->addFieldToFilter('order_id', $this->orderId )
            ->addLimit(1)->getFirstItem();
        $customerId = $this->customer->getCustomerId();
        return Mage::getModel('customer/customer')->load($customerId);
    }
    public function getAddressDetails()
    {
        return $this->customer;
    }
    public function getShippingDetails()
    {
        return Mage::getModel('sales/order_shipping')->getCollection()
            ->addFieldToFilter('order_id', $this->orderId)
            ->addLimit(1)->getFirstItem();
    }
    public function getPaymentDetails()
    {
        return Mage::getModel('sales/order_payment')->getCollection()
            ->addFieldToFilter('order_id', $this->orderId)
            ->addLimit(1)->getFirstItem();
    }
    public function getOrderDetails()
    {
        return Mage::getModel('sales/order')->load($this->orderId);
    }
    public function getOrderItems()
    {
        return Mage::getModel('sales/order_item')->getCollection()
            ->addFieldToFilter('order_id', $this->orderId)
            ->getData();
    }
}