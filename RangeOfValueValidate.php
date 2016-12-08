<?php
/**
 * 数値かどうか、数値ならmax以下min以上であるかのバリデート用関数
 *
 * @param int $value
 * @param int $max
 * @param int $min
 * @return boolean
 */
function RangeOfValueValidate($value, $max, $min){
	if(!is_numeric($value)){
		return false;
	}
	$value = (int) trim(strip_tags($value));
	if($value <= $max && $value >= $min){
		return true;
	}
	return false;
}
?>