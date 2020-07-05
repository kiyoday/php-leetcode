<?php
require_once './common.php';
function twoSum2($array, $target){
    $left = 0;
    $right = count($array)-1;
    while($left < $right){
        if($array[$left] + $array[$right] == $target){
            return $left.' '.$right;
        }elseif ($array[$left] + $array[$right] > $target){
            $right--;
        }else{
            $left++;
        }
    }
    return false;
}

function main(){
    $array = generateSortArray(10);
    $result = twoSum2($array, 10);
    print_r($array);
    print_r($result);
}