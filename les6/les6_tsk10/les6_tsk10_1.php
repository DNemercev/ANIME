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
			echo "$i ";
			$N--;
			$j++;
		}
		derivation($N);
	}
}
?>