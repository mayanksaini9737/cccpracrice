<?php 
    $arrayToSort = [64, 34, 25, 12, 22, 11, 90];
    function bubbleSort($arr){
        for ($i=0; $i < count($arr) ; $i++) { 
            $swap = false;
            for ($j=1; $j <count($arr)-$i; $j++) { 
                if($arr[$j] < $arr[$j-1]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j-1];
                    $arr[$j-1]= $temp;
                    $swap = true; 
                }
            }
            if(!$swap){
                break;
            }
        }
        return $arr;
    }
    $out = bubbleSort($arrayToSort);
    print_r($out);
?>