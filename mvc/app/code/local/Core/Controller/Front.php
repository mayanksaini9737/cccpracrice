<?php
class Core_Controller_Front
{
    public function init()
    {
        $request = Mage::getModel("core/request");
        $actionName = $request->getActionName().'Action';
        $controllerClassName = $request->getFullControllerClass();
        $controller = new $controllerClassName();
        $controller->$actionName();
    }

    
}
?>