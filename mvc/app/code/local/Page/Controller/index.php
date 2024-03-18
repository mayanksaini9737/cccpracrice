<?php
class Page_Controller_Index extends Core_Controller_Front_Action
{
    
    public function indexAction()
    {
        $layout = $this->getLayout();
        $layout->getChild("head")->addCss('banner/banner.css');
        $layout->getChild('head')->addCss('category/view.css');
        $layout->getChild("head")->addJs('banner/banner.js');
        $banner = $layout->createBlock("banner/banner");
        $products = $layout->createBlock('catalog/category_view');
        $layout->getChild('content')
            ->addChild('banner', $banner)
            ->addChild('products', $products);
        $layout->toHtml();   
    }
}
