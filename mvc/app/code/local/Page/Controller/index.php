<?php
class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        // echo __FILE__;
        // echo "from page/index/index";
        // print_r($this);
        
        $layout = $this->getLayout()->toHtml();
    }
}
?>