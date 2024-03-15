<?php
class Catalog_Controller_Category extends Core_Controller_Front_Action
{
    public function viewAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('head')->addCss('category/view.css');
        $child = $layout->getChild('content');
        $categoryBlock = $layout->createBlock('catalog/category_view');
        $child->addChild('category', $categoryBlock);
        $layout->toHtml();
    }
}
