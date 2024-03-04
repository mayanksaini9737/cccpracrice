<?php 
class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function addAction()
    {
        $cartData = $this->getRequest()->getParams();
        echo "<pre>";
        print_r($cartData);
    }
}