<?php
function longChar($string){
    $freq = []; //字符数组
    $l = 0; $r = -1;
    $res = 0;
    $count = strlen($string);
    while($l < $count){
        if ($r+1 < $count && $freq[$string[$r+1]] == 0){
            $r++;
            $freq[$string[$r]] ++;
        }else{//左边界缩小
            $freq[$string[$l]] --;
            $l++;
        }
        $res = max($res, $r-$l+1);
    }
    return $res;
}

function main(){
    $string = 'abceddabced';
    $res = longChar($string);
    var_dump($res);
}