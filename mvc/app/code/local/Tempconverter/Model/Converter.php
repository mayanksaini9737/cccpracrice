<?php
class Tempconverter_Model_Converter extends Core_Model_Abstract
{
    public function init()
    {
        $this->_modelClass = 'tempconverter/converter';
        $this->_resourceClass = 'Tempconverter_Model_Resource_Converter';
        $this->_collectionClass = 'Tempconverter_Model_Resource_Collection_Converter';
    }

    public function condition($request)
    {
        $temp = $request['temprature'];

        if (($request['unit'] == 'Celcious' && $request['convert_unit'] == 'Celcious')) {
            $result = $temp;
            $this->addData('result', $result);
        } else if (($request['unit'] == 'Celcious' && $request['convert_unit'] == 'Fahrenhit')) {
            $result = ((9 / 5) * $temp) + 32;
            $this->addData('result', $result);
        } else if (($request['unit'] == 'Celcious' && $request['convert_unit'] == 'Kelvin')) {
            $result = $temp + 273.15;
            $this->addData('result', $result);
        } else if (($request['unit'] == 'Fahrenhit' && $request['convert_unit'] == 'Fahrenhit')) {
            $result = $temp;
            $this->addData('result', $result);
        } else if (($request['unit'] == 'Fahrenhit' && $request['convert_unit'] == 'Celcious')) {
            $result = ($temp-32)*(5/9);
            $this->addData('result', $result);
        } else if (($request['unit'] == 'Fahrenhit' && $request['convert_unit'] == 'Kelvin')) {
            $result = (($temp-32)*(5/9)) + 273.15 ;
            $this->addData('result', $result);
        } else if (($request['unit'] == 'Kelvin' && $request['convert_unit'] == 'Kelvin')) {
            $result = $temp;
            $this->addData('result', $result);
        } else if (($request['unit'] == 'Kelvin' && $request['convert_unit'] == 'Celcious')) {
            $result = $temp - 273.15;
            $this->addData('result', $result);
        } else if (($request['unit'] == 'Kelvin' && $request['convert_unit'] == 'Fahrenhit')) {
            $result = ($temp-273.15)*(9/5) + 32;
            $this->addData('result', $result);
        }
    }

    public function checkSessionId()
    {
        $session = Mage::getSingleton('core/session');
        $session_id = $session->get('id');
        if (isset($session_id)) {
            $this->addData('session_id', $session->get('id'));
        } else {
            $session->set('id', 1);
            $this->addData('session_id', $session->get('id'));
        }
        return $this;
    }

    public function addTemp($request)
    {
        $this->setData($request);
        $this->checkSessionId()->condition($request);
        $this->save();
    }

}