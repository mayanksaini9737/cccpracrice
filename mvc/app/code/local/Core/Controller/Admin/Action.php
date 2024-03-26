<?php
class Core_Controller_Admin_Action extends Core_Controller_Front_Action
{
    protected $_allowedActions = [];

    public function __construct()
    {
        $this->init();
        $layout = $this->getLayout();
        $layout->getChild('header')->setTemplate('page/admin/header.phtml');
        $layout->getChild('footer')->setTemplate('page/admin/footer.phtml');
        $layout->getChild('head')->addCss('header.css');
        $layout->getChild('head')->addJs('header.js');
        $layout->getChild('head')->addCss('footer.css');
    }
    public function init()
    {
        $this->getLayout()->setTemplate("core/admin.phtml");
        if (
            !in_array($this->getRequest()->getActionName(), $this->_allowedActions) &&
            !Mage::getSingleton('core/session')->get('logged_in_admin_user_id')
        ) {
            $this->setRedirect('admin/user/login');
        }
    }

}
?>