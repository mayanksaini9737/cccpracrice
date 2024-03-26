<?php
class Sales_Model_Order extends Core_Model_Abstract
{
    const ORDER_STATUS = [
        1 => 'Pending',
        2 => 'Processing',
        3 => 'Completed',
        4 => 'Cancelled',
    ];

    public function init()
    {
        $this->_modelClass = 'sales/order';
        $this->_resourceClass = 'Sales_Model_Resource_Order';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Order';
    }


}
