<?php 
    function fibonacci_series($inp){
        $n1 = 0;
        $n2 = 1;
        $num = round($inp);
        $count = $num;
        if ($count <= 0){
            echo "Please enter valid terms";
            return;
        } else if($count == 1){
            echo $n1."__";
            return;
        } else if ($count == 2){
            echo $n1."__";
            echo $n2."__";
            return;
        } else{
            echo $n1."__";
            echo $n2."__";
            for ($i= 3; $i <= $count; $i++){
                $temp = $n1+$n2;
                echo $temp ."__";
                $n1 = $n2;
                $n2 = $temp;
            }
        }
    }

    fibonacci_series(10);

?>