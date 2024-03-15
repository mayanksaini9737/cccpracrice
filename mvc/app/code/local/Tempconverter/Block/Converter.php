<?php 

class Tempconverter_Block_Converter extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('temp/converter.phtml');
    }

    public function getTempList()
    {
        $tempCollection = Mage::getModel("tempconverter/converter")->getCollection();
        $tempRecord = $tempCollection->addOrderBy('id DESC')->addLimit(10);
        return $tempRecord->getData();
    }
    public function getUnit(){
        $mapping = ['Celcious','Kelvin','Fahrenhit'];
        return $mapping;
    }
    public function checkUser(){
        $session = Mage::getSingleton('core/session');
        $session_id = $session->get('id');
        return Mage::getModel('tempconverter/converter')->getCollection()
            ->addFieldToFilter('session_id', $session_id)->getFirstItem();
    }
}
?>