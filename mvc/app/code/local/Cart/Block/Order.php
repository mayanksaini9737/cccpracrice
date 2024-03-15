<?php 

class Cart_Block_Order extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('cart/order.phtml');
    }

    public function getOrderDetails()
    {
        $details = $this->getRequest()->getParams();
        return $details;
    }
}