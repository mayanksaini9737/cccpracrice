<?php 
    $quote = "In three words I can sum up everything I've learned about life: it goes on.";

    // 1. Count the total number of words in the quote
    $total_words = str_word_count($quote);
    echo "Total number of words in quote: $total_words <br>";

    // 2. Convert the entire quote to lowercase
    $lowercase_qoute = strtolower($quote);
    echo "Entire qoute in lowercase: $lowercase_qoute <br>";

    // 3. Capitalize the first letter of each word in the quote
    $firstletter_capital = ucwords($quote);
    echo "Capital first letter of each word : $firstletter_capital <br>";

?>