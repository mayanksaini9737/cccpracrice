<?php 
    /* Operators in PHP

    1. Arithmetic Operators
    2. Assignment Operators
    3. Comparison Operators
    4. Logical Operators
    5. Incremental Operators
    6. String Operators
    7. Array Operators
    8. Ternary Operators
    9. Null Coalescing Operator
    10. gettype Operator
    */

    echo "<h1>Types of operators</h1>";

    // 1. Arithmetic Operator
    echo "<h2>1. Arithmetic Operator</h2> <br>";

    $num1 = 12;
    $num2 = 3;

    echo "a + b = " . ($num1 + $num2) . "<br>";
    echo "a - b = " . ($num1 - $num2) . "<br>";
    echo "a * b = " . ($num1 * $num2) . "<br>";
    echo "a / b = " . ($num1 / $num2) . "<br>";
    echo "a % b = " . ($num1 % $num2) . "<br>";
    echo "a ** b = " . ($num1 ** $num2) . "<br><br>";


    // 2. Assignment Operators

    echo "<h2>2. Assignment Operator</h2> <br>";
    $a = $num1;
    echo "The value of a is " . $a . "<br>";

    $a += 2;  // $a = $a + 2
    echo "The value of a += 2 is " . $a . "<br>";

    $a -= 2;
    echo "The value of a -= 2 is " . $a . "<br>";

    $a *= 2;
    echo "The value of a *= 2 is " . $a . "<br>";

    $a /= 2;
    echo "The value of a /= 2 is " . $a . "<br>";

    $a %= 5;
    echo "The value of a %= 5 is " . $a . "<br><br>";


    // 3. Comparison Operators

    echo "<h2>3. Comparison Operator</h2> <br>";
    $u = 8;
    $v = "8";

    echo "Result of u == v is "; 
    echo var_dump($u == $v). "<br>"; 
    
    echo "Result of u === v is "; // Identical operator - it checks value and also datatype
    echo var_dump($u === $v). "<br>"; 
    
    echo "Result of u !== v is "; // Non Identical operator
    echo var_dump($u !== $v). "<br>"; 

    echo "Result of u > v is "; 
    echo var_dump($u > $v). "<br>";

    echo "Result of u < v is "; 
    echo var_dump($u < $v). "<br>";

    echo "Result of u >= v is "; 
    echo var_dump($u >= $v). "<br>";

    echo "Result of u <= v is "; 
    echo var_dump($u <= $v). "<br>";

    echo "Result of u != v is ";   // <> also used for -- not equalto
    echo var_dump($u != $v). "<br><br>";


    // 4. Logical Operators

    echo "<h2>4. Logical Operator</h2> <br>";
    $proof1 = true;
    $proof2 = false;

    echo "proof1 = ";
    echo var_dump($proof1);
    echo "<br>";
    echo "proof2 = ";
    echo var_dump($proof2);
    echo "<br>"; 

    echo "Result of proof1 and proof2 is "; 
    echo var_dump($proof1 and $proof2). "<br>";  // you also can use && inplace of and

    echo "Result of proof1 or proof2 is "; 
    echo var_dump($proof1 or $proof2). "<br>";  // you also can use || inplace of or

    echo "Result of proof1 xor proof2 is "; 
    echo var_dump($proof1 xor $proof2). "<br>";  

    echo "Result of !proof1 is "; 
    echo var_dump(!$proof1). "<br><br>";

    // 5. Incremental and Decremental Operators
    echo "<h2>5. Incremental and Decremental Operator</h2> <br>";

    $numInc = 34;
    echo " Result of 34's Preincrement is: ". ++$numInc ."<br>";
    echo " Result of 35's Postincrement is: ". $numInc++ ."<br>";
    
    $numDec = 8;
    echo " Result of 8's Preincrement is: ". --$numDec ."<br>";
    echo " Result of 7's Postincrement is: ". $numDec-- ."<br><br>";


    // 6. String Operators
    echo "<h2>6. String Operator</h2> <br>";

    echo "concatenation (.) operator's result: ";
    echo "Hello". " Guys";
    echo "<br>";

    $str1 = "Hello";
    $str2 = " Guys";
    echo "concatenation assignment operator's result: ";
    $output = $str1 .= $str2;
    echo $output. "<br><br>";


    // 7. Array Operators
    echo "<h2>7. Array Operator</h2><br>";

    $arr1 = array("Deep", "Azeem");
    $arr2 = array("Ravi");
    echo "Union operator - <br>";    // Union - performs union operation (fills left side array index with right side array indexed value in place of left sides empty indexes   and if left sides array's length is greater than right side array than result is left side's array)  
    echo "result of arr1 + arr2 is: ";
    print_r($arr1 + $arr2); // 
    echo "<br>";
    echo "result of arr2 + arr1 is: ";
    print_r($arr2 + $arr1); // 
    echo "<br>";

    $arr3 = array("Deep"=>"33", "Azeem"=>132);
    $arr4 = array("Deep"=>"33", "Azeem"=>132);
    echo "Equality operator - <br>";    // returns true if $arr3 and $arr4 have the same key/value pairs
    echo var_dump($arr3 == $arr4);
    echo "<br>";

    echo "Inequality operator - <br>";   // true if $a is not equal to $b.
    echo var_dump($arr3 != $arr4); // instead of != you can use <>
    echo "<br>";
    
    echo "Identity operator - <br>";   // true if $a and $b have the same key/value pairs in the same order and of the same types
    echo var_dump($arr3 === $arr4);
    echo "<br>";
    
    echo "Non-Identity operator - <br>";   // true if $a is not identical to $b
    echo var_dump($arr3 !== $arr4);
    echo "<br>";


    // 8. Ternary Operators
    echo "<h2>8. Ternary(Conditional) Operator</h2><br>";

    // (Conditional statement) ? (Statement_1) : (Statement_2);
    $age = 23;
    // echo ($age >= 18)? "You can drive": "You cannot drive"; 
    $result = ($age >= 18)? "You can drive": "You cannot drive"; 
    echo $result;


    // 9. Null Coalescing Operator
    echo "<h2>9. Null Coalescing Operator</h2><br>";
    // In this example, since the $fullname, $first, and $last doesn’t exist, the $name will take the 'Guest' value
    // $name = $_POST['name'] ?? 'User';
    $fullname;
    $firstname;
    $lastname;

    $name = $fullname ?? $firstname ?? $lastname ?? "Guest";
    echo $name ."<br>";


    // 10. gettype Operator
    echo "<h2>10. gettype() Operator</h2><br>";

    $string1 = "Hello World!"; // String
    echo gettype($string1)."<br>"; // Outputs: string

    $integer2 = 123; // Integer
    echo gettype($integer2)."<br>"; // Outputs: integer

    $float2 = 123.45; // Float
    echo gettype($float2)."<br>"; // Outputs: double



?>