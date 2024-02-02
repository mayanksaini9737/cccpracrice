<?php 
    // __invoke() - is called when we trying to call an object as a function. (it not declared this function in class then script throws fatal error when we trying to call an object as a function )
    // arguments not required

    class Emp {
        public $name;

        public function __construct($nm){
            $this->name = $nm;
        }

        public function __invoke(){
            // echo "You are trying to use a object as a function.";
            echo $this->name;
        }
    }

    $mk = new Emp("Mayank");
    $mk();
?>