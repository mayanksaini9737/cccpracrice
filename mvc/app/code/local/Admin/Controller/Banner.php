<?php
class Admin_Controller_Banner extends Core_Controller_Admin_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('form.css');
        $child = $layout->getChild('content');
        $bannerForm = $layout->createBlock('banner/form');
        $child->addChild('bannerForm', $bannerForm);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $bannerData = $this->getRequest()->getPostData('banner');
        $bannerFile = $this->getRequest()->getFileData('banner');
        $bannerImageName = $bannerFile['name']['banner_image'];
        $bannerData['banner_image'] = $bannerImageName;

        $bannerMediaPath = Mage::getBaseDir('media/banner/') . $bannerImageName;
        
        if (file_exists($bannerMediaPath)) {
            $pathInfo = pathinfo($bannerMediaPath);
            $fileExtension = isset($pathInfo['extension']) ? '.' . $pathInfo['extension'] : '';
            $counter = 1;
            while (file_exists($pathInfo['dirname'] . '/' . $pathInfo['filename'] . $counter . $fileExtension)) {
                $counter++;
            }
            $bannerName = $pathInfo['filename'] . $counter . $fileExtension;
            $bannerData['banner_image'] = $bannerName;
            $bannerMediaPath = $pathInfo['dirname'] . '/' . $bannerName;
        }
        move_uploaded_file(
            $bannerFile['tmp_name']['banner_image'],
            $bannerMediaPath
        );

        Mage::getModel('banner/banner')
            ->setData($bannerData)->save();

        $this->setRedirect('admin/banner/list');
        
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('product/list.css');
        $child = $layout->getChild('content');
        $bannerList = $layout->createBlock('banner/list');
        $child->addChild('bannerList', $bannerList);
        $layout->toHtml();
    }

    public function deleteAction()
    {
        $bannerId = $this->getRequest()->getParams('id');
        $bannerData = Mage::getModel('banner/banner')
            ->load($bannerId);
        $bannerMediaPath = Mage::getBaseDir('media/banner/') . $bannerData->getBannerImage();
        unlink($bannerMediaPath);
        $bannerData->delete();

        $this->setRedirect('admin/banner/list');
    }
}

?>