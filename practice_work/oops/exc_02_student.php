<?php 
    class Student{
        public $name;
        public $age;
        public $grade;

        public function displayInfo(){
            echo "Name: $this->name, Age: $this->age, Grade: $this->grade";
        }
    }

    $mayank = new Student();
    $mayank->name = "Mayank Saini";
    $mayank->age = 21;
    $mayank->grade = "B";
    $mayank->displayInfo();

?>