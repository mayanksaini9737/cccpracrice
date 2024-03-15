<?php 
class Cart_Controller_Quote extends Core_Controller_Front_Action{
    public function viewAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('cart/quote/view.css');
        $child = $layout->getChild('content');
        $cart = $layout->createBlock('cart/quote');
        $child->addChild('cart', $cart);
        $layout->toHtml();
    }
}
