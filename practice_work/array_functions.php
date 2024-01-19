<?php 
    echo "<h1>Array Functions</h1>";

    // 1) Array Creation and Initialization
    // ======================================
    echo "<h2>Array Creation and Initialization</h2>";

    // 1. array() - Creates a new array
    $arr = array(1, 2, 3);  // one dimensional array
    $multArr = array(array(1,2,3), array(4,5,6), array(7,8,9)); // two dimensional array
    $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128);

    // 2. array_merge($array1, $array2)
    $arr1 = array(1, 2, 3);
    // $arr2 = array(4,5,6);
    // $arr2 = array(array(1,2,3), array(4,5,6), array(7,8,9));
    $arr2 = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128);
    print_r(array_merge($arr2, $arr1));
    echo "<br>";
    // $merg = array_merge($arr1, $arr2); 
    // echo $merg[0];   // only single dimension instance can be travarsed through index
    // echo $merg["Azeem"];    // you can traverse only with key on associated array instance, cannot traverse with index

    // 3. array_combine($keys, $values) - Creates an array by using one array for keys and another for its values
    $cmbArr1 = array(1, 2, 3);
    // $cmbArr2 = array(4, 5, 6);
    // $cmbArr2 = array(array(1,2,3), array(4,5,6), array(7,8,9)); // two dimensional array
    $cmbArr2 = array("Deep", "Azeem", "Ravi");
    print_r(array_combine($cmbArr1, $cmbArr2));
    echo "<br>";

    // 4. range($start, $end, optional $step) - Creates an array containing a range of elements
    // $step's default value 1
    // $rngArr = range(10, 20);
    $rngArr = range(1000, 2000, 100);
    print_r($rngArr);


    
    // 2) Array Creation and Initialization
    // ======================================
    echo "<h2>Array Creation and Initialization</h2>";

    // 5. array_push($array, $element) or $array[] = $element - Adds one or more elements to the end of an array
    

    // for ($i=1; $i<5 ; $i++) {    
    //        for ($j=1; $j<=5-$i ; $j++) { 
    //         echo $j . " ";
    //        }
    //        echo "<br>";
    // }

    for ($i=1; $i<=5 ; $i++) {    
           for ($j=1; $j<=5; $j++) { 
            if ($j >= $i){
                echo $j ." ";
            }
           }
           echo "<br>";
    }

?>