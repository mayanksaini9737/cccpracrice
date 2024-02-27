<?php
class Catalog_Block_Admin_Product_List extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('catalog/admin/product/list.phtml');
    }

    public function getProductList()
    {
        $productCollection = Mage::getModel("catalog/product")->getCollection();
        return $productCollection->getData();
    }
}
?>