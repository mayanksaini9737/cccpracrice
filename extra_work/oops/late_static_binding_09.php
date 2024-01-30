<?php 
    // late static binding

    class baseClass{
        protected static $name = "Mayank";
        public function show(){
            // echo self::$name;

            // it is late static binding (it helps to change the value of static variable for derived class)
            echo static::$name;
        }
    }
    class derivedClass extends baseClass{
        protected static $name = "Mayank Saini";
    }
    // $obj1 = new baseClass();
    // $obj1->show();

    $obj2 = new derivedClass();
    $obj2->show();

?>