<?php 
    /*
    Conditionals statement
    ======================

    1) if else statements(if, if-else, if-elseif-else, nested if)
    2) Switch Case statements
    */

    
    // 1) if  -> The `if` statement is used to execute a block of code if a specified condition is true. Otherwise Rest of code  
    echo "<h2>if statement</h2>";
    $age = 23;
    if ($age>=18) {
        echo "You can drive car";
    }


    // 2) if-else  -> The `if-else` statement allows you to execute one block of code if a condition is true and another block if the condition is false
    echo "<h2>if-else statement</h2>";
    $age2 = 17;
    if ($age2>=18) {
        echo "You can drive car";
    } else {
        echo "You can not drive car";
    }
    // instead of if-else sometime you can use teranry operator
    // echo ($age2>=18)? "You can drive a car": "You can not drive car";

    
    // 3) if-elseif-else  -> The `if-elseif-else` statement allows you to check multiple conditions in sequence. Note: if more one condition is true it will execute code of first satisfy condition's
    echo "<h2>if-else-if statement</h2>";
    $speed = 140; // in kph
    if ($speed<=70) {
        echo "You are driving very safely";
    } elseif ($speed>70 && $speed<=140) {
        echo "You are taking average risk with this speed";
    } elseif ($speed>140 && $speed<=250) {
        echo "It's dangerous";
    } else {
        echo "It's very dagerous";
    }

    // 4) Nested if  -> You can also nest `if` statements inside each other to create more complex conditional logic

    echo "<h2>Nested if statement</h2>";
    $percentage = -45; // percentage -%
    if ($percentage> 0){
        if ($percentage<33){
            echo "Sorry! you are fail";
        } else {
            echo "Congratulations! You are passed <br>";
            if ($percentage<=50) {
                echo "Your grade is: D";
            } elseif ($percentage<=60){
                echo "Your grade is: C";
            } elseif ($percentage<=70){
                echo "Your grade is:B";
            } elseif ($percentage<=80){
                echo "Your grade is AB";
            } elseif ($percentage<=90){
                echo "Your grade is A";
            } else if($percentage>90 and $percentage<=100){
                echo "Your grade is A+";
            } else {
                echo "Please! enter valid percentage";
            }
        }
    } else {
        echo "Please! enter valid percentage";
    }

    
    // 5) Switch case  -> The `switch` statement in PHP is used for efficient conditional operations where you have a single expression that you want to compare to multiple possible values
    // Each `case` checks whether it matches a specific day of the week.
    // The `break` statement terminates the `switch` statement once a match is found. If omitted, execution would continue to the next `case`.
    // The `default` case is executed if none of the specified cases match.


    echo "<h2>Switch case statement</h2>";
    $day = "Thursday";
    // switch ($day){
    //     case "Monday": echo "Working day";
    //     break;
    //     case "Tueday": echo "Working day";
    //     break;
    //     case "Wednesday": echo "Working day";
    //     break;
    //     case "Thursday": echo "Working day";
    //     break;
    //     case "Friday": echo "Working day";
    //     break;
    //     case "Saturday": echo "Holiday";
    //     break;
    //     case "Sunday": echo "Holiday";
    //     break;
    //     default: echo "Please enter valid day name";
    // }

    switch ($day){
        case "Monday": echo "Working day <br>";
        case "Tueday": echo "Working day <br>";
        case "Wednesday": echo "Working day <br>";
        case "Thursday": echo "Working day <br>";
        case "Friday": echo "Working day <br>";
        break;
        case "Saturday": echo "Holiday <br>";
        case "Sunday": echo "Holiday";
        break;
        default: echo "Please enter valid day name";
    }
?>