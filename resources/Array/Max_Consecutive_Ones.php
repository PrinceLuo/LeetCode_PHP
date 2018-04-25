<?php
function count_1s($arr) {
	$max = 0;
	$tmp = 0;
	// for($i = 0; $i < count ( $arr ); $i ++) {
	// if ($arr [$i] == 0) {
	// if ($tmp != 0) {
	// $max = ($max >= $tmp ? $max : $tmp);
	// $tmp = 0;
	// }
	// } else {
	// $tmp ++;
	// if ($i == count ( $arr ) - 1) {
	// $max = ($max >= $tmp ? $max : $tmp);
	// }
	// }
	// }
	foreach ( $arr as $num ) {
		$max = max ( $max, ($tmp = $num == 0 ? 0 : $tmp += 1) );
	}
	return $max;
}

// test
$arr = array (
		1,
		1,
		0,
		0,
		1,
		1,
		1,
		0,
		0,
		1,
		0,
		1,
		1,
		0,
		0,
		0,
		1,
		1,
		1,
		1,
		1,
		1 
);
echo count_1s ( $arr );