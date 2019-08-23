<?php
$key = range(150, 90, 3);
$arr = array_combine($key, array_reverse($key));
$arr_2 = $arr;
ksort($arr_2);
var_dump($arr);
echo "<br/><br/>";
var_dump($arr_2);
?>