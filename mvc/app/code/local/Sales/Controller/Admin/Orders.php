<?php 

class Sales_Controller_Admin_Orders extends Core_Controller_Admin_Action
{
    public function showAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('order/admin/orderlist.css');
        $child = $layout->getChild('content');
        $orders = $layout->createBlock('sales/admin_orders');
        $child->addChild('orders', $orders);
        $layout->toHtml();
    }

    public function saveAction()
    {
        if ($this->getRequest()->isPost()){
            $orderData = $this->getRequest()->getPostData('order');
            $orderObj = Mage::getModel('sales/order')->load($orderData['order_id']);
            $fromStatus = $orderObj->getStatus();
            $orderObj->addData('status', $orderData['status'])
                ->save();

            Mage::getModel('sales/order_history')
                ->setData([
                    'order_id'=>$orderData['order_id'],
                    'from_status'=>$fromStatus,
                    'to_status'=>$orderData['status'],
                    'action_by'=>1
                ])
                ->save();

            $this->setRedirect('sales/admin_orders/show');
        }
    }
}