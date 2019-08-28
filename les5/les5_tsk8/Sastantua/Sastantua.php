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
function last_stage ($j, $k, $all_spase)
{
	$m = 0;
	$l = 0;
	$l_k = 0;
	if ( $j == 3)
	{
		while($l < $j)
		{
			while ($m < $all_spase)
			{
				echo " .";
				$m++;
			}
			$m = 0;
			$all_spase--;
			echo "/";
			while($l_k < $k)
			{
				if ($l == 2 && $l_k == 2)
					echo "|";
				else
					echo "*";
				$l_k++;
			}
			echo "\\<br/>";
			$l_k = 0;
			$k = $k + 2;
			$l++;
		}
	}  
	elseif ($j == 4 || $j == 5)
	{
		while ($l < $j)
		{
			while ($m < $all_spase)
			{
				echo "q";
				$m++;
			}
			$m = 0;
			$all_spase--;
			echo "/";
			while ($l_k < $k)
			{
				if (($l_k > ($k - 4)/2) && ($l_k < $k/2 + 1) && ($l > 0))
					echo "| ";
				else
					echo "*";
				$l_k++;
			}
			echo "\\<br/>";
			$l_k = 0;
			$k = $k + 2;
			$l++;
		}
	}
	else
	{
		while ($l < $j)
		{
			while ($m < $all_spase)
			{
				echo "q";
				$m++;
			}
			$m = 0;
			$all_spase--;
			echo "/";
			while ($l_k < $k)
			{
				if (($j - $l <= 5) && ($l_k > ($k - 6)/2) && ($l_k < $k/2 + 2))
				{
					if (($j - $l == 3) && ($l_k > ($k - 1)/2) && ($l_k < ($k + 2)/2))
						echo "$";
					else
						echo "| ";
				}
				else
					echo "*";
				$l_k++;
			}
			echo "\\<br/>";
			$l_k = 0;
			$k = $k + 2;
			$l++;
		}
	}
}
function sastantua($num_of_tiers)
{
	$all_spase = spase($num_of_tiers);
	$i = 0;
	$j = 3;
	$k = 1;
	$m = 0;
	$l_k = 0;
	while ($i < ($num_of_tiers - 1))
	{
		$l = 0;
		while ($l < $j)
		{
			while ($m < $all_spase)
			{
				echo "q";
				$m++;
			}
			echo "/";
			while ($l_k < $k)
			{
				echo "*";
				$l_k++;
			}
			echo "\\<br/>";
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
	last_stage ($j, $k, $all_spase);
	return 0;
}
sastantua(7);
?>

