<?php
	function divider($numb)
	{
		$i = 0;
		$arr = array();
		if (is_int($numb))
		{
			if ($numb < 0)
				$i = $numb;
			while ($i <= abs($numb))
			{
				if ($i == 0)
					$i++;
				if (($numb % $i) == 0)
					array_push($arr, $numb / $i);
				$i++;
			}
		}
		var_dump($arr);
		return $arr;
	}
	divider(10);
?>