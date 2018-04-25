<?php
function rev($str, $k) {
	$strarr = str_split ( $str, $k );
	print_r($strarr);
	echo "<br />";
	for($i = 0; $i < count ( $strarr ); $i += 2) {
		$strarr [$i] = strrev ( $strarr [$i] );
	}
	return implode ( '', $strarr );
}

// test
$str = 'abcdefghijklmn';
echo rev ( $str, 3 );