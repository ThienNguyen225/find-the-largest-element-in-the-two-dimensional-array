<?php
function checkMax($array){
    $max = $array[0][0];
    foreach ($array as $key=> $value){
        foreach ($value as $index => $item){
            if ($max < $array[$key][$index]){
                $max = $array[$key][$index];
            }
        }
    }
//    for ($index = 0; $index < count($array); $index++){
//        for ($index1 = 0; $index1 < count($array[$index1]); $index1++){
//            if ($max < $array[$index][$index1]){
//                $max = $array[$index][$index1];
//            }
//        }
//    }
    return $max;
}
$array = [[4545,45,2,1,15,1000],[555,45,5,45,5],[55,1,545,22,44,2],[-55,-5,44,5],[11,5,1,88,4],[44,4,8,4]];
//print_r($array);
echo "<br>".checkMax($array);
?>