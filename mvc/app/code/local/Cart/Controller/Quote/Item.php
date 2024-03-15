<?php 
class Cart_Controller_Quote_Item extends Core_Controller_Front_Action{
    public function viewAction()
    {
        $productId = $this->getRequest()->getParams("product_id");
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('cart/quote/itemview.css');
        $layout->getChild('head')->addJs('product/view.js');
        $child = $layout->getChild('content');
        $itemBlock = $layout->createBlock('cart/item');
        $child->addChild('cart', $itemBlock);
        $layout->toHtml();
    }
}
