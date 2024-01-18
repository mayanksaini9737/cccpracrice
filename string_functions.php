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


    // 18. str_pad($string, $length, $pad_string, $pad_type) - Pads a string to a certain length with another string
    // Pad to the right side of the string, to a new length of 30 characters
    // $pad_string default it is white spaces
    // $pad_types STR_PAD_BOTH, STR_PAD_LEFT, STR_PAD_RIGHT
    // $str = "Hello Guys";
    // echo str_pad($str, 30);
    // echo str_pad($str, 30, 'how');
    // echo str_pad($str, 30, 'how', STR_PAD_BOTH);


    // 19. strcoll($string1, $string2) - Locale based string comparison
    // used for performing a string comparison based on the current locale. This function is part of the Internationalization Functions extension (intl), so you need to make sure that the extension is enabled in your PHP configuration
    // compares two strings 
    // Note : The strcoll() is case-sensitive but not binary-safe. 
    // function returns - // 0 - if the two strings are equal
                        // <0 - if string1 is less than string2
                        // >0 - if string1 is greater than string2
    // echo strcoll("Compares Strings", "Compare Strings");


    // 20. strcspn($string, $mask, $start, $length) - Finds the length of the initial segment not matching a mask.
    // returns the number of characters (including whitespaces) found in a string before any part of the specified characters are found
    // can be useful in filtering out certain characters from the beginning of a string
    // $length = strcspn("ma 1234yank", "ynk");
    // $length = strcspn("ma 1234yank", "ank", 5); // its returns number character(after 5 counting starts from 0) before any part that is specified 
    // echo $length;

    // strspn(string,charlist,optional start,optional length) is also a function as strcspn()
    // returns the number of characters found in the string that contains only characters from the charlist parameter
    // used in parsing and validation scenarios where you want to check if the beginning of a string contains only certain types of characters
    // $length = strspn("mayank123", "abcdefghijklmnopqrstwvxyz");
    // $length = strspn("mayank123 hemraj", "abcdefghijklmnopqrstwvxyz", 10);
    // echo $length;


    // 21. stristr($haystack, $needle, $before_needle) - Case-insensitive search for the first occurrence of a string
    // returns the entire part of the string from occurence (from $needle) otherwise it returns FALSE
    // $before_needle is default false if is set to true then returns the part of string before $needle 
    // echo stristr("Good Morning", "morning");
    // echo stristr("Good Morning guys", "oo");
    // echo "<br>";
    // echo stristr("Good Morning guys", "oo", true);
    // echo stristr("Good Morning guys", "gu", true);
    // For a case-sensitive search, use strstr() function


    // 22. strpbrk($string, $char_list) - Searches a string for any of a set of characters
    // This function is case-sensitive 
    // This function returns the rest of the string from where it found the first occurrence of a specified character, otherwise it returns FALSE
    // echo strpbrk("Good morning", "em");
    // $resutl = strpbrk("Good morning", "eM");
    // echo var_dump($result); - it prints false
    // $output = strpbrk("Good morning", "yx");
    // echo var_dump($output); - it prints false


    // 23. strstr($haystack, $needle, $before_needle) - Finds the first occurrence of a string
    // It is case-sensetive
    // further same as stristr()
    // $before_needle is default false if is set to true then returns the part of string before $needle 
    // echo strstr("Good morning, guys", "mo");
    // $output = strstr("Good morning, guys", "Mo");
    // echo var_dump($output);
    // echo strstr("Good morning, guys", "mo", true);


    // 24. strtr($string, $from, $to) or strtr(string,array) - Translates characters or replaces substrings
    // translates certain characters in a string
    // If the $from and $to parameters are different in length, both will be formatted to the length of the shortest
    // echo strtr("replaces substring", "aeiou", "12345");
    // $arr = array('a'=> 1, 'e'=> 2, 'i'=>3, 'o'=>4, 'u'=>5);
    // echo strtr("replaces substring", $arr);


    // 25. ucfirst($string) - Converts the first character of a string to uppercase
    // echo ucfirst("converts the first character");


    // 26. ucwords($string) - Converts the first character of each word in a string to uppercase
    // echo ucwords("mayank saini");












    




    

?>