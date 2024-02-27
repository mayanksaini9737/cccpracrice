<?php 
class Core_Controller_Front_Action
{
    protected $_layout=null;

    public function __construct()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('header.css');
        $layout->getChild('head')->addCss('header.js');
        $layout->getChild('head')->addCss('footer.css');
        $layout->getChild('head')->addCss('message.css');
        $layout->getChild('head')->addJs('message.js');
    }

    public function getLayout()
    {
        if (is_null($this->_layout)){
            $this->_layout = Mage::getBlock('core/layout');
        }
        return $this->_layout;
    }

    public function getRequest(){
        return Mage::getModel('core/request');
    }
}
?>