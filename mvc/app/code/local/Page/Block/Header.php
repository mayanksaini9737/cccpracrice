<?php

class Page_Block_Header extends Core_Block_Template
{

    public function __construct()
    {
        $this->setTemplate('page/header.phtml');
    }

    public function getUser()
    {
        $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        if($customerId) {
            $customer = Mage::getModel('customer/customer')->load($customerId);
            $customerName =  $customer->getFirstName();
            return ucfirst($customerName);
        } else {
            return '<a href="'.Mage::getBaseUrl('customer/account/login').'" class="nav__link login-button">Login</a>';
        }
    }
    public function getAdmin()
    {
        $session = Mage::getSingleton('core/session');
        if($session->get('logged_in_admin_user_id')) {
            return '<span class="nav__username">Admin</span>';
        } else {
            return '<a href="'.Mage::getBaseUrl('admin/user/login').'" class="nav__link login-button">Login</a>';
        }
    }
}

?>