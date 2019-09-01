<?php 
	// function pyramid($numb)
	// {
	// 	$i = 0;
	// 	$j = 0;
	// 	$k = $numb;
	// 	while (++$i <= $numb)
	// 	{
	// 		while (++$j <= $numb + $numb - $k)
	// 		{
	// 			if ($j < $k)
	// 				echo " ";
	// 			else
	// 				echo "X";
	// 		}
	// 		$k--;
	// 		echo "\n";
	// 		$j = 0;
	// 	}
	// 	return 0;
	// }
	function pyramid($numb)
	{
		while (--$numb >= 0)
		{
			$j = 0;
			while ($j++ <= $numb)
				echo "X";
			echo "\n";
		}
	}
	pyramid (10);
?>