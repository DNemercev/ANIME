<?php
$arr = [
	['name' => 'Yan', 'salery' => '1200', 'work_hours' => 180],
	['name' => 'Barda', 'salery' => '2150', 'work_hours' => 160],
	['name' => 'Piter', 'salery' => '1500', 'work_hours' => 160],
	['name' => 'Alex', 'salery' => '3340', 'work_hours' => 167],
	['name' => 'Deiv', 'salery' => '1700', 'work_hours' => 176],
	['name' => 'Bob', 'salery' => '1150', 'work_hours' => 182],
	['name' => 'Claus', 'salery' => '2810', 'work_hours' => 155],
	['name' => 'Lina', 'salery' => '1600', 'work_hours' => 169],
	['name' => 'Rod', 'salery' => '2780', 'work_hours' => 191],
	['name' => 'Kristy', 'salery' => '2180', 'work_hours' => 144],
	['name' => 'Ron', 'salery' => '1670', 'work_hours' => 157],
]
function add_salry($salery)
{
	if ($salery < 1600)
		$salery = $salery + 100;
	return $salery;
}
function 
?>