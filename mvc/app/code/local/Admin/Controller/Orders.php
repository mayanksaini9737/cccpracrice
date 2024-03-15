<?php 

class Admin_Controller_Orders extends Core_Controller_Admin_Action
{
    public function showAction()
    {
        $layout = $this->getLayout();
        // $layout->getChild('head')->addCss('form.css');
        $child = $layout->getChild('content');
        $orders = $layout->createBlock('admin/orders');
        $child->addChild('orders', $orders);
        $layout->toHtml();
    }
}