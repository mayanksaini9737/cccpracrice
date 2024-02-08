<?php 
    class Mage{
        public static function init(){
            // $request = new Model_Request();
            // $request = Mage::getModel("core/request");
            $frontController = new Core_Controller_Front(); 
            $frontController->init();
        }

        public static function getModel($className){
            $className = ucwords(str_replace('/','_Model_',$className),'_');
            return new $className;
        }

        public static function getSingleton($className){

        }

        public static function register($key, $value){

        }

        public static function registry($key){

        }

        public static function getBaseDir($subDir = null){

        }
    }
?>