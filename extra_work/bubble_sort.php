<?php 
    $arrayToSort = [64, 34, 25, 12, 22, 11, 90];

    function bubble_sort(&$arr){
        for($i=0; $i< count($arr); $i++){
            $swap = false;
            for($j=0; $j<count($arr)-$i-1; $j++){  
                if($arr[$j] > $arr[$j+1]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                    $swap = true;
                }
            }
            // if swap is remain false then it means arr is now sorted
            if(!$swap){
                break;
            }
        }
        return $arr;
    }
    bubble_sort($arrayToSort);
    print_r($arrayToSort);

?>