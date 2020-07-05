<?php
require_once './common.php';
function sortColors($array){
    $zero = -1;
    $two = count($array);
    for($i = 0; $i < $two ;){
        if ($array[$i] == 1){
            $i++;
        }elseif ( $array[$i] == 2 ){
            $temp =  $array[$i];
            $array[$i] = $array[--$two];
            $array[$two] = $temp;
        }else{
            $temp = $array[$i];
            $array[$i++] = $array[++$zero];
            $array[$zero] = $temp;
        }
    }
    return $array;
}

function main(){
    $array = generateArrayInOTZ(10);
    $result = sortColors($array);
    print_r($result);
}