<?php

require_once './common.php';

function miniSizeSubarraySum($array, $s){
    $left = 0;
    $right = -1;//[l...r]为滑动窗口
    $sum = 0;
    $res = count($array)+1;
    while ($left < count($array)){
        //滑动窗口
        if ($right + 1 < count($array) && $sum < $s){
            $sum += $array[++$right];
        }else{
            $sum -= $array[$left++];
        }
        if ($sum >= $s){
            $res = min($res, $right-$left+1);
        }
    }
    if ($res == count($array)+1){
        return 0;
    }
    return $res;
}

function main(){
    $array = generateRandArray(10000);
    $res = miniSizeSubarraySum($array, 200);
    var_dump($res);
}
