<?php 

class Tempconverter_Controller_Converter extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->removeChild('header')->removeChild('footer');
        $layout->getChild('head')->addCss('form.css');
        $layout->getChild('head')->addCss('list.css');
        $child = $layout->getChild('content');
        $registerForm = $layout->createBlock('tempconverter/converter');
        $child->addChild('registerForm', $registerForm);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $requestData = $this->getRequest()->getParams('tempdata');
        Mage::getModel('tempconverter/converter')->addTemp($requestData);
        $this->setRedirect('tempconverter/converter/form');
    }

}