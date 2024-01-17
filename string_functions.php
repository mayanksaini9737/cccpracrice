<?php 
    
    // 1. strlen($string) - Returns the length of a string
    // $msg = "Hello, Good afternoon";
    // echo strlen($msg);
    

    // 2. str_replace($search, $replace, $subject) - Replaces all occurrences of a substring with another substring in a given string.
    // $msg = "Hello, Good afternoon";
    // echo str_replace("afternoon", "morning", $msg);


    // 3. strpos($haystack, $needle) - Finds the position of the first occurrence of a substring in a string (index starts from 0), and also have a argument offset for starting search after that position
    // $msg = "Hello, Good afternoon sir, Good afternoon madam";
    // echo strpos($msg, "Good");
    // echo strpos($msg, "Good", 15);

    
    // 4. substr($string, $start, $length) - Returns a part of a string starting from the specified position and with a specified length
    // $msg = "Hello, Good afternoon";
    // echo substr($msg, 7, 5);
    // echo "<br>";
    // echo substr($msg, 7);


    // 5. strtolower($string) - Converts a string to lowercase
    // echo strtolower("Hello, GUYS");


    // 6. strtoupper($string) - Converts a string to uppercase
    // echo strtoupper("hello deep");


    // 7. trim($string) - Removes whitespace or other predefined characters from the beginning and end of a string
    // echo trim("    Hello, Deep  ");
    // echo trim("Hello, Deep", "Heep");


    // 8. implode($glue, $pieces) or implode(seprator, arr) - returns a string from the elements of an array
    // join() is same as implode()
    // $arr = array("Hii", "Ravi", "How", "are", "you");
    // echo implode(" ", $arr);
    // echo join(" ", $arr);


    // 9. explode($delimiter, $string) or explode(separator,string,limit) - Splits a string into an array by a specified delimiter
    // limit(optional) - Greater than 0 - Returns an array with a maximum of limit element(s)
                        // Less than 0 - Returns an array except for the last -limit elements()
                        // 0 - Returns an array with one element
    // $String = "Mayank, Deep, Yogeshwar, Azeem";
    // print_r(explode(',', $String));
    // print_r(explode(',', $String, 0));
    // print_r(explode(',', $String, 4));
    // print_r(explode(',', $String, -2));


    // 10. htmlspecialchars($string) or htmlspecialchars(string,flags,optional character-set,optional double_encode)- Converts special characters to HTML entities like < to &lt;. It prevents from cross-site attack (XSS)
    // doesn't direct show in browser shoeing in html file or check in browser using check page source 
    // $str = "Make paragraph in html page using this syntax <p> This is a paragraph </p>";
    // echo htmlspecialchars($str);
    // $output = htmlspecialchars($str);
    // echo htmlspecialchars($output);


    // 11. htmlentities($string) or htmlentities(string,flags,character-set,double_encode) - Converts all applicable characters to HTML entities
    // $str = "<div class='container'>This is a container </div>";
    // echo htmlentities($str);
    // $output = htmlentities($str);
    // echo htmlentities($output);

    // 12. str_repeat($string, $multiplier) - Repeats a string a specified number of time
    // using this we can print pattern
    // $str = "Good morning";
    // $str2 = str_repeat($str, 5);
    // echo $str2


    // 13. strrev($string) - Reverses a string
    // $str = "Good";
    // echo strrev($str);


    // 14. str_shuffle($string) - Randomly shuffles all characters in a string
    // it is can be used in a shuffle game like card
    // $str = "Randomly shuffles all characters in a string";
    // echo str_shuffle($str);


    // 15. str_split($string, $length) - Converts a string to an array, breaking it into smaller chunks
    // $str = "Converts a string to an array";
    // print_r(str_split($str)); // lengh default is 1
    // print_r(str_split($str, 7)); 


    // 16. str_word_count($string) - Returns the number of words in a string
    // echo str_word_count("Returns the number of words in a string");

    
    // 17. substr_replace($string, $replacement, $start, $length) - Replaces a portion of a string with another string
    // echo substr_replace("Replaces a portion of a string with another string", "Replace", 10, 20);
    // echo substr_replace("Replaces a portion of a string with another string", "Replace", 10); // if length is not given then replace the last entire part from start


    // 18. 









    




    

?>