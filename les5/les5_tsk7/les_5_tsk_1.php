<?php
function season ($num)
{
	if ($num >= 1 && $num <= 4)
	{
		switch ($num)
		{
			case 1:
				$result = 'Зима';
				break;
			case 2:
				$result = 'Весна';
				break;
			case 3:
				$result = 'Лето';
				break;
			case 4:
				$result = 'Осень';
				break;
		}
		return $result;
	}
	else
		return NULL;
}
?>