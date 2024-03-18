<?php 
class Sales_Block_Admin_Form extends Core_Block_Template
{   
    public function __construct()
    {
        $this->setTemplate('sales/admin/form.phtml');
    }

    public function getOrderDetails(){
        $id = $this->getRequest()->getParams('order_id');
        return Mage::getModel('sales/order')->load($id);
    }
}