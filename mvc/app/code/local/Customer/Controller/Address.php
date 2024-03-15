<?php
class Customer_Controller_Address extends Core_Controller_Front_Action
{
    public function newAction()
    {
        $address = $this->getRequest()->getParams('address');
        Mage::getModel('customer/address')->setData($address)->save();
        $this->setRedirect('cart/checkout/index');
    }
}
