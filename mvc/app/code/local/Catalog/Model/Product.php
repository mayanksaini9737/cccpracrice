<?php

class Catalog_Model_Product extends Core_Model_Abstract
{   
    protected $_categoryNames = [];

    public function init()
    {   
        $this->_resourceClass = 'Catalog_Model_Resource_Product';
        $this->_collectionClass = 'Catalog_Model_Resource_Collection_Product';
        $this->_modelClass = 'catalog/product';
    }
     
    public function getStatus()
    {
        $mapping = [
            0=> 'Disabled',
            1=> 'Enabled',
        ];
        return isset($this->_data['status']) ? $mapping[$this->_data['status']]: '';
    }
    public function getCategoryName()
    {
        if (isset($this->_categoryNames[$this->getCategoryId()])) {
            return $this->_categoryNames[$this->getCategoryId()];
        } else {
            $category = Mage::getModel('catalog/category')->load($this->getCategoryId());
            $this->_categoryNames[$this->getCategoryId()] = $category->getCategoryName();
            return $this->_categoryNames[$this->getCategoryId()];
        }
    }
}
