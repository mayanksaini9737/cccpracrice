<?php 
    //Cyclic sort --- using cyclic sort when given that --> sort 1 or 0 to N numbers
    //If range --> [0, N]   --> every element will be at index = value
    //If range --> [1, N]   --> every element will be at index = value - 1

    $numArr = [4, 5, 2, 3, 1, 6, 7];

    function cyclic_sort(&$arr){
        $i = 0;
        while ($i < count($arr)){
            $correct = $arr[$i] - 1;
            if ($arr[$i] != $arr[$correct]){
                $temp = $arr[$i];
                $arr[$i] = $arr[$correct];
                $arr[$correct] = $temp;
            } else {
                $i++;
            }
        }
    }

    cyclic_sort($numArr);
    print_r($numArr);


?>