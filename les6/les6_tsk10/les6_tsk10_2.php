<?php
function changeling($N)
{
	static $i = 0;
	if ($i++ == 0 && $N == 0)
	{
		echo "0";
	}
	if (abs($N) > 0)
	{
		echo abs($N%10) . "\n";
		changeling(($N - $N%10)/10);
		$i++;
	}
	if (($N - $N%10)/10 == 0 && $N < 0)
		echo "- ";
}
changeling(0);
?>