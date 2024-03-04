<?php 
class Banner_Block_List extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('admin/banner/list.phtml');
    }

    public function getBannerList()
    {
        $bannerCollection = Mage::getModel("banner/banner")->getCollection();
        return $bannerCollection->getData();
    }
}