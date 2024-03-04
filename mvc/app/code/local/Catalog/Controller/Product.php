<?php
class Catalog_Controller_Product extends Core_Controller_Front_Action
{
    public function viewAction()
    {
        $productId = $this->getRequest()->getParams('id', 1);
        $layout = $this->getLayout();
        $child = $layout->getChild('head')->addCss('product/view.css');
        $child = $layout->getChild('head')->addJs('product/view.js');
        $child = $layout->getChild('content');
        $productBlock = $layout->createBlock('catalog/product_view')
            ->setData('productId', $productId);
        $productBlock->init();
        $child->addChild('product', $productBlock);
        $layout->toHtml();
    }
}