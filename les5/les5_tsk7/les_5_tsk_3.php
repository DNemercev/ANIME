<?php
function season_month($month)
{
	if ($month >= 1 && $month <= 12)
	{
		if ($month == 12 || $month <= 2)
			echo "Сейчас Зима";
		elseif ($month > 2 && $month <= 5)
			echo "Сейчас Весна";
		elseif ($month > 5 && $month <= 8)
			echo "Сейчас Лето";
		else
			echo "Сейчас Осень";
	}
	echo "\n";
	return 0;
}
?>