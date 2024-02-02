<?php 

    // __destruct -> always run after finishing the execution of remaining script 
    class dest{
        public $name;
        function __construct($n){
            echo "Hii from ". $this->name=$n ."<br>";
        }
        function hello(){
            echo "hello guys <br>";
        }
        function __destruct(){
            echo "Bye bye from ". $this->name."";
        }
    }

    $dp = new dest("Deep");
    $dp->hello();
    $mk = new dest("Mayank");
    $dp->hello();
    $mk->hello();
    $yp = new dest("Yogesh");
    $yp->hello();
    
    // destruct method firstly run for lastly created object
    
?>