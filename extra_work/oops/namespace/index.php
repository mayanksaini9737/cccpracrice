<?php 
    require 'product.php';
    require 'testing.php';

    function hello(){
        echo "Hello from index.php page";
    }
    // $pro = new product\test;
    $pro = new testing\test;
    // hello();
    product\hello();
?>