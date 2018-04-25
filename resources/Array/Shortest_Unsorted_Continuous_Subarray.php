<?php
/*
 * The key is:
 * When the min is updating, the start stays; otherwise, the start
 * moves left;
 * likewise, max updates and end stays, or max stays, end moves
 * right 
 */
function shortest($arr){
	
	$min = $arr[count($arr)-1];
	$len = count($arr);
	$max = $arr[0];
	$end = -2;
	$start = -1;
	for($i = 1; $i<$len; $i++){
		$min = $min < $arr[$len-1-$i]?$min:$arr[$len -1 - $i];
		$max = $max > $arr[$i]?$max:$arr[$i];
		if($arr[$len-1-$i]> $min) $start = $len-1 -$i;
		if($arr[$i]< $max) $end = $i;
		echo $i,$min,"<br />";
		echo $start," => ",$end,"<br />";
	}
	//echo $start," => ",$end,"<br />";
	return ($end - $start + 1);
}

// 5 6 7 8             1 2 3 4

// test
$test = array(2,6,4,8,10,9,15);
echo shortest($test);