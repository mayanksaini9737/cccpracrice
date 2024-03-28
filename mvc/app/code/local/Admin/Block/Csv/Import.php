<?php 
class Admin_Block_Csv_Import extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('admin/csv/upload.phtml');
    }
    public function getFileList()
    {
        return array_diff(scandir(Mage::getBaseDir('media/import')), ['.', '..']);
    }
}