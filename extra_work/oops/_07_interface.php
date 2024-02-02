<?php 
    // interface - used for inherit multiple classes into a single class
    // ===================================================================
    // rules 
    // but using interface keyword inplace of class for creating interface
    // interfaces are not for declaring properties
    // interfaces work as abstract class - do not create object directly
    // declaring methods inside the interface do not use access modifier ahead of method - implement methods inside the derived class and now you can use access modifier
    // implemented method has same number of arguments as declared in interface


    interface parent1{
        function sum($a, $b);
        function sub($a, $b);
    }
    interface parent2{
        function mult($a, $b);
    }

    class child_class implements parent1, parent2{
        public function sum($c, $d){
            echo "sum: ". $c+$d;
        }
        public function sub($c, $d){
            echo "substraction: ". $c-$d;
        }
        public function mult($c, $d){
            echo "multiplication : ". $c*$d;
        }
    }

    $ch = new child_class();
    $ch->sum(20, 3);
    echo "<br>";
    $ch->sub(20, 3);
    echo "<br>";
    $ch->mult(20, 3);

?>