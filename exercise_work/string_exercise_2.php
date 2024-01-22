<?php 
    $text = "Hello, World! How are you doing?";
    
    // 1. Find the length of the string
    $length_text = strlen($text);
    echo "Length of text is: $length_text <br>";

    // 2. Convert the entire string to lowercase
    $lowercase_text = strtolower($text);
    echo "The text string in lower case: $lowercase_text <br>";
    
    // 3. Convert the entire string to uppercase
    $uppercase_text = strtoupper($text);
    echo "The text string in upper case: $uppercase_text <br>";
    

    // 4. Replace "How are you doing?" with "Fine, thank you!"
    $replaced_text = str_replace("How are you doing?", "Fine, thank you!", $text);
    echo "Replaced text is: $replaced_text <br>";

    // 5. Extract and print the first 10 characters of the string
    $First_ten_char = substr($text, 0, 10) ;
    echo "First 10 char of str is: $First_ten_char <br>";

    // 6. Extract and print the substring starting from the 8th character to the end
    $after_8th_char = substr($text, 8);
    echo "Substring starting from 8th charcter: $after_8th_char <br>";


?>