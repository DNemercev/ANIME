<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<form method="post">
		<select name="operation">
			<option value = "add">add</option>
			<option value = "subtract">subtract</option>
			<option value = "multiply">multiply</option>
			<option value = "divide">divide</option>
		</select>
		<input type="text" name="numOne" value="1">
		<input type="text" name="numTwo" value="1">
		<input type="submit">
	</form>
</body>
</html>
<?php
	function operation($numOne, $numTwo = 1, $operator)
	{
		if (is_int($numTwo) && is_int($numOne) && ($operator == 'add' || $operator == 'subtract' || $operator == 'multiply' || $operator == 'divide'))
		{	
			if ($operator == 'add')
				return ($numOne + $numTwo);
			elseif ($operator == 'subtract')
				return ($numOne - $numTwo);
			elseif ($operator == 'multiply')
				return ($numOne * $numTwo);
			else
			{
				if ($numTwo == 0)
					return 0;
				else
					return ($numOne / $numTwo);
			}
		}
		else
		{
			echo "Введите подходящие значения<br/>";
			return 0;
		}
	}
	echo operation($_POST['numOne'], $_POST['numTwo'], $_POST['operation']);
?>