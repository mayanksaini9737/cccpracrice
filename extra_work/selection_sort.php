<?php 
    $arrayToSort = [64, 34, 25, 12, 22, 11, 90];

    function getMaxIndex($arr, $start, $last){
        $max = $start;
        for ($i=$start; $i<=$last; $i++){
            if ($arr[$max] < $arr[$i]){
                $max = $i;
            }
        }
        return $max;
    }
    
    function selection_sort(&$arr){
        for ($i=0; $i< count($arr); $i++){
            $last = count($arr)-$i-1;
            $max = getMaxIndex($arr, 0, $last);
            // echo $max;
            // swaping
            $temp = $arr[$max];
            $arr[$max] = $arr[$last];
            $arr[$last] = $temp;
        }
    }

    // $output = selection_sort($arrayToSort);
    print_r(selection_sort($arrayToSort));
?>