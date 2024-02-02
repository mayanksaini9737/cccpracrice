<?php 
    // __isset($property) -> this method runs automatically when you use isset() or empty() function for cheking private property (if it is not used then it isset() will return 0 means prints nothing for checking every private property, it does not throw any error)
    // required 1 argument ($property_name)
    // public property normally can checked with normal isset() function

    class Student {
        public $sub;
        private $name;
        private $details = ["age"=>21, "city"=>"Ahmedabad"];
        
        public function setName($name){
            $this->name = $name;
        }

        // direct checking prop
        // public function __isset($property){
        //     echo isset($this->$property);
        // }

        // checking for a key in details array
        public function __isset($key){
            echo isset($this->details[$key]);
        }
    }

    $mk = new Student();
    $mk->setName("Mayank");
    // echo isset($mk->name);    // 1 
    // echo empty($mk->name);    // 1 

    echo isset($mk->age);        // 1

?>