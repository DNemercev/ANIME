<?php
function summ($arr_for_sort)
{
	$neg_arr = [];
	$pos_arr = [];
	foreach ($arr_for_sort as $value) {
		if ($value >= 0)
			array_push ($pos_arr, $value);
		else
			array_push($neg_arr, $value);
	}
	$sum_pos_neg = array('pos_sum' => array_sum($pos_arr),'neg_sum' => array_sum($neg_arr));
	return $sum_pos_neg;
}
?>