<?php
class Mage
{
    public static $baseDir = 'C:/xampp/htdocs/Practice/mvc';
    public static $baseUrl = 'http://localhost/Practice/mvc';
    private static $_singleton = null;
    public static function init()
    {
        $frontController = new Core_Controller_Front();
        $frontController->init();
    }

    public static function getModel($className)
    {
        $className = ucwords(str_replace('/', '_Model_', $className), '_');
        return new $className;
    }
    public static function getBlock($className)
    {
        $className = ucwords(str_replace('/', '_Block_', $className), '_');
        return new $className;
    }

    public static function getSingleton($className)
    {
        if(isset(self::$_singleTon[$className])){
            return  self::$_singleton[$className]; 
        }
        else{
            return self::$_singleton[$className] = self::getModel($className); 
        }

    }

    public static function register($key, $value)
    {

    }

    public static function registry($key)
    {

    }

    public static function getBaseDir($subDir = null)
    {
        if ($subDir) {
            return self::$baseDir . '/' . $subDir;
        }
        return self::$baseDir;
    }

    public static function getBaseUrl($subUrl = null){
        if ($subUrl) {
            return self::$baseUrl . '/' . $subUrl;
        }
        return self::$baseUrl;
    }
}
?>