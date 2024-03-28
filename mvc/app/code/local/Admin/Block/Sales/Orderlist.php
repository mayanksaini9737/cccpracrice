<?php 
class Admin_Block_Sales_Orderlist extends Core_Block_Template
{   
    public function __construct()
    {
        $this->setTemplate('admin/order/list.phtml');
    }

    public function getAllOrders()
    {
        return Mage::getModel('sales/order')->getCollection()->getData();
    }
    public function getCountOfProducts($orderId)
    {
        $quote = Mage::getModel('sales/quote')->getCollection()
            ->addFieldToFilter('order_id', $orderId)->getFirstItem();
        return count($quote->getItemCollection());
    }
    public function checkCancelRequest($orderId)
    {
        return Mage::getModel('sales/order_history')->getCollection()
            ->addFieldToFilter('order_id', $orderId)
            ->addFieldToFilter('action_by', 0)
            ->addFieldToFilter('to_status', 'cancel_requested')
            ->getFirstItem();   
    }
    public function checkCancelReqResponse($orderId){
        return Mage::getModel('sales/order_history')->getCollection()
            ->addFieldToFilter('order_id', $orderId)
            ->addFieldToFilter('action_by', 1)
            ->addFieldToFilter('to_status', ['in'=>['canceled', 'cancel_req_declined']])
            ->getFirstItem();   
    }
}