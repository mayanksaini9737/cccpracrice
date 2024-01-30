<?php 
    class Employee{
        public $name;
        public $position;
        public $salary;

        public function __construct($nm, $ps, $sal){
            $this->name = $nm;
            $this->position = $ps;
            $this->salary = $sal;
        }

        public function claculateYearlyBonus(){
            return $this->salary * 0.15;     // 15% bonus
        }
    }

    $mayank = new Employee("Mayank", "PHP Devp", 25000);
    echo $mayank->claculateYearlyBonus();
?>