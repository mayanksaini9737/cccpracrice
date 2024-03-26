<?php 

class Admin_Controller_Sales_Order extends Core_Controller_Admin_Action
{
    public function allAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('order/admin/orderlist.css');
        $child = $layout->getChild('content');
        $orders = $layout->createBlock('admin/sales_orderlist');
        $child->addChild('orders', $orders);
        $layout->toHtml();
    }

    public function saveAction()
    {
        $orderData = $this->getRequest()->getPostData('order');
        $orderObj = Mage::getModel('sales/order')->load($orderData['order_id']);
        $fromStatus = $orderObj->getStatus();
        $orderObj->addData('status', $orderData['status'])->save();

        Mage::getModel('sales/order_history')
            ->setData([
                'order_id'=>$orderData['order_id'],
                'from_status'=>$fromStatus,
                'to_status'=>$orderData['status'],
                'action_by'=>1
            ])
            ->save();

        $this->setRedirect('admin/sales_order/all');
    }

    public function cancelAcceptAction()
    {
        $orderId = $this->getRequest()->getParams('order_id');
        $orderObj = Mage::getModel('sales/order')->load($orderId);
        $orderObj->addData('status', 'canceled')->save();

        Mage::getModel('sales/order_history')
            ->setData([
                'order_id'=>$orderId,
                'from_status'=>'cancel_requested',
                'to_status'=>'canceled',
                'action_by'=>1
            ])
        ->save();
        $this->setRedirect('admin/sales_order/all');
    }

    public function cancelDeclineAction()
    {
        $orderId = $this->getRequest()->getParams('order_id');

        Mage::getModel('sales/order_history')
            ->setData([
                'order_id'=>$orderId,
                'from_status'=>'cancel_requested',
                'to_status'=>'cancel_req_declined',
                'action_by'=>1
            ])
            ->save();

        $this->setRedirect('admin/sales_order/all');
    }

    public function viewAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('order/admin/view.css');
        $child = $layout->getChild('content');
        $orders = $layout->createBlock('admin/sales_orderview');
        $child->addChild('orders', $orders);
        $layout->toHtml();
    }
}