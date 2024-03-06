<?php 

class Tempconverter_Controller_Converter extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->removeChild('header')->removeChild('footer');
        $layout->getChild('head')->addCss('form.css');
        // $layout->getChild('head')->addJs('customer/account/register.js');
        $child = $layout->getChild('content');
        $registerForm = $layout->createBlock('tempconverter/converter');
        $child->addChild('registerForm', $registerForm);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $requestData = $this->getRequest()->getParams('tempdata');

        $convert = Mage::getModel('tempconverter/converter')->addTemp($requestData);
        echo "insert";
    }
}