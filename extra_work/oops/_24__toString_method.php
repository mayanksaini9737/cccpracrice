<?php 
    // __toString() - allows a class to decide how it will react when it is treated like a string. For example, what echo $obj; will print (if this method is not implemented then echo $obj will throw an fatal error)
    // arguments not required
    // it can return only string or throw an error

    class AStudent {
        public $name;
        public function __construct($nm){
            $this->name = $nm;
        }

        public function __toString(){
            // get_class($obj) --> gives object's class name
            // return "Can't print object as a string of class: ". get_class($this);
            return "The name of student is: ". $this->name;
        }
    }

    $mk = new AStudent("Mayank");
    echo $mk;
?>