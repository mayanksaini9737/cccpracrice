<?php 
    function is_prime($num){
        $prime = true;
        $root = sqrt($num);
        $con = ceil($root);
        if($num < 2){
            $prime = false;
        }
        for ($i=2; $i<= $con; $i++){
            if ($num%$i == 0){
                $prime = false;
                break;
            }
        }
        if ($prime){
            echo "$num is a prime number";
        } else {
            echo "$num is not a prime number";
        }
    }

    is_prime(4);
?>