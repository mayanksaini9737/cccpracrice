<?php
class Catalog_Block_Category_View extends Core_Block_Template
{
    protected $_category = null;
    protected $_categoryId = null;
    public function __construct()
    {
        $this->setTemplate('catalog/category/view.phtml');
    }
    public function init()
    {
        $categoryId = $this->getData('categoryId');
        if ($categoryId) {
            $this->_categoryId = $categoryId;
        }
    }

    public function getCategory()
    {
        if (isset($this->_categoryId)) {
            return Mage::getModel('catalog/product')
                ->getCollection()
                ->addFieldToFilter('category_id', $this->_categoryId)
                ->addFieldToFilter('status', '1');
        }
    }

}
?>