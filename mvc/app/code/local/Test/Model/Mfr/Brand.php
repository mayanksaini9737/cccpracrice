<?php 
class Test_Model_Mfr_Brand extends Core_Model_Abstract{
    public function init()
    {
        $this->_modelClass = 'test/mfr_brand';
        $this->_resourceClass = 'Test_Model_Resource_Mfr_Brand';
        $this->_collectionClass = 'Test_Model_Resource_Collection_Mfr_Brand';
    }
}