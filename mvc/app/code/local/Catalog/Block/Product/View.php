<?php 
class Catalog_Block_Product_View extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('catalog/product/view.phtml');
    }
    public function getProduct()
    {
        $productId = $this->getRequest()->getParams('id', 1);
        return $this->_product = Mage::getModel('catalog/product')->load($productId);
    }
}
?>