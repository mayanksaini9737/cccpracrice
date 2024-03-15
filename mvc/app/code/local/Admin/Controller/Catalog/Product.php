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
        $productData = $this->getRequest()->getParams('catalog_product');
        $productFile = $this->getRequest()->getFileData('catalog_product');
        $productImageName = $productFile['name']['image_link'];
        
        if (!empty($productImageName)){
            $productData['image_link'] = $productImageName;

            $productMediaPath = Mage::getBaseDir('media/product/') . $productImageName;
            
            if (file_exists($productMediaPath)) {
                $pathInfo = pathinfo($productMediaPath);
                $fileExtension = isset($pathInfo['extension']) ? '.' . $pathInfo['extension'] : '';
                $counter = 1;
                while (file_exists($pathInfo['dirname'] . '/' . $pathInfo['filename'] . $counter . $fileExtension)) {
                    $counter++;
                }
                $productImageName = $pathInfo['filename'] . $counter . $fileExtension;
                $productData['image_link'] = $productImageName;
                
                $productMediaPath = $pathInfo['dirname'] . '/' . $productImageName;
            }
            move_uploaded_file(
                $productFile['tmp_name']['image_link'],
                $productMediaPath
            );

        } else {
            $productData['image_link'] = $this->getRequest()->getPostData('productImg');
        }
        Mage::getModel('catalog/product')
            ->setData($productData)->save();
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