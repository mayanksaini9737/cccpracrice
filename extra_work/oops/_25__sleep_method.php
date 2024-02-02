<?php 
    // __sleep() - serialize() checks if the class has a function with the magic name __sleep(). If so, that function is executed prior to any serialization. It can clean up the object and is supposed to return an array with the names of all variables of that object that should be serialized. If the method doesn't return anything then null is serialized
    // arguments not required
    // if __sleep is not declared in class then it will be serialised objects all properties
    
    // serialize($obj or $arr) - returns an string of array, obj or any value
    // serialize($obj or $arr) - serialize() function is used to convert a PHP value into a storable representation. This is particularly useful when you need to store or transfer data that includes complex data structures, such as arrays or objects

    class SlClass {
        public $Firstname;
        public $Middlename;
        public $Lastname;
        public function __construct($fn, $mn, $ln){
            $this->Firstname = $fn; 
            $this->Middlename = $mn; 
            $this->Lastname = $ln; 
        }

        public function __sleep(){
            return array("Firstname", "Lastname");
            // return;  // if not return an array of instance-variables then shows error
            // return array(); // it can return empty array that dont show any error and not serialized any instance-variables
        }
    }

    $mk = new SlClass("Mayank", "Rajendraprasad", "Saini");
    $srlMk = serialize($mk);
    echo $srlMk;
?>