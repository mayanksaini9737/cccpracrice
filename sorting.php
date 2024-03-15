<?php 


// $array = [];
// function insertionSort(&$arr){
//     for($i=0; $i<count($arr)-1; $i++){
//         for ($j=$i+1; $j>0 ; $j--) { 
//             if ($arr[$j] < $arr[$j-1]){
//                 $temp = $arr[$j];
//                 $arr[$j] = $arr[$j-1];
//                 $arr[$j-1] = $temp;
//             } else {
//                 break;
//             }
//         }
//     }
// }

// insertionSort($array);
// print_r($array);


for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo $i*$j.' ';
    }
    echo "<br>";
}


?>