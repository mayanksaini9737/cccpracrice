<?php 
    class employee{
        public $name;
        public $age;
        public $salary;

        function __construct($na, $ag , $sa){
            $this->name = $na;
            $this->age = $ag;
            $this->salary = $sa;
        }

        function info(){
            echo "<h3>Employee profile</h3>";
            echo "Name :". $this->name. "<br>";
            echo "age :". $this->age. "<br>";
            echo "salary :". $this->salary. "<br>";
        }
    }

    class manager extends employee{
        public $ta = 2000;
        public $phone = 500;
        public $totalSalary;
        
        function info(){
            $this->totalSalary = $this->salary + $this->ta + $this->phone;

            echo "<h3>Manager profile</h3>";
            echo "Name :". $this->name. "<br>";
            echo "age :". $this->age. "<br>";
            echo "salary :". $this->totalSalary. "<br>";
        }
    }

    $em1 = new employee("Deep", 21, 10000);
    $mn1 = new manager("Karishna", 28, 20000);
    $em1->info();
    $mn1->info();
    
?>