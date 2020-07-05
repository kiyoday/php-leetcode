<?php
require_once './common.php';

function binarySearch($array, $n, $target){
	$left = 0;
	$right = $n-1;
	while($left < $right){
	    $mid = ($left+$right)/2;
	    $mid = ceil($mid);
	    if($array[$mid] == $target){
	        return $mid;
        }
	    if ($target > $array[$mid]){
	        $left = $mid;
        }else{
	        $right = $mid;
        }
    }
    return -1;
}

function main(){
    $array = generateSortArray(20000);
    $n = count($array);
    $target = $array[1300];
    $local = binarySearch($array, $n, $target);
    echo $local.PHP_EOL;
}

