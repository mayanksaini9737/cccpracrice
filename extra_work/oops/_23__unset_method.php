<?php 
    // __unset(property) - this method runs automatically when you use unset() function for unset a private property (if class  doesn't have then it will throw error for unsetting private property)
    // required 1 argument
    // public property can be unset normally using unset function
    
        
    class Student {
        public $sem = 1;
        private $name = "Mayank";

        public function __unset($prop){
            unset($this->$prop);
        }
        
    }

    $student = new Student();
    // unset($student->sem);
    unset($student->name);
    echo "<pre>";
    print_r($student);
?>