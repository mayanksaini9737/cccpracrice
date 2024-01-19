<?php 
    /* php data types
    1. Integer
    2. Float
    3. String
    4. Boolean
    5. Array
    6. Null
    */
    
    
    // 1) Integer - Non decimal number 
    $marks = 333;
    echo var_dump($marks) . "<br>";
    echo "$marks out of 400 <br>";


    // 2) float - Decimal number
    $total = 238.34;
    echo var_dump($total) . "<br>";
    echo "Your total bill is $total <br>";


    // 3) String - Sequence of character
    $greetMsg = "Hello sir, Good morning";
    echo var_dump($greetMsg) . "<br>";
    echo "Greet msg is: $greetMsg <br>";


    // 4) Boolean - Can be either true or false
    $tr = true;
    $fs = false;
    echo var_dump($tr);  // for true it prints 1 if we dont use var_dump function
    echo "<br>";
    echo $tr;
    echo "<br>";
    echo var_dump($fs);  // for false it prints nothing if we dont use var_dump function
    echo "<br>";


    // 5) Array - Used to store multiple value in a single variable
    $friends = array("Yogi", "Deep", "Azeem");
    echo var_dump($friends);
    echo "<br>";
    echo $friends[0];
    echo "<br>";
    echo $friends[1];
    echo "<br>";
    echo $friends[2];
    echo "<br>";
    // echo $friends[3];  it will trow a offset error


    // 6) NULL - a variable without a value
    $name = NULL;
    echo var_dump($name). "<br>";
    echo " If data type is null and printing the null value variable then its prints nothing(place remain emapty) $name <br>"; // it prints nothing (empty)
?>