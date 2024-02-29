<?php 
class Admin_Controller_User  extends Core_Controller_Admin_Action
{
    protected $_allowedActions = ['login'];
    public function loginAction()
    {
       $layout = $this->getLayout();
        $layout->getChild('head')->addCss('customer/account/login.css');
        $child = $layout->getChild('content');
        $productForm = $layout->createBlock('admin/user');
        $child->addChild('form', $productForm);
        $layout->toHtml();
        if ($this->getRequest()->isPost()) {
            $loginCredentials = $this->getRequest()->getParams('login');
            $adminEmail = 'admin@gmail.com';
            $adminPassword = 'admin123';

            $email = $loginCredentials['email'];
            $password = $loginCredentials['password'];
            
            
            if ($adminEmail == $email && $adminPassword == $password) {
                Mage::getSingleton('core/session')
                    ->set('logged_in_admin_user_id', 1);
                $this->setRedirect('admin/catalog_category/form');
            } else {
                $this->setRedirect('admin/user/login');
            }
        }
    }

}
?>