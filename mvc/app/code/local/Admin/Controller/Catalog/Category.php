<?php

class Admin_Controller_Catalog_Category extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $layout->getChild('head')->addCss('category/form.css');
        $layout->getChild('head')->addJs('category/form.js');

        $categoryForm = $layout->createBlock('catalog/admin_category_form');
        $child->addChild('form', $categoryForm);
        echo $layout->toHtml();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams('catalog_category');
        $category = Mage::getModel('catalog/category')
            ->setData($data)->save();

        echo '<pre>';
        print_r($category);
    }
}