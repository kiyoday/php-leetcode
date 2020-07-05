<?php
require_once './01_array/longChar.php';
$t1 = microtime(true);
$m1 = intval(memory_get_usage());
main();
$t2 = microtime(true);
$m2 = intval(memory_get_usage());
echo '耗时: ' . round($t2 - $t1, 13) . '秒'. PHP_EOL;
echo '消耗内存: ' . $m2.'-'.$m1 . PHP_EOL;
