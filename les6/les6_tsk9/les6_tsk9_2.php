<?php
function add($NumOne, $NumTwo)
{
	return ($NumTwo + $NumOne);
}
function sub($NumOne, $NumTwo)
{
	return ($NumTwo - $NumOne);
}
function operation ($NumOne, $NumTwo, $type_of_operation)
{
	if (is_int($NumOne) && is_int($NumTwo) && is_string($type_of_operation) && ($type_of_operation == 'sub' || $type_of_operation == 'add'))
	{
		if ($type_of_operation == 'add')
		{
			$a = add($NumOne, $NumTwo);
		}
		else
		    {
            $a = sub($NumOne, $NumTwo);
        }
	}
	else{
		echo "Введены неверные параметры<br/>";
		$a = NULL;
	}
	return $a;
}

?>