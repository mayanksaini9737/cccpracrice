<?php 
    // __clone() - it is help to clone the subobject of class ( if it is not implemented then when you use clone function for clone any object then it's subobject is copied by refrence means when you trying to change subobject's value for any object(main object or copied object), it will change the value subobject for both object.)

    // arguments not required
    // $obj1 = $obj2; it is copy the object with refrence 
    // clone directly copy the obejct (by value);

    class Organization {
        public $name;
        public $course;

        public function setCourse(Course $cn){
            $this->course = $cn;
        }

        public function __clone(){
            $this->course = clone $this->course;
        }
    }

    class Course {
        public $courseName;
        public function __construct($cn){
            $this->courseName = $cn;
        }
    }

    $emp1 = new Organization();
    $course = new Course("PHP");
    $emp1->setCourse($course);

    // It is directly copy the object with refrence
    // $emp2 = $emp2;      

    // It copy the object with value but for subobject is copy by refrence without using __clone() magic method
    $emp2 = clone $emp1;

    // it will change the course name for both object because of copy by ref (without using __clone() method)
    // $emp2->course->courseName ="Java";  
    

    $emp2->course->courseName ="Java";  

    print_r($emp1);
    print_r($emp2);

?>