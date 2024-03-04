<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Admin_Action
{
    protected $_allowedActions = ['form'];

    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('product/form.css');
        $layout->getChild('head')->addJs('product/form.js');

        $child = $layout->getChild('content');
        $productForm = $layout->createBlock('catalog/admin_product_form');
        $child->addChild('form', $productForm);
        $layout->toHtml();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams('catalog_product');
        Mage::getModel('catalog/product')
            ->setData($data)->save();
        $this->setRedirect('admin/catalog_product/list');
    }

    public function deleteAction()
    {
        $data = $this->getRequest()->getParams('id');
        Mage::getModel('catalog/product')
            ->load($data)->delete();
    }

    public function listAction(){
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('product/list.css');
        $child = $layout->getChild('content');
        $productList = $layout->createBlock('catalog/admin_product_list');
        $child->addChild('list', $productList);
        $layout->toHtml();
    }
}