<?php 
class Core_Block_Layout extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate("core/first.phtml");
    }
    public function prepareChildren()
    {

    }
    public function createBlock($className)
    {

    }
}
?>