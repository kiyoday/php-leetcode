<?php
require_once './common.php';

function moveZeros($array){
    $n = count($array);
    $newArray = [];
    for($i = 0;$i <= $n - 1;$i++){
        if ($array[$i]!=0){
            array_push($newArray,$array[$i]);
        }
    }
    for ($j = count($newArray);$j < $n-1; $j++){
        $newArray[$j] = 0;
    }
    return $newArray;
}

function moveZeros2($array){
    $n = count($array);
    $k = 0;
    for($i = 0;$i <= $n;$i++){
        if ($array[$i]!=0){
            $array[$k] = $array[$i];
            $k++;
        }
    }
    for ($j = $k;$j <= $n-1; $j++){
        $array[$j] = 0;
    }
    return $array;
}

function main(){
    $array = generateArrayWithZeros(20);
    print_r($array);
    print_r(moveZeros2($array));
}