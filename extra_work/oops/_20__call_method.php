<?php 
    // __call($method, $args) - this method is called when trying to call an private or undefined method(if not used this method then that code will throw fatal error)
    // required two parameter
    // $args returns an array of arguments

    // __callStatic() - this method will work same as __call() but is used for static methods that are privare or undefined  


    namespace call;
    // class Student{
    //     public $firstname = "Deep";
    //     public $lastname= "Prajapati";

    //     // __call
    //     private function setName($fname, $lstname){
    //         $this->firstname = $fname;
    //         $this->lastname = $lstname;
    //     }
    //     public function __call($method, $args){
    //         echo "You are trying to call an undefined or private method : $method";
    //     }

    //     // __callStatic
    //     private static function hello(){
    //         echo "Hello from private static method";
    //     }
    //     public static function __callStatic($method, $args){
    //         echo "You are trying to call static an undefined or private method : $method";
    //     }
    // }

    // $dp = new Student();
    // $dp->setName("Dip", "Prajapati");
    // $dp->getname();
    // Student::hello();


    
    // if method exist then call it otherwise show a msg
    class Student{
        public $firstname = "Deep";
        public $lastname= "Prajapati";

        private function setName($fname, $lstname){
            $this->firstname = $fname;
            $this->lastname = $lstname;
        }

        public function __call($method, $args){
            // method_exists - it will check the method it is exist in class or not
            if(method_exists($this, $method)){
                // it is a callback function that used to call to a function outside the class
                // [object, methodname], arguments
                call_user_func_array([$this, $method], $args);
            } else{
                echo "You are trying to call an undefined or private method : $method";
            }
        }

        // __callStatic
        private static function hello($name){
            echo "Hello $name";
        }
        public static function __callStatic($method, $args){
            // __CLASS__ it shows the name of class where it is used
            if(method_exists(__CLASS__, $method)){
                call_user_func_array([__CLASS__, $method], $args);
            }else{
                echo "You are trying to call static an undefined method : $method";
            }
        }
    }
    
    // $dp = new Student();
    // $dp->setName("Dip", "Prajapati");
    // print_r($dp);
    Student::hello("Vikas");
?>