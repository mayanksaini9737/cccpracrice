<?php 
    // abstract class -> we do not create object of abstract class
                    // -> we can use it create class using abstract class
    
    // 2 conditions for creating abstract class 
    // 1) declare a abstract method in abstract class and
    // 2) implement the abstract method into derived class
    
    abstract class parentClass{
        public $name;
        // declaration of abstract method
        abstract protected function calc($a, $b);
    }

    class childClass extends parentClass{
        
        // implementation of abstract method - we can not change the declaration of method (means in arguments)
        // public function calc($c){    // it will throw error 
        //     echo "Hello";
        // }
        public function calc($c, $d){
            echo "addition is :". $c +$d;
        }
    }

    $obj = new childClass();
    $obj->calc(20, 10);
    
?>