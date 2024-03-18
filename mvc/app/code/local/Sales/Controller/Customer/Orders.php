<?php 

class Sales_Controller_Customer_Orders extends Core_Controller_Front_Action
{
    public function showAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('order/customer/orders.css');
        $child = $layout->getChild('content');
        $orders = $layout->createBlock('sales/customer_orders');
        $child->addChild('orders', $orders);
        $layout->toHtml();
    }
}