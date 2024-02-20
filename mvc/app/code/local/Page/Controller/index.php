<?php
class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        // echo __FILE__;
        // echo "from page/index/index";

        $layout = $this->getLayout();
        // $layout->getChild('head')->addJs('js/navigation.js');
        // $layout->getChild('head')->addJs('js/page.js');
        // $layout->getChild('head')->addCss('css/navigation.css');
        // $layout->getChild('head')->addCss('css/page.css');
        $banner = $layout->createBlock("core/template")
                        ->setTemplate("banner/banner.phtml");
                        // echo get_class($banner);
                        // die();
        $layout->getChild('content')
                        ->addChild('banner', $banner)
                        ->addChild('banner', $banner);
        $layout->toHtml();
    }
}
?>