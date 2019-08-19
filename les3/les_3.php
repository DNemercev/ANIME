<?php
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var += 1; // alt $var++; но $var = 'ab'; $var++; ($var = 'ac')
$var -= 1; // alt $var--; но $var = 'ab'; $var--; ($var = 'aa')
echo "$var"."<br/>"."\\----------------------/<br/>";

$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo "$result<br/>"."\\----------------------/<br/>";

$age = 10;
if (is_int($age))
{
    if ($age < 0)
    {
        echo "Я еще не родился!<br/>";
    }
    elseif ((($age % 100 >= 11) && ($age % 100 <= 19)) || ($age % 10) == 0 || (($age % 10) >= 5 && ($age % 10) <= 9))
    {
        echo "Мне $age лет!<br/>";
    }
    elseif (($age % 10) >= 2 && ($age % 10) <= 4)
    {
        echo "Мне $age года!<br/>";
    }
    else
    {
        echo "Мне $age год!<br/>";
    }
}
else
{
    echo "На Земле используют десятиричную систему исчисления<br/>";
}
echo "\\----------------------/<br/>"
?>
