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
        $layout->toHtml();
    }
}
?>