<?php 
    // static member
    // when you want to access properties and method outside the class witout creating the object then use static keyword 
    // when a class has all properties and methods are static then that class is called static class 

    class classA{
        // static propertey
        public static $name = "Mayank";

        // static method
        // public static function show(){
        //     // using self inplace of this keyword
                // :: scope resolution operator
        //     echo self::$name;
        // }

        // public function __construct($n){
        //     echo self::$name = $n;
        // }
    }

    // echo clasA::$name;
    // classA::show();

    // $ob = new classA("Deep");

    class classB extends classA{
        public function show(){
            echo parent::$name;
        }
    }
    $ob = new classB("Deep");
    $ob->show();

?>