<?php
/*
 * -1000, -999,...i,...,j,...999,1000
 * so the gap {j-i} =>
 * (j+1000)-(i+1000)
 * array
 * $k=>the sum of the numbers
 * $v=>the number of the sum of the numbers in the array
 * that appear
 */
function subsum($arr, $gap) {
	$res = 0;
	$sum = 0; // the increasing sum of the numbers in the array
	$preSum = array (
			0 => 1 
	);
	
	/*
	 * as the sum may appear more than once, so we record
	 * the times that it appear, as the value of the array
	 * (because of the [-1000,1000])
	 */
	foreach ( $arr as $num ) {
		$sum += $num;
		if (array_key_exists ( $sum - $gap, $preSum )) {
			$res += $preSum [$sum - $gap];
			//echo $res;
		}
		$preSum [$sum] += 1;
	}
	return $res;
}

// test
$nums = array (
		-33,
		-19,
		-2,
		0,
		2,
		5,
		7,
		13,
		17,
		21,
		32
);
echo subsum ( $nums, 6 );
