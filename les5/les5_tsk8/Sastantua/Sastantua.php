<?php
function spase($num)
{
	if ($num == 1)
		$k = 2;
	else
	{
		$i = 1;
		$k = 2;
		while ($i < $num)
		{
			$k = $k + $i + 5;
			$i++;
		}
	}
	return $k;
}
function sastantua($num_of_tiers)
{
	$all_spase = spase($num_of_tiers);
	$i = 0;
	$j = 3;
	$k = 1;
	$m = 0;
	$l_k = 0;
	while ($i < $num_of_tiers)
	{
		$l = 0;
		while ($l < $j)
		{
			while ($m <= $all_spase)
			{
				echo " ";
				$m++;
			}
			echo "/";
			while ($l_k < $k)
			{
				echo "*";
				$l_k++;
			}
			echo "\\\n";
			$l_k = 0;
			$m = 0;
			$all_spase--;
			$l++;
			$k = $k + 2;
		}
		$all_spase = $all_spase - 2;
		$k = $k + 4;
		$j++;
		$i++;
	}
	return 0;
}
?>