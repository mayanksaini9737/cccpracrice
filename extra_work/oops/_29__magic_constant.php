<?php 
    //  Magic Costants - 
    // 1) __LINE__
    // 2) __FILE__
    // 3) __DIR__
    // 4) __FUNCTION__
    // 5) __CLASS__
    // 6) __METHOD__
    // 7) __NAMESPACE__
    // 8) __TRAIT__


    // 1) __LINE__ - gives number of line in which this constant is used
    // echo "Line number of code is :". __LINE__;  //  14

    // 2) __FILE__ - gives proper path of the file in which this magic constant is used 
    // echo "Path of this file is :". __FILE__; //C:\xampp\htdocs\Practice\extra_work\oops\_29__magic_constant.php

    // 3) __DIR__ - gives proper path of this files directory in which this magic constant is used 
    // echo "Path of this file is :". __DIR__; // C:\xampp\htdocs\Practice\extra_work\oops

    // 4) __FUNCTION__ - gives name of the function in which funcion is this constant is used
    // function hello(){
    //     echo "Function name is: " . __FUNCTION__;
    // }
    // hello();

    // namespace mynamespace;
    trait helloTrait{
        function hello(){
            echo "TRAIT name is: " . __TRAIT__;
        }
    }

    class HelloClass {

        // 5) __CLASS__
        // function helloFun(){
        //     return "class name is: ". __CLASS__;
        // }

        // 6) __METHOD__
        // function helloFun(){
        //     return "Method name is: ". __METHOD__;
        // }
        
        // 7) __NAMESPACE__
        // function helloFun(){
        //     return "Namespace name is: ". __NAMESPACE__;
        // }

        // 8) __TRAIT__
        use helloTrait;

    }

    $obj = new HelloClass();
    // echo $obj->helloFun();

    echo $obj->hello();             // helloTrait





?>