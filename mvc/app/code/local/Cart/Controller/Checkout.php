<?php 
class Cart_Controller_Checkout extends Core_Controller_Front_Action{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('cart/checkout.css');
        $child = $layout->getChild('content');
        $address = $layout->createBlock('cart/checkout');
        $child->addChild('cart', $address);
        $layout->toHtml();
    }
}
