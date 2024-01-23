<?php 
    $arrayToSort = [64, 34, 25, 12, 22, 11, 90];

    function insertion_sort(&$arr){
        for($i=0; $i<count($arr)-1; $i++){
            for ($j=$i+1; $j>0 ; $j--) { 
                if ($arr[$j] < $arr[$j-1]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j-1];
                    $arr[$j-1] = $temp;
                } else {
                    break;
                }
            }
        }
        return $arr;
    }

    print_r(insertion_sort($arrayToSort));
?>