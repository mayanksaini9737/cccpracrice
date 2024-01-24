<?php 
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname= 'ccc_practice';

    $conn = mysqli_connect($server, $username, $password, $dbname);
    if(!$conn){
        die("Sorry, Failed to connect");
    } else {
        // echo "Connected";
    }
?>