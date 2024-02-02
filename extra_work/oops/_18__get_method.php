<?php 
    // __get($property) - this method is used to show msg automatic inplace of error for trying to accessing undefined or private property (like private or protected)
    // required one parameter

    /*
    class abcd{
        // private $name;
        protected $name;

        function __get($prop){
            echo "You are trying to access undefined or private property ($prop)";
        }
    }

    $a = new abcd();
    $a->name;
    $a->batch;
    */


    // example -- 

    class exmp{
        private $data = ["name"=>"Mayank", "tech"=>"PHP"];
        // for finding prop it entered in __get(prop) then you can perform any operation
        function __get($key){
            if(array_key_exists($key, $this->data)){
                return $this->data[$key];
            } else{
                return "The ($key) key does not exist";
            }
        }
    }

    $arr = new exmp();
    // echo $arr->name;
    echo $arr->address;
?>