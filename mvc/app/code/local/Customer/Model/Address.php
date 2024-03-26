<?php 
class Customer_Model_Address extends Core_Model_Abstract
{
    public function init()
    {   
        $this->_modelClass = 'customer/address';
        $this->_resourceClass = 'Customer_Model_Resource_Address';
        $this->_collectionClass = 'Customer_Model_Resource_Collection_Address';
    }

    public function savingCustomerAddress($addressData)
    {
        
        $checkCustomerAddress = Mage::getModel('customer/address')->getCollection()
            ->addFieldToFilter('customer_id',$addressData['customer_id'])->getFirstItem();
            
        $addressModel =  Mage::getModel('customer/address')->setData($addressData)
            ->removeData('email');
            if ($checkCustomerAddress !== null) {
                $addressModel->addData('address_id', $checkCustomerAddress->getId());
            }
        $addressModel->save();
    }
}
