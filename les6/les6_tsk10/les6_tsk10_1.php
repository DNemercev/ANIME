<?php
function derivation(int $N)
{
	$j = 0; 
	static $i = 0;
	$i++;
	if ($N > 0)
	{
	while ($j < $i)
		{
			if ($N - 1 > 0)
				echo "$i, ";
			if ($N - 1 == 0)
				echo "$i";
			$N--;
			$j++;
		}
		derivation($N);
	}
}
derivation(100);
?>