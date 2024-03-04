<?php 
class Catalog_Block_Product_View extends Core_Block_Template
{
    protected $_product = null;
    public function __construct()
    {
        $this->setTemplate('catalog/product/view.phtml');
    }
    public function init()
    {
        $productId = $this->getData('productId');
        if ($productId) {
            $this->_product = Mage::getModel('catalog/product')->load($productId);
        }
    }
    public function getProduct()
    {
        return $this->_product;
    }
}
?>