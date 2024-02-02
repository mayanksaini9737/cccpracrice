<?php 
    class base{
        public $name= "Base";
        public function show(){
            echo "My name is ". $this->name. "<br>";
        }
    }

    class child extends base{
        // properties overriding
        public $name = "Child";

        // method overriding
        public function show(){
            echo "Your name is ". $this->name. "<br>";
        }
    }

    $bs1 = new base();
    $bs1->show();

    $ch1 = new child();
    $ch1->show();
?>