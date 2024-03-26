<?php 
class Admin_Block_Csv_Import extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('admin/csv/upload.phtml');
    }
}