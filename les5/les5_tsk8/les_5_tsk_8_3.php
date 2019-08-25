<?php 
	function pyramid($numb)
	{
		$i = 0;
		$j = 0;
		$k = $numb;
		while (++$i <= $numb)
		{
			while (++$j <= $numb + $numb - $k)
			{
				if ($j < $k)
					echo " ";
				else
					echo "X";
			}
			$k--;
			echo "\n";
			$j = 0;
		}
		return 0;
	}
	pyramid (10);
?>