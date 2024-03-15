<?php 
class Cart_Controller_Order extends Core_Controller_Front_Action{
    public function finishAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('cart/order.css');
        $child = $layout->getChild('content');
        $order = $layout->createBlock('cart/order');
        $child->addChild('order', $order);
        $layout->toHtml();
    }
}
