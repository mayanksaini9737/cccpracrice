<?php 

class Customer_Controller_Sales_Order extends Core_Controller_Front_Action
{
    public function showAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('order/customer/orders.css');
        $child = $layout->getChild('content');
        $orders = $layout->createBlock('customer/sales_orderlist');
        $child->addChild('orders', $orders);
        $layout->toHtml();
    }

    public function cancelReqAction(){
        $cancelData = $this->getRequest()->getPostData('cancel');
        $salesOrder = Mage::getModel('sales/order')->load($cancelData['order_id']);
        $from_status = $salesOrder->getStatus();
        Mage::getModel('sales/order_history')
            ->setData($cancelData)
            ->addData('from_status', $from_status)
            ->addData('action_by', 0)
            ->save();
        $this->setRedirect('customer/sales_order/show');
    }
}