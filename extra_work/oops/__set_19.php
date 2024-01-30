<?php 
    // __set($prop, $val) - this method is used to show msg automatic inplace of error for trying to set private and undefined property
    // required two parameter

    class setmethod{
        private $name;

        // function __set($prop, $value){
        //     echo "You are trying to set the value of undefined or private property's value : property name is ($prop) and trying to set with the value of ($value)";
        // }
        function __set($prop, $value){
            if (property_exists($this, $prop)) {
                // using $prop after $this because of $prop is not the member variable of class 
                $this->$prop = $value;
            } else{
                echo "You are trying to set the value of undefined property's value : property name is ($prop) and trying to set with the value of ($value)";

            }
        }
        function showname(){
            echo "Name is: ". $this->name;
        }
    }

    $st = new setmethod();
    // $st->cource = "PHP";
    $st->name = "Mayank";
    $st->showname();
?>