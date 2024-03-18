<?php 

class Sales_Controller_Admin_Orders extends Core_Controller_Admin_Action
{
    public function showAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('order/admin/orders.css');
        $child = $layout->getChild('content');
        $orders = $layout->createBlock('sales/admin_orders');
        $child->addChild('orders', $orders);
        $layout->toHtml();
    }

    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('order/admin/form.css');
        $child = $layout->getChild('content');  
        $form = $layout->createBlock('sales/admin_form');
        $child->addChild('form', $form);
        $layout->toHtml();
    }

}