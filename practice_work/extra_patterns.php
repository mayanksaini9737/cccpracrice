<?php 
    // Even 
    // ==========

    $n=10;
    // for ($i=1; $i < $n; $i++) { 
    //     for ($j=1; $j <= $n; $j++) { 
    //         if ($i<=$n/2){
    //             if($j>=$i and $j<=$n-$i+1){
    //                 echo $j." ";
    //             } else {
    //                 echo "-". " ";
    //             }
    //         } else {
    //             if ($j<=$i+1 and $j>=$n-$i){
    //                 echo $j." ";
    //             } else {
    //                 echo "-". " ";
    //             }
    //         }
    //     }
    //     echo "<br>";
    // }


    for ($i=1; $i <= (2*ceil($n/2))-1; $i++) { 
        for ($j=1; $j <= $n; $j++) { 
            if ($i<=ceil($n/2)){
                if($j>=$i and $j<=$n-$i+1){
                    echo $j." ";
                } else {
                    echo "-". " ";
                }
            } else {
                if ($j<=$i+1 and $j>=$n-$i){
                    echo $j." ";
                } else {
                    echo "-". " ";
                }
            }
        }
        echo "<br>";
    }


    // Odd 
    // ==========

    // $n = 11;
    // for ($i=1; $i <= $n; $i++) { 
    //     for ($j=1; $j <= $n; $j++) { 
    //         if ($i<=($n/2)+1){
    //             if($j>=$i and $j<=$n-$i+1){
    //                 echo $j." ";
    //             } else {
    //                 echo "-". " ";
    //             }
    //         } else {
    //             if ($j<=$i and $j>=$n-$i+1){
    //                 echo $j." ";
    //             } else {
    //                 echo "-". " ";
    //             }
    //         }
    //     }
    //     echo "<br>";
    // }


    // $n = 11;
    // for ($i=1; $i <= $n-1; $i++) { 
    //     for ($j=1; $j <= $n; $j++) { 
    //         if ($i<=($n/2)+1){
    //             if($j>=$i and $j<=$n-$i+1){
    //                 echo $j." ";
    //             } else {
    //                 echo "-". " ";
    //             }
    //         } else {
    //             if ($j<=$i+1 and $j>=$n-$i){
    //                 echo $j." ";
    //             } else {
    //                 echo "-". " ";
    //             }
    //         }
    //     }
    //     echo "<br>";
    // }
?>