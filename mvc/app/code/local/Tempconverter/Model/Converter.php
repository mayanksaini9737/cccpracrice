<?php
class Tempconverter_Model_Converter extends Core_Model_Abstract
{
    protected $tempData = null;
    public function init()
    {
        $this->_modelClass = 'tempconverter/converter';
        $this->_resourceClass = 'Tempconverter_Model_Resource_Converter';
        $this->_collectionClass = 'Tempconverter_Model_Resource_Collection_Converter';
    }

    public function _beforeSave($request)
    {
        $session = Mage::getSingleton('core/session');

        $session_id = $session->getId('id');
        if(!isset($session_id)){
            $id = Mage::getSingleton('core/session')->setId('id', 1);
        }

        $this->addData('session_id', $session->getId());
        $temp = $request['temprature'];
        if(($request['unit'] == 'Celcious' && $request['convert_unit'] == 'Fahrenhit')){
            $result = ((9/5) * $temp) +32 ;
        }
        $this->addData('result', $result);
    }

    public function addTemp($request)
    {
        $this->tempData = $request;
        $this->setData($this->tempData);
        $this->save();
    }


}