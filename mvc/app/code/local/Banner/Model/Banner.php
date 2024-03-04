<?php
class Banner_Model_Banner extends Core_Model_Abstract
{
    public function init()
    {
        $this->_modelClass = 'banner/banner';
        $this->_resourceClass = 'Banner_Model_Resource_Banner';
        $this->_collectionClass = 'Banner_Model_Resource_Collection_Banner';
    }

    public function getStatus()
    {
        $statusMapping = [
            '1' => 'Enabled',
            '0' => 'Disabled'
        ];
        return isset($this->_data['status']) ? $statusMapping[$this->_data['status']] : '';
    }

    public function getBannerPath()
    {
        return Mage::getBaseUrl('media/banner/' . $this->getBannerImage());
    }
}
?>