<?php 
    echo "<h1>Array Functions</h1>";

    // $arr = array(1, 2, 3);  // one dimensional array
    // $multArr = array(array(1,2,3), array(4,5,6), array(7,8,9)); // two dimensional array
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128); // associative array

    // 1) Array Creation and Initialization
    
    /*

    echo "<h2>Array Creation and Initialization</h2>";

    // 1. array() - Creates a new array

    $arr = array(1, 2, 3);  // one dimensional array
    $multArr = array(array(1,2,3), array(4,5,6), array(7,8,9)); // two dimensional array
    $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128); // associative array


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
    
    // Returns the combined array - if length is same
    // length is not same then throws fatal error
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
    
    */

    
    // 2) Array Modification
    // ======================================

    /*

    echo "<h2>Array Modification</h2>";

    // 5. array_push($array, $element) or $array[] = $element - Adds one or more elements to the end of an array
    
    // array_push() return type is int --> it returns the total length of array
    $arr1 = array(1, 2, 3);
    $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128);
    // array_push($arr1,4, 5);
    // print_r($arr1);
    // array_push($assocArr, 7,8);
    // print_r($assocArr);
    echo "<br>";
    // array_push($arrrr,4, 5);     // if array does't exist and it's type is not array then it throws error
    // print_r($arrrr);      


    // 6. array_pop($array) -  Removes the last element from an array
    
    $arr2 = array();
    // array_pop($arr1);
    // print_r($arr1);
    // array_pop($assocArr);
    // print_r(array_pop($assocArr));  // it returns last value of last key-value pair
    // print_r($assocArr);
    echo "<br>";
    // array_pop($arr2);    // if we pop an empty array then it remain empty. not throwing error 
    // print_r($arr2);


    // 7. array_unshift($array, $element) - Adds one or more elements to the beginning of an array
    
    // print_r(array_unshift($arr2, "DP", "AM", "PM"));    // array_unshift() return type is int --> it returns the total length of array
    
    // array_unshift($arr2, "first", "last");
    // print_r($arr2);
    
    // $multArr = array(array(1,2,3), array(4,5,6), array(7,8,9));
    // array_unshift($multArr, "first", "last");
    // print_r($multArr);


    // 8. array_shift($array) - Removes the first element from an array

    // print_r(array_shift($arr2));        // returns last removed element 
    // echo "<br>";
    // print_r($arr2);

    // $multArr = array(array(1,2,3), array(4,5,6), array(7,8,9));
    // print_r(array_shift($multArr));     // returns the removed array that is at first index of $multiArr
    // print_r($multArr);

    // print_r($assocArr);
    // print_r(array_shift($assocArr));    // it returns removed value from key-value pair 
    // echo "<br>";
    // print_r($assocArr);


    // 9. array_splice($array, $start, $length, $replacement) -  Removes a portion of the array and replaces it with something else.
    
    // returns removed element that is removed from $arr (return type is array)
    // $start is negative then it start counting from end of the $arr
    // if $length is greater than actual length from start of array to end then it removes all element from $start 
    // if $replacement is not given then it only remove the specified length of array
    // if $length is not specified then it remove all element from $start

    $rep_arr = array(15, 31, 464, 784, 784, 156,);

    $arr = array(1, 2, 3, 4, 5, 6);
    print_r(array_splice($arr, 0, 4,$rep_arr)); // returns removed element that is removed from $arr
    // print_r(array_splice($arr, 0)); // $start is negative then it start counting from end of the $arr
    echo "<br>";
    print_r($arr);
    echo "<br>";
    // array_splice($arr2, 0, 5, "deep"=> "33"); // you can't write like this it will throw syntax error
    // array_splice($arr2, 0, 5, array(1, 2, 3));
    // print_r($arr2);


    $multArr = array(array(1,2,3), array(4,5,6), array(7,8,9)); // two dimensional array
    // print_r(array_splice($multArr, 1, 1, 44));
    // print_r(array_splice($multArr, 1, 1, array(10, 11, 12)));
    print_r($multArr);
    echo "<br>";

    $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128); // associative array
    $repm_arr = array(38=>"Mayank");
    // print_r(array_splice($assocArr, 0, 1, 33));  // 33 added at index 0
    print_r(array_splice($assocArr, 0, 1, $repm_arr)); // only value is added at index 0 from key value pair
    print_r($assocArr);

    */

    // 3) Array Access
    // ======================================

    /*

    echo "<h2>Array Access</h2>";

    // 10. count($array) or count($array, $mode) - returns the number of elements in an array
    
    // returns type is int
    //$mode is Optional. Specifies the mode(used for multidimensional array). Possible values:
            // 0 - Default. Does not count all elements of multidimensional arrays
            // 1 - Counts the array recursively (counts all the elements of multidimensional arrays) 
    
    
    // $arr = array(1, 2, 4);
    // echo count($arr);

    // $multArr = array(array(1,2,3), array(4,5,6), array(7,8,9)); 
    // echo count($multArr);   // returns 3
    // echo count($multArr, 1);   // returns 12 -count array recursively (3+9 = 12 --> first level length and other level length ) 

    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128); // 3
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh");      // 3
    // echo count($assocArr);


    // 11. sizeof($array) or sizeof($array, $mode) - Alias of count($array)
    // work same as count($array)


    // 12. array_key_exists($key, $array) - Checks if the given key or index exists in the array.
    
    // Returns TRUE if the key exists and FALSE if the key does not exist
    // if we don't enter an index(key) then it will throw error

    // $arr = array(1, 2, 3);
    // echo array_key_exists(6, $arr); // if index exist then it's ans is 1 otherwise nothing
    // var_dump(array_key_exists(1, $arr)); // if index exist then true and if not then false
    // var_dump(array_key_exists($arr)); 

    // example:
    // if (array_key_exists(1, $arr)){
    //     echo "Yes";
    // } else {
    //     echo "Not exist";
    // }

    // $multArr = array(array(1,2,3), array(4,5,6), array(7,8,9));
    // echo array_key_exists(0,$multArr); // if index exist then it's ans is 1 otherwise nothing
    // var_dump(array_key_exists(3, $multArr)); // if index exist then true and if not then false
    
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128);
    // echo array_key_exists("Deep", $assocArr);   // if key exist then it's ans is 1 otherwise nothing
    // var_dump(array_key_exists("Ravi", $assocArr));   // if key exist then it's ans is 1 otherwise nothing

    
    // 13. array_keys($array) - Returns all the keys or a subset of the keys of an array
    
    // return type is array

    // $arr = array(1, 2, 3); 
    // print_r(array_keys($arr));  // returns array of index of $arr.  if it's empty then empty array
    // echo "<br>";    
    // $multArr = array(array(1,2,3), array(4,5,6), array(7,8,9)); 
    // print_r(array_keys($multArr)); // returns array of index of $multArr
    // echo "<br>";    
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128);
    // print_r(array_keys($assocArr)); // returns array of index of $multArr


    // 14. array_values($array) - Returns all the values of an array.
    
    // Returns an array containing all the values of an array
    // if array is empty then it returns an empty array

    $arr = array(1, 2, 3); 
    print_r(array_values($arr));    
    echo "<br>";    
    $multArr = array(array(1,2,3), array(4,5,6), array(7,8,9)); 
    print_r(array_values($multArr)); // returns two dimensional array as the values in $multArr
    echo "<br>";    
    $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128);
    print_r(array_values($assocArr)); // returns array of values

    */
    


    // 4) Array Search
    // ======================================

    /*

    echo "<h2>Array Search</h2>";

    // 15. in_array($needle, $haystack) or in_array(search, array, type)   - Checks if a value exists in an array
    
    // Returns TRUE if the value is found in the array, or FALSE otherwise
    // It is case-sensetive
    // type - Optional. If this parameter is set to TRUE, the in_array() function searches for the search-string and specific type in the array.

    // $arr = array(1, 2, 3, "MS", 33); 
    // echo in_array(2, $arr);               // if it is in array then prints 1. otherwise nothing
    // var_dump(in_array("ms",$arr));        // false  
    // var_dump(in_array("MS",$arr));        // true
    // var_dump(in_array(33,$arr));        // true    
    // var_dump(in_array(33.0000000,$arr));        // true    
    // var_dump(in_array("33",$arr));      // true    
    // var_dump(in_array("33",$arr,true)); // false (if type is set true then it search for only string)   
    // var_dump(in_array(33,$arr,true));   // true  (if type is set true then and if it is not entered as string then it returns true)   
    echo "<br>";    

    // $multArr = array(array(1,2,3), array(4,5,6), array(7,8,9)); 
    // var_dump(in_array(5, $multArr));     // false
    // var_dump(in_array(array(4,5,6), $multArr));     // true
        
        // for ($i=0; $i < sizeof($multArr); $i++) { 
        //     // echo "in";
        //     if(in_array(5, $multArr[$i])){
        //         var_dump(in_array(5, $multArr[$i]));
        //         echo "found it";
        //     echo "<br>";
        //     break;
        //     }
        // }
        
    echo "<br>";    
    
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128);
    // var_dump(in_array(33, $assocArr));  // true
    // var_dump(in_array("33", $assocArr));  // true
    // var_dump(in_array("33", $assocArr, true));  // false
    // var_dump(in_array("33", $notExist, true));  // if array doesn't exist then error


    // 16. array_search($needle, $haystack) or array_search(value, array, strict) - Searches an array for a given value and returns the corresponding key
    
    // Returns the key of a value if it is found in the array, and FALSE otherwise. If the value is found in the array more than once, the first matching key is returned.
    // strict Optional. If this parameter is set to TRUE, then this function will search for identical elements in the array. Possible values:
                                // true
                                // false - Default
                                // When set to true, the number 5 is not the same as the string 5

    // $arr = array(1, 22, "22", 3, "Mayank", "22");  
    // echo array_search(3, $arr);     // 2 - index of 3 (if value is not exist then nothing)
    // var_dump(array_search(33, $arr));     // false
    // echo array_search("22", $arr, false);     // returns int(1) that is the index of value
    // echo "<br>";
    // echo array_search("22", $arr, true);     // returns int(2) that is the index of value

    // $multArr = array(array(1,2,3), array(4,5,6), array(7,8,9));
    // echo array_search(5, $multArr);  
    // var_dump(array_search(5, $multArr));  //false 
    // echo array_search(array(4,5,6), $multArr);  // 1 - index

    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128); // associative array
    // echo array_search(132, $assocArr);  // Azeem
    // echo array_search("132", $assocArr);  // Azeem
    // echo array_search("132", $assocArr, true);  // nothing
    // var_dump(array_search("132", $assocArr, true));  // nothing
    // var_dump(array_search(132.5, $assocArr));  // bool(false)
    

    // 17. array_reverse($array) or array_reverse(array, preserve)- Returns an array with elements in reverse order.

    // Returns the reversed array
    //  preserve - Optional(default false). Specifies if the function should preserve the keys(index) of the array or not. Possible values: true or false     
    
    // $arr = array(1, 2, 3);
    // print_r(array_reverse($arr));   // Array ( [0] => 3 [1] => 2 [2] => 1 )
    // print_r(array_reverse($arr, true));   // Array ( [2] => 3 [1] => 2 [0] => 1 )

    // $multArr = array(array(1,2,3), array(4,5,6), array(7,8,9));
    // print_r(array_reverse($multArr));   // array(array(7,8,9), array(4,5,6), array(1,2,3))

    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128);
    // print_r(array_reverse($assocArr));     // Array ( [Yogesh] => 128 [Azeem] => 132 [Deep] => 33 )

    // $mix = array(4, "Mayank", "Ravi","Deep"=>33, "Azeem"=>132);
    // $mix_reverse = array_reverse($mix, true);
    // echo $mix[1];   // reason for this is preserve - it reverse the array but changeing it's element
    
    */

    // 5) Array Sorting
    // ======================================

    /*

    echo "<h2>Array Sorting</h2>";
    
    // they all returns True

    // 18. sort($array)  - sorts an indexed array in ascending order

    // $myArr = array(44, -41, 3, 3.001, "Amaze", "xuv700", "Volvo", "verna", "Fortuner");
    // sort($myArr); 
    // print_r($myArr);
    // // echo sort($myArr);  // 1 
    // // var_dump(sort($myArr));  //if using var_dump istead of index then true


    // 19. rsort($array)  - sorts an indexed array in descending order
        
    // $myArr = array(44, -41, 3, 3.001, "Amaze", "xuv700", "Volvo", "verna", "Fortuner");
    // rsort($myArr);
    // print_r($myArr);


    // 20. asort($array) - Sorts an associative array by values in ascending order 

    // 1 (true) remain last in sorting (true or false remain last in the sorting)
    // 54 will be sorted in ascending order (other key value will be sorted except true and false) 
    
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128, "38" => "Mayank");
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128, "Mayank" => 38, true); // automatic assign key(index)-> 0 - 1(true)
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128, "Mayank" => 38, 54); // automatic assign key(index)-> 0 - 54
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128, "38" => "Mayank", true); // automatic assign key(index)-> 39 - 1(true)
    // asort($assocArr);
    // print_r($assocArr);
    
    
    // 21. arsort($array) - Sorts an associative array by values in descending order 
    
    // 1 (true) remain last in sorting (true or false remain last in the sorting)
    // 54 will be sorted in descending order (other key value will be sorted except true and false) 
    
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128);
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128, true); // automatic assign key(index)-> 0 - 1(true)
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128, true); // automatic assign key(index)-> 39 - 1(true)
    // arsort($assocArr);
    // print_r($assocArr);


    // 22. ksort($array) - Sorts an associative array by key in ascending order

    // 1 (true) remain first sorting and false also (but its before item key is number then number+1 key assign to this true or false and then normal sorting will be done)
    // 54 will be sorted in ascending order  

    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128, "38" => "Mayank");
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128, "Mayank" => 38, true); // automatic assign key(index)-> 0 - 1(true)
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128, "Mayank" => 38, 54); // automatic assign key(index)-> 0 - 54
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128, "38" => "Mayank", true); // automatic assign key(index)-> 39 - 1(true)
    // ksort($assocArr);
    // print_r($assocArr);
    
    
    // 23. krsort($array) - Sorts an associative array by key in descending order

    // 1 (true) remain first sorting and false also (but its before item key is number then number+1 key assign to this true or false and then normal sorting will be done)
    // 54 will be sorted in ascending order  

    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128, "38" => "Mayank");
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128, "Mayank" => 38, true); // automatic assign key(index)-> 0 - 1(true)
    // $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128, "Mayank" => 38, 54); // automatic assign key(index)-> 0 - 54
    $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128, "38" => "Mayank", true); // automatic assign key(index)-> 39 - 1(true)
    krsort($assocArr);
    print_r($assocArr);

    */



    // 6) Array Filtering
    // ======================================

    /*

    echo "<h2>Array Filtering</h2>";

    // 24. array_filter($array, $callback) or array_filter(array, callbackfunction, flag) - Filters elements of an array using a callback function

    // Returns the filtered array
    // callback function - optional. Specifies the callback function to use
    // flag - Optional. Specifies what arguments are sent to callback:
                // ARRAY_FILTER_USE_KEY - pass key as the only argument to callback (instead of the value)
                // ARRAY_FILTER_USE_BOTH - pass both value and key as arguments to callback (instead of the value)
    
    // $arr = array(33, 64, 376, 478, "48");
    // function even_ele($ele){
    //     return ($ele % 2 == 0);     
    // }
    // // print_r(array_filter($arr, 'even_ele'));  // filter only values
    // $even_arr = array_filter($arr, 'even_ele');
    // print_r($even_arr);
    
    // $arr = array(33, 64, 376, 478, "48");
    // function even_ele($ele){
    //     return ($ele % 2 == 0);     
    // }
    // print_r(array_filter($arr, 'even_ele', ARRAY_FILTER_USE_KEY));  // it filter the key of element

    // $arr = array(33, 64, 374, 478);
    // function even_ele($ele, $key){
    //     if(($ele % 2 == 1) && ($key % 2 == 0)){
    //         // return $ele. $key;
    //         // return 1;
    //         return 45;
    //     }
    // }
    // print_r(array_filter($arr, 'even_ele', ARRAY_FILTER_USE_BOTH));  // it filter the key and value both

    // $arr = array("Deep", "Mayank", "Azeem", "Yogeshwar");
    // function avg_name($name){
    //     return (strlen($name)>5);
    // }
    // print_r(array_filter($arr, "avg_name"));

    // $assocArr = [33 => "Deep", 38 => "Mayank", 128 => "Yogesh"];
    // function avg_name($name){
    //     return (strlen($name)>5);
    // }
    // print_r(array_filter($assocArr, 'avg_name'));


    // 25. array_map($callback, $array) or array_map(myfunction, array1, array2, array3, ...) - Applies a callback function to each element of an array
    // must be a valid callback or null
    // returns an array
    
    // $arr1 = [33, 44, 36, 21, 666];
    // $arr2 = [55, 98, 36, "21", 54];

    // print_r(array_map(null, $arr1, $arr2));
    // Array ( [0] => Array ( [0] => 33 [1] => 55 ) [1] => Array ( [0] => 44 [1] => 98 ) [2] => Array ( [0] => 36 [1] => 36 ) [3] => Array ( [0] => 21 [1] => 21 ) [4] => Array ( [0] => 666 [1] => 54 ) )

    // function half_val($num){
    //     return $num/2;
    // }
    // print_r(array_map('half_val', $arr1));

    // function half_val_if($num){ // if it is not satisfy condition and not given else then it's index remain empty
    //     if($num>50){
    //         return $num/2;
    //     }
    // }
    // print_r(array_map('half_val', $arr1));

    // function check_val($val1, $val2){
    //     if ($val1 == $val2){
    //         return $val1 = 50;
    //     } else {
    //         return $val2 = 100;
    //     }
    // }
    // print_r(array_map('check_val', $arr1, $arr2))


    // 26. array_reduce($array, $callback, $initial) - Iteratively reduces the array to a single value using a callback function.

    // Returns the resulting value
    // If the array is empty and initial is not passed, this function returns NULL.
    // initial -	Optional. Specifies the initial value to send to the function

    $arr1 = [33, 33, 36, 21, 666];
    $arr2 = [55, 98, 36, "21", 54];
    $arr3 = array();

    // function sum($val1, $val2){
    //     return $val1 + $val2;
    // }
    // echo array_reduce($arr1, 'sum', 100);   // 889
    // var_dump(array_reduce($arr1, 'sum', 100));  // int(889)
    // var_dump(array_reduce($arr3, 'sum' ));  // NULL
    // var_dump(array_reduce($arr3, 'sum', 0));  // int(0)

    // function str_convert($val1, $val2){
    //     return $val1 . '_' . $val2;
    // }
    // echo array_reduce($arr1, 'str_convert', 100);   // 100_33_33_36_21_666
    // var_dump(array_reduce($arr1, 'str_convert', 100));   // string(19) "100_33_33_36_21_666"
    // // multidimensional_array
    // $multArr = array(array(1,2,3), array(4,5,6), array(7,8,9));
    // function mult_str($val){
    //     return array_reduce($val, 'str_convert');
    // }
    // $out = array_map('mult_str', $multArr);
    // print_r($out);  // Array ( [0] => _1_2_3 [1] => _4_5_6 [2] => _7_8_9 )
    // echo array_reduce($out, 'str_convert');     // __1_2_3__4_5_6__7_8_9

    $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128); // associative array
    function sum($val1, $val2){
        return $val1 + $val2;
    }
    // echo array_reduce($assocArr, 'sum');    // 293  (if inplace of value arrived any string(that is not number) then it's throw uncaught type error)
    
    function str_convert($val1, $val2){
        return $val1 . '_' . $val2;
    }
    echo array_reduce($assocArr, 'str_convert');    // _33_132_128

    */

    // 7) Array Slicing
    // ======================================

    // /*

    echo "<h2>Array Slicing</h2>";

    // 27. array_slice($array, $offset, $length, $preserve_keys)   - Extracts a portion of the array.

    // Returns selected parts of an array
    // length - optional. Specifies the length of the returned array. if length is negetive then it left specified number of element from end of array. If this value is not set, the function will return all elements, starting from the position set by the start-parameter. 
    // $preserve_key - Optional(doesn't affect to associative array). Specifies if the function should preserve or reset the keys. Possible values:
                // true - Preserve keys
                // false - Default. Reset keys
    
    $arr = array(343, 43, 4234, 53, 343, 32, 90);  // one dimensional array
    // print_r(array_slice($arr,4));
    // print_r(array_slice($arr,4, 2));
    // print_r(array_slice($arr,4, -4));   // Array ( ) - empty array  
    // print_r(array_slice($arr,4, -1));       // Array ( [0] => 343 [1] => 32 )
    // print_r(array_slice($arr,4,2,true));       // Array ( [4] => 343 [5] => 32 )

    $assocArr = array("Deep"=>33, "Azeem"=>132, "Yogesh"=>128, "Ravi"=> 8); // associative array
    // print_r(array_slice($assocArr, 2, 1, false));      // Array ( [Yogesh] => 128 )
    // print_r(array_slice($assocArr, 2, 1, true));      // Array ( [Yogesh] => 128 )
    print_r(array_slice($assocArr, 1, -1));             // Array ( [Azeem] => 132 [Yogesh] => 128 )

    
    // 28. array_splice($array, $offset, $length, $replacement) - Removes a portion of the array and replaces it with something else.
    // described at function number 9



?>