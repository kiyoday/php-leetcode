<?php
function generateSortArray($len){
    $array = [];
    $flag = 0;
    for($i = 0;$i < $len-1; $i++){
        $add = rand(1,3);
        array_push($array, $flag);
        $flag = $flag+$add;
    }
    return $array;
}

function generateRandArray($len){
    $array = [];
    for($i = 0;$i < $len-1; $i++){
        $add = rand(1,99);
        array_push($array, $add);
    }
    return $array;
}

function generateArrayWithZeros($len){
    $array = [];
    for($i = 0;$i < $len-1; $i++){
        $add = rand(0,5);
        array_push($array, $add);
    }
    return $array;
}

function generateArrayInOTZ($len){
    $array = [];
    for($i = 0;$i < $len-1; $i++){
        $add = rand(0,2);
        array_push($array, $add);
    }
    return $array;
}