<?php
$a = 2019;
echo "a = $a<br/>";
define("NAME", "Дима");
$age = 23;
echo "Меня зовут: ", NAME, "</br>";
echo "Мне $age года<br/>";
unset($age);
if (isset($age))
    echo "Переменная age существует<br/>";
else
    echo "Переменная age была успешно удалена";
?>