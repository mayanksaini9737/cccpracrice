<?php
class Catalog_Controller_Category extends Core_Controller_Front_Action
{
    public function viewAction()
    {
        $categoryId = $this->getRequest()->getParams('id', 1);
        $layout = $this->getLayout();
        $child = $layout->getChild('head')->addCss('category/view.css');
        $child = $layout->getChild('content');
        $categoryBlock = $layout->createBlock('catalog/category_view')
            ->setData('categoryId', $categoryId);
        $categoryBlock->init();
        $child->addChild('category', $categoryBlock);
        $layout->toHtml();
    }
}
