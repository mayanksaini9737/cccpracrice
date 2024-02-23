<?php
class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {

        $layout = $this->getLayout();
        $banner = $layout->createBlock("core/template")
            ->setTemplate("banner/banner.phtml");
        $layout->getChild('content')
            ->addChild('banner', $banner)
            ->addChild('banner', $banner);
        $layout->toHtml();
    }
}
?>