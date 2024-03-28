<?php 

class Test_Block_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('test/form.phtml');
    }

    public function getFromParent()
    {   
        $result = [];
        
        $data = Mage::getModel('test/mfr_brand')->getCollection()
            ->addFieldToFilter('name', ['not like'=>'%i%'])->getData();
        foreach ($data as $row) {
            $result [] = Mage::getModel('test/mfr')->load($row->getMfrId());
        }
        return $result;

        // return Mage::getModel('test/mfr')->getCollection()->getData();
    }
    public function getFromChild()
    {
        $mfr_id = $this->getRequest()->getParams('id');
        return Mage::getModel('test/mfr_brand')->getCollection()
            ->addFieldToFilter('mfr_id',$mfr_id)->getData();
    }
    public function getSelectedOption()
    {
        return $this->getRequest()->getParams('id');
    }
}