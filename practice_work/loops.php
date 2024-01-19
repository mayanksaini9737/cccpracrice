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
    // ================================================================================================
    
    echo "<h2>for loop</h2>";

    // for($count=0; $count<=10; $count++){
    //     echo $count ."<br>";
    // }

    // for($count=0;;){
    //     echo $count ."<br>";
    // } 

    // print pattern
    function print_pattern($num){
        echo "<pre>"; 
        for ($i=1; $i<=$num; $i++){
            for ($j=$num-$i; $j>=1; $j--){
                echo " ";
            } 
            for ($k=1; $k<=(2*$i-1); $k++) { 
                echo "*";
            }
            echo "<br>";
        }
        for ($i=$num-1; $i>=1; $i--){
            for ($j=$num-$i; $j>=1; $j--){
                echo " ";
            } 
            for ($k=1; $k<=(2*$i-1); $k++) { 
                echo "*";
            }
            echo "<br>";
        }
        echo "</pre>";
    }
    
    print_pattern(7);

    // function new_pattern($num){
    //     echo "<pre>";
    //     for ($i=1; $i <=(2*$num-1) ; $i++) { 
    //         $count = 0;
    //         for ($j=$num-$i; $j>=1; $j--){
    //             if($count<1){
    //             if ($j<=1){
    //                 $j+=($num-1);
    //                 // echo $j;
    //                 $count = $count+1;
    //             }
    //         }
    //             echo " ";
    //         } 
    //         for ($k=1; $k<=(2*$i-1); $k++) { 
    //             if ($k<1){
    //                 $k+=2*$i-2;
    //             }
    //             echo "*";
    //         }
    //         echo "<br>";
    //     }
    //     echo "</pre>";
    // }

    // new_pattern(5);


    // 2) while loop - The `while` loop is used when you don't know in advance how many times the loop should run, and it continues as long as a specified condition is true
    // ===================================================================================================
    echo "<h2>While loop</h2>";    

    $num = 10;      // initialization
    while ($num>0){ // condition
        echo "Your number is: " .$num ."<br>";  // code
        $num--;                                 // updation
    }


    // 3) foreach loop - The `foreach` loop is specifically designed for iterating over arrays
    // =======================================================================================
    echo "<h2>foreach loop</h2>"; 

    $arr = array("Deep", "Yogesh", "Azeem", "Ravi");
    echo "Single dimension array:- <br>";
    foreach ($arr as $frnd){
        echo "Your friend name is: ". $frnd ."<br>";
    }

    $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128);
    echo "Associative array:- <br>";
    echo "Only Print values from key value pair <br>";
    foreach ($assocArr as $enrollNum){ 
        // In associative array its prints only value from key=>value pair
        echo "Your friend's Enrollment number is: ". $enrollNum ."<br>";
    }
    echo "Print key and value both, from key value pair <br>";
    foreach ($assocArr as $key =>$enrollNum){ 
        // print key 
        echo "Your friend ".$key."'s Enrollment number is: ". $enrollNum ."<br>";
    }

    $multiDimArr = array(array(1,2,3), array(3,4,5), array(6,7,8));
    echo "Multidimensional array:- <br>";
    foreach ($multiDimArr as $value){
        print_r($value);
    }
    

    // 4) Do while loop - If condition is not satisfy still run a loop one time
    // =======================================================================================
    echo "<h2>do while loop</h2>"; 

    // condition is false still executing code
    do {
        echo "Condition not stisfy still executing code one time. <br> ";
    } while(false);



?>