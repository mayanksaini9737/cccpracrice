<?php 
    class Core_Controller_Front{
        public function init(){
            $req = new Core_Model_Request();
            // $req->getActionName();
            // $req->getControllerName();
            // $req->getModuleName();
            $className = $req->getFullControlClass();
            echo $className;
        }
    }
?>