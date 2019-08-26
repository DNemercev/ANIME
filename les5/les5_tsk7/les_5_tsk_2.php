<?php
function dekada($day)
{
	if ($bay >= 1 && $day <= 10)
		echo $day."-й день месяца принадлежит 1-ой декаде\n";
	elseif ($day > 10 && $day <= 20)
		echo $day."-й день месяца принадлежит 2-ой декаде\n";
	else
		echo $day."-й день месяца принадлежит 3-ей декаде\n";
	return (0);
}
dekada(12);
?>