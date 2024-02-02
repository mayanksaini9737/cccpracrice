<?php 
    class calculation{
        // properties
        public $a, $b, $c;
        
        // methods
        function sum(){
            $this->c = $this->a + $this->b;
            return $this->c;
        }
        function sub(){
            $this->c = $this->a - $this->b;
            return $this->c;
        }
    }

    $ob1 = new calculation();
    $ob1->a = 30;
    $ob1->b = 3;

    echo "Sum of ob1 : ". $ob1->sum(). "<br>";
    echo "Sub of ob1 : ". $ob1->sub(). "<br>";


?>