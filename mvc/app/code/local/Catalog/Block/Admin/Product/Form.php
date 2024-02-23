<?php

class Catalog_Block_Admin_Product_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('catalog/admin/product/form.phtml');
    }

    public function checkProductExist()
    {
        $productId = $this->getRequest()->getParams('id');
        return $productId ? Mage::getModel('catalog/product')->load($productId)
            : Mage::getModel('catalog/product');
    }
}