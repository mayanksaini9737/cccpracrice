<?php
class Mage
{
    public static $baseDir = 'C:/xampp/htdocs/Practice/mvc';
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

    }

    public static function register($key, $value)
    {

    }

    public static function registry($key)
    {

    }

    public static function getBaseDir($subDir = null)
    {
        // if ($subDir === null) {
        //     return self::$baseDir;
        // }
        // $fullPath = self::$baseDir . '/' . $subDir;
        // if (!is_dir($fullPath)) {
        //     return self::$baseDir;
        // }
        // return $fullPath; 
        
        if($subDir){
            return self::$baseDir .'/'. $subDir;
        }
        return self::$baseDir;
    }
}
?>