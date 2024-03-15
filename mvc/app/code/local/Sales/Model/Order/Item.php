<?php 
class Sales_Model_Order_Item extends Core_Model_Abstract
{
    public function init() 
    {
        $this->_modelClass = 'sales/order_item';
        $this->_resourceClass = 'Sales_Model_Resource_Order_Item';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Order_Item';
    }

    public function _beforeSave()
    {
        $this->removeData('quote_id')
            ->removeData('item_id');
        
        $product = Mage::getModel('catalog/product')
            ->load($this->getProductId());
        
        $this->addData('product_name', $product->getName());
        $this->addData('product_color', $product->getColor());
    }
}
