<?php 
class Sales_Model_Quote_Customer extends Core_Model_Abstract
{ 
    public function init() 
    {
        $this->_modelClass = 'sales/quote_customer';
        $this->_resourceClass = 'Sales_Model_Resource_Quote_Customer';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote_Customer';
    }

    public function saveAddress(Sales_Model_Quote $quote, $request)
    {
        $customer = $this->getCollection()
            ->addFieldToFilter('quote_id', $quote->getId())
            ->getFirstItem();

        $this->setData($request);
        $this->addData('quote_id', $quote->getId());
        if($customer){
            $this->setId($customer->getId());
        }
        $this->save();
        return $this;
    }
}
