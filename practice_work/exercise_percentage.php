<?php 
    // Que: If $a is 10% higher than $b then $b is how much lower than $a
    $a = 110;
    $b = 100;
    $change = $a - $b;
    $higherPercente = ($change/$b)*100;
    $lowerPercente = ($change/$a)*100;
    echo $higherPercente."<br>";
    echo $lowerPercente;
?>