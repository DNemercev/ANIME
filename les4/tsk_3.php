<?php
$a = 150;
$key = [150];
while($a > 90)
{
    $a -= 3;
    array_push($key, $a);
}
//var_dump($key);
$arr = array_combine($key, array_reverse($key));
var_dump($arr);
echo "<br/><br/>";
$arr_2 = $arr;
ksort($arr_2);
var_dump($arr_2);
?>