<?php 
    $sentence = "The quick brown fox jumps over the lazy dog";

    // 1. Find the position of the word "fox" in the sentence
    $find_fox = strpos($sentence, "fox");
    echo "The position of the word fox is: $find_fox <br>";

    // 2. Check if the word "cat" is present in the sentence
    $find_cat = strpos($sentence, "cat");
    echo "Cat is present in the sentence: "; 
    echo var_dump($find_cat). "<br>";

    // 3. Extract and print the first 20 characters of the sentence
    $substring = substr($sentence, 0, 20);
    echo "First 20 character of the sentence: <pre>$substring</pre><br>";

?>