<?php 
class Sales_Model_Quote_Payment extends Core_Model_Abstract
{ 
    public function init() 
    {
        $this->_modelClass = 'sales/quote_payment';
        $this->_resourceClass = 'Sales_Model_Resource_Quote_Payment';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote_Payment';
    }

    public function savePayment(Sales_Model_Quote $quote, $paymentMethod, $cardNumber=0)
    {
        $this->setData(
            [
                'quote_id' => $quote->getId(),
                'payment_method' => $paymentMethod,
                'card_number' => $cardNumber
            ]
        );
        
        $this->save();
        return $this;
    }
}