<?php
require_once './common.php';

function quickSort($array)
{
    $flag = $array[0];
    $left = [];
    $right = [];
    if(count($array)<2){
        return $array;
    }
    for($i = 1;$i <count($array); $i++){
        if($array[$i] <  $flag){
            array_push($left,$array[$i]);
//            $left = $array[$i];
        }else{
            array_push($right,$array[$i]);
//            $right = $array[$i];
        }
    }
    $left = quickSort($left);
    $right = quickSort($right);
    return array_merge($left,$flag,$right);
}

function main(){
    $array = generateRandArray(20);
    print_r($array);
    $result = quickSort($array);
    print_r($result);
}
