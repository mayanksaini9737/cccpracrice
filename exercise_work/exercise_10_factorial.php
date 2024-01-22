<?php 
    
    function fact($inp){
        $num = round($inp);
        if ($num<1){
            echo "Please enter valid(positive number)";
            return;
        } else if($num == 1){
            return 1;
        } else{
            return $num * fact($num-1);
        }
    }
    echo "<h2>";
    echo fact(10);
    echo "</h2>";
?>