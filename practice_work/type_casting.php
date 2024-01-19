<?php 
    /*
    (string) - Converts to data type String
    (int) - Converts to data type Integer
    (float) - Converts to data type Float
    (bool) - Converts to data type Boolean
    (array) - Converts to data type Array
    (unset) - Converts to data type NULL ---> now removed and cannot be used(it is deprected)
    */

    $intVal = 333;
    $floatVal = 238.34;
    $str = "Hello sir, Good morning";
    $tr = true;
    $fs = false;
    $arr = array("Yogi", "Deep", "Azeem");
    $nl = NULL;


    // 1) (string) - Converts to data type String
    // ===========================================

    $int_str = (string)$intVal;
    echo "integer to string: ";  
    echo var_dump($int_str) ."<br>"; // "333"

    $float_str = (string)$floatVal; 
    echo "float to string: ";  
    echo var_dump($float_str) ."<br>";   // "238.34"

    $str_str = (string)$str;    
    echo "string to string: ";  
    echo var_dump($str_str) ."<br>"; // "Hello sir, Good morning"
    
    $tr_str = (string)$tr; 
    echo "true(boolean) to string: ";  
    echo var_dump($tr_str) ."<br>";  // "1"
   
    $fs_str = (string)$fs;
    echo "false(boolean) to string: ";  
    echo var_dump($fs_str) ."<br>";  // "" - empty string

    // // $arr_str = (string)$arr; // Direct type casting in string is not possible, use function implode() otherwise it's showing warning

    $nl_str = (string)$nl;  
    echo "Null to string: ";  
    echo var_dump($nl_str);  // "" - empty string

    echo "<br><br>";



    // 2) (int) - Converts to data type Integer
    // =========================================

    $int_int = (int)$intVal;  
    echo "integer to integer: ";  
    echo var_dump($int_int) ."<br>";    // 333

    $float_int = (int)$floatVal; 
    echo "float to integer: ";  
    echo var_dump($float_int) ."<br>";  // 238 - direct rounds off to its floor value

    $str_int = (int)$str; 
    echo "string starting with characters(alphabets) to integer: ";     
    echo var_dump($str_int) ."<br>";    // 0 - if string starting with alphabets, not number then 0
    
    $str2 = "34 times";
    $str2_int = (int)$str2;    
    echo "string starting with numbers to integer: ";     
    echo var_dump($str2_int) ."<br>";    // 34 - if in starting of the string number is arrived then that number is your int
    
    $tr_int = (int)$tr;    
    echo "true(boolen) to integer: ";  
    echo var_dump($tr_int) ."<br>";     // 1
   
    $fs_int = (int)$fs;    
    echo "false(boolen) to integer: ";  
    echo var_dump($fs_int) ."<br>";     // 0

    $arr_int = (int)$arr; 
    echo "array with elements to integer: ";  
    echo var_dump($arr_int) ."<br>";    // 1 - if array have elements
    
    $arr2 = array();
    echo "array without elements to integer: ";  
    $arr2_int = (int)$arr2; 
    echo var_dump($arr2_int) ."<br>";    // 0 - if array is empty then 0
    
    $nl_int = (int)$nl;
    echo "null to integer: ";  
    echo var_dump($nl_int);             // 0

    echo "<br><br>";


    // 3) (float) - Converts to data type Float
    // =========================================

    $int_float = (float)$intVal;  
    echo "integer to float: ";  
    echo var_dump($int_float) ."<br>";    // 333

    $float_float = (float)$floatVal; 
    echo "float to float: ";  
    echo var_dump($float_float) ."<br>";  // 238.34 - direct rounds off to its floor value

    $str_float = (float)$str;    
    echo "string starting with characters(alphabets) to float: "; 
    echo var_dump($str_float) ."<br>";    // 0 - if string starting with alphabets, not number then 0
    
    $str2 = "34 times";
    $str2_float = (float)$str2;    
    echo "string starting with numbers to float: ";   
    echo var_dump($str2_float) ."<br>";    // 34 - if in starting of the string number is arrived then that number is your int
    
    $tr_float = (float)$tr;   
    echo "true(boolean) to float: ";  
    echo var_dump($tr_float) ."<br>";     // 1
   
    $fs_float = (float)$fs;    
    echo "false(boolean) to float: ";  
    echo var_dump($fs_float) ."<br>";     // 0

    $arr_float = (float)$arr; 
    echo "array with elements to float: ";  
    echo var_dump($arr_float) ."<br>";    // 1 - if array have elements
    
    $arr2 = array();
    $arr2_float = (float)$arr2; 
    echo "array without element to float: ";  
    echo var_dump($arr2_float) ."<br>";    // 0 - if array is empty then 0
    
    $nl_float = (float)$nl;   
    echo "null to float: ";  
    echo var_dump($nl_float);             // 0

    echo "<br><br>";

    

    // 4) (bool) - Converts to data type Boolean
    // =========================================

    // If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true. Even -1 converts to true

    $int_boolean = (bool)$intVal;  
    echo "integer to boolean: ";  
    echo var_dump($int_boolean) ."<br>";    // true

    $float_boolean = (bool)$floatVal; 
    echo "float to boolean: ";  
    echo var_dump($float_boolean) ."<br>";  // true

    $str_boolean = (bool)$str;    
    echo "string starting with characters(alphabets) to boolean: "; 
    echo var_dump($str_boolean) ."<br>";    // true
    
    $str2 = "34 times";
    $str2_boolean = (bool)$str2;    
    echo "string starting with numbers to boolean: ";   
    echo var_dump($str2_boolean) ."<br>";    //  true
    
    $tr_boolean = (bool)$tr;   
    echo "true(boolean) to boolean: ";  
    echo var_dump($tr_boolean) ."<br>";     // true
   
    $fs_boolean = (bool)$fs;    
    echo "false(boolean) to boolean: ";  
    echo var_dump($fs_boolean) ."<br>";     // false

    $arr_boolean = (bool)$arr; 
    echo "array with elements to boolean: ";  
    echo var_dump($arr_boolean) ."<br>";    // true
    
    $arr2 = array();
    $arr2_boolean = (bool)$arr2; 
    echo "array without element to boolean: ";  
    echo var_dump($arr2_boolean) ."<br>";    // false
    
    $nl_boolean = (bool)$nl;   
    echo "null to boolean: ";  
    echo var_dump($nl_boolean);             // false

    echo "<br><br>";



    // 5) (array) - Converts to data type Array
    // =========================================

    // Most of data types converts into an indexed array with one element. NULL values converts to an empty array object

    $int_arr = (array)$intVal;  
    echo "integer to arr: ";  
    echo var_dump($int_arr) ."<br>";    // { [0]=> int(333) }

    $float_arr = (array)$floatVal; 
    echo "float to arr: ";  
    echo var_dump($float_arr) ."<br>";  // { [0]=> float(238.34) }

    $str_arr = (array)$str;    
    echo "string starting with characters(alphabets) to arr: "; 
    echo var_dump($str_arr) ."<br>";    // { [0]=> string(23) "Hello sir, Good morning" }
    
    $tr_arr = (array)$tr;   
    echo "true(boolean) to arr: ";  
    echo var_dump($tr_arr) ."<br>";     // { [0]=> bool(true) }
   
    $fs_arr = (array)$fs;    
    echo "false(boolean) to arr: ";  
    echo var_dump($fs_arr) ."<br>";     // { [0]=> bool(false) }

    $arr_arr = (array)$arr; 
    echo "array with elements to arr: ";  
    echo var_dump($arr_arr) ."<br>";    // { [0]=> string(4) "Yogi" [1]=> string(4) "Deep" [2]=> string(5) "Azeem" }
    
    $arr2 = array();
    $arr2_arr = (array)$arr2; 
    echo "array without element to arr: ";  
    echo var_dump($arr2_arr) ."<br>";    // array(0) { }
    
    $nl_arr = (array)$nl;   
    echo "null to arr: ";  
    echo var_dump($nl_arr);             // { }

    echo "<br><br>";


    // 5) (unset) - Converts to data type null
    // =========================================

    echo "type casting in null using unset <br>";
    echo "now removed and cannot be used(it is deprected) . If you are using this then it throws fatal error"
    // $int_arr = (unset)$intVal;  

    //instead of that directly use
    // $anyVariable = null;
    
?>