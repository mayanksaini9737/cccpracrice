<?php 
class Test_Model_Mfr extends Core_Model_Abstract{
    public function init()
    {
        $this->_modelClass = 'test/mfr';
        $this->_resourceClass = 'Test_Model_Resource_Mfr';
        $this->_collectionClass = 'Test_Model_Resource_Collection_Mfr';
    }

}