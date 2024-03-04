<?php 
class Sales_Model_Quote_Item extends Core_Model_Abstract
{ 
    public function init() 
    {
        $this->_modelClass = 'sales/quote_item';
        $this->_resourceClass = 'Sales_Model_Resource_Quote_Item';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote_Item';
    }
}
