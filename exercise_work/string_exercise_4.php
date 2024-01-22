<?php 
    $name = "John";

    // 1. Pad the string with underscores (`_`) on the left side to make its total length 10 characters
    $leftpad_name = str_pad($name, 10, "_", STR_PAD_LEFT);

    // 2. Pad the string with asterisks (`*`) on the right side to make its total length 8 characters
    $rightpad_name = str_pad($name, 8, "*", STR_PAD_RIGHT);

    // 3. Print the resulting strings
    echo "After left side pading(_) the result is: $leftpad_name <br>";
    echo "After right side pading(*) the result is: $rightpad_name <br>";

?>