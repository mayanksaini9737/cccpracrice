<?php
class Catalog_Block_Admin_Category_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('catalog/admin/category/form.phtml');
    }

    public function checkCategoryExist()
    {
        $productId = $this->getRequest()->getParams('id');
        return $productId ? Mage::getModel('catalog/product')->load($productId)
            : Mage::getModel('catalog/product');
    }
}

?>