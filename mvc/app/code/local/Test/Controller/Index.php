<?php 

class Test_Controller_Index extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('form.css');
        $child = $layout->getChild('content');
        $form = $layout->createBlock('test/form');
        $child->addChild('form', $form);
        $layout->toHtml();
    }

    public function saveAction()
    {
        $id = $this->getRequest()->getPostData('parent');
        $this->setRedirect('test/index/form?id='.$id);
    }
    
}