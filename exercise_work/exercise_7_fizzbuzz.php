<?php 
    $arr = range(1,100);
    // print_r($arr);

    function fizzbuzz($val){
        if (($val%3 == 0) && ($val%5 != 0)){
            echo "Fizz";
            echo "<br>";
            return;
        } elseif (($val%5 == 0) && ($val%3 != 0)){
            echo "Buzz";
            echo "<br>";
            return;
        } elseif (($val%3 == 0) && ($val%5 == 0)){
            echo "FizzBuzz";
            echo "<br>";
            return;
        }  else {
            echo $val;
            echo "<br>";
            return;
        }
    }

    array_map('fizzbuzz',$arr);
?>