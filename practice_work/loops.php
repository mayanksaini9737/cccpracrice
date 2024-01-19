<?php 
    /*
    Loops in PHP

    1. for loop
    2. while loop
    3. foreach loop
    4. do while loop
    */

    echo "<h1>Loops in PHP</h1>";


    // 1) for loop - The `for` loop is used when you know in advance how many times the loop should run
    echo "<h2>for loop</h2>";
    // for(intialization, condition and increment/decrement){
        // 
    // }

    // for($count=0; $count<=10; $count++){
    //     echo $count ."<br>";
    // }

    // for($count=0;;){
    //     echo $count ."<br>";
    // } 

    // print pattern
    echo "<pre>"; 
    for ($i=1; $i<=5; $i++){
        for ($j=5-$i; $j>=1; $j--){
            echo " ";
        } 
        for ($k=1; $k<=(2*$i-1); $k++) { 
            echo "*";
        }
        echo "<br>";
    }
    echo "</pre>";


    // 2) while loop - The `while` loop is used when you don't know in advance how many times the loop should run, and it continues as long as a specified condition is true
    // initialization
    
    echo "<h2>While loop</h2>";    
    $num = 0;
    while ($num<=10){

    }
?>