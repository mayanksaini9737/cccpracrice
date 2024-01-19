<?php 
    echo "<h2>Math Functions</h2>";

    // 1) abs($number) - Returns the absolute value of a number
    echo "abs(-8329) - ";
    echo "absolute value of -8329 is : " . abs(-8329);
    echo "<br><br>";


    // 2) ceil($number) - Rounds a number up to the nearest integer
    echo "ceil(45.34) - ";
    echo "ceiling value of 45.34 is : " . ceil(45.34);
    echo "<br><br>";
    

    // 3) floor($number) - Rounds a number down to the nearest integer
    echo "floor(889.87) - ";
    echo "floor value of 889.87 is : " . floor(889.87);
    echo "<br><br>";
    

    // 4) round($number, optional $precesion) - Rounds a number to the nearest integer or specified number of decimal places
    // $precesion - Optional. Specifies the number of decimal digits to round to. Default is 0
    echo "round(889.87) - ";
    echo "round value of 889.87 is : " . round(889.87); // default precesion is 0
    echo "<br>";

    echo "round(889.87, 1) - ";
    echo "round value of 889.87 with precision 1 is : " . round(889.87, 1);
    echo "<br>";
    
    echo "round(889.882, 1) - ";
    echo "round value of 889.822 with precision 1 is : " . round(889.822, 1);
    echo "<br>";

    echo "round(889.882, 2) - ";
    echo "round value of 889.822 with precision 2 is : " . round(889.822, 2);
    echo "<br><br>";


    // 5) pow($base, $exponent) - Returns the value of a base raised to the power of an exponent
    echo "pow(2, 4) - ";
    echo "Exponent value of 2**4 is : " . pow(2, 4);
    echo "<br>";

    echo "pow(2, -4) - ";
    echo "Exponent value of 2**(-4) is : " . pow(2, -4);
    echo "<br>";
    
    echo "pow(2, 0) - ";
    echo "Exponent value of 2**0 is : " . pow(2, 0);
    echo "<br>";
    
    echo "pow(2, 2.5) - ";
    echo "Exponent value of 2**2.5 is : " . pow(2, 2.5);
    echo "<br>";
    
    echo "pow(-2, 2.5) - ";
    echo "Exponent value of -2**(2.5) is : " . pow(-2, 2.5);    // NAN
    // echo "<br>";
    // echo "round(pow(2, 2.5),2) - ";
    // echo "round value of 2**2.5 is : " . round(pow(2, 2.5), 2);
    echo "<br><br>";


    // 6) sqrt($number) - Returns the square root of a number
    echo "sqrt(16) - ";
    echo "square root of 16 is : " . sqrt(16);
    echo "<br>";

    echo "sqrt(13) - ";
    echo "square root of 13 is : " . sqrt(13);
    echo "<br><br>";


    // 7) rand($min, $max) - Generates a random integer between the specified minimum and maximum
    // min and max value can arrived at random
    echo "rand(1, 100) - ";
    echo "random value between is : " . rand(1, 100);
    echo "<br>";

    echo "rand(3000, 4000) - ";
    echo "random value between is : " . rand(3000, 4000);
    echo "<br>";
    
    echo "rand(-3000, -4000) - ";
    echo "random value between is : " . rand(-3000, -4000);
    echo "<br><br>";

    // 8) number_format($number, $decimals, $decimal_point, $thousands_separator) - Formats a number with grouped thousands and a specified number of decimals
    echo "number_format(10000000, 2, . , ,) - ";
    echo "random value between is : " . number_format(10000000, 2,".",",");
    echo "<br>";

    echo "number_format(10000000) - ";
    echo "random value between is : " . number_format(10000000);
    echo "<br>";


?>