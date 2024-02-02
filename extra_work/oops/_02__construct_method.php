<?php 
    class person{
        // properties
        public $name;
        public $age;

        // constructor called automatic when new object initiated
        function __construct($nm = "Guest", $ag = 0){   // set default value 
            $this->name = $nm;
            $this->age = $ag;
        }

        function show(){
            echo $this->name. " is " . $this->age . " year old<br>";
        }
    }

    $pr1 = new person();
    $pr1->show();
    $pr2 = new person("Mayank", 21);
    $pr2->show();

?>