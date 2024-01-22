<?php 
    // Que: If $a is 10% higher than $b then $b is how much lower than $a
    $a = 110;
    $b = 100;
    $change = $a - $b;
    $higherPercente = ($change/$b)*100;     // greater than $b
    $lowerPercente = ($change/$a)*100;      // lower than $a
    echo $higherPercente."<br>";
    echo $lowerPercente;
?>