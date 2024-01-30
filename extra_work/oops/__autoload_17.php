<?php 

    // __autoload is used auto load the class as per required during creting object
    // so you dont have to add class file manually
    // Note: class name and filename must be same

    require 'classes/first.php';
    require 'classes/second.php';

    // autoload is no longer supported

    // function __autoload($cls){
    //     require 'classes/'. $cls . '.php';
    // }

    $fst = new first();
    $snd = new second();
?>