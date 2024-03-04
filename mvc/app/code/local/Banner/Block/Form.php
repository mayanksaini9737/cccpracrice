<?php 
class Banner_Block_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('admin/banner/form.phtml');
    }
    public function checkBanner(){
        return  Mage::getModel('banner/banner')
            ->load($this->getRequest()->getParams('id',0));
    }
}