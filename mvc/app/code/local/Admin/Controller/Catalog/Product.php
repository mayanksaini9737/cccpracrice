<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('header.css');
        $layout->getChild('head')->addCss('product/form.css');
        $layout->getChild('head')->addCss('footer.css');
        $layout->getChild('head')->addJs('header.js');

        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('catalog/admin_product');
        $child->addChild('form', $productForm);
        $layout->toHtml();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams('catalog_product');
        $product = Mage::getModel('catalog/product')
            ->setData($data)->save();

        echo '<pre>';
        print_r($product);
    }

    public function deleteAction()
    {
        $data = $this->getRequest()->getParams('id');
        $obj = Mage::getModel('catalog/product')
            ->setId($data)->delete();
    }

}