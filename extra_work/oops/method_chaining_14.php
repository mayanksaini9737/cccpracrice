<?php 
    class abc{
        function first(){
            echo "First function<br>";
            return $this;
        }
        function second(){
            echo "Second function<br>";
            return $this;
        }
        function third(){
            echo "Third function<br>";
        }
    }

    $obj = new abc();
    // $obj->first();
    // $obj->second();
    // $obj->third();

    // when every time you want to call all these three method then use method chaining
    // for use method chaining you have return that object using this keyword for next method

    $obj->first()->second()->third();
?>