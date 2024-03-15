<?php
class Catalog_Block_Category_View extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('catalog/category/view.phtml');
    }

    public function getCategory()
    {
        $categoryId = $this->getRequest()->getParams('id');
        if (empty($categoryId)) {
            return Mage::getModel('catalog/product')
                ->getCollection();
        } else {
            return Mage::getModel('catalog/product')
                ->getCollection()
                ->addFieldToFilter('category_id', $categoryId)
                ->addFieldToFilter('status', '1');
        }
    }

}
?>