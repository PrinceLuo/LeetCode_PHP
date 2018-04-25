<?php
/*
 * any array that needs to compare with itself,
 * use methods of array to calculate, stop using
 * loops to search and compare; if it needs to
 * check any duplicate, create a new array that
 * use the old value as new key, and the new values
 * as number
 */
function pairs($arr, $diff) {
	$count_pairs = 0;
	// $dup = array();
	// for($i = 0; $i<count($arr); $i++){
	// if($dup[$arr[$i]]!=true){
	// echo "now",$arr[$i];
	// reset($dup);
	// while(list($k,$v)=each($dup)){
	// echo "absolute",abs($k-$arr[$i]);
	// if(abs($k-$arr[$i])==$diff){
	// echo "<br />",$k, $arr[$i],"<br />";
	// $count_pairs++;
	// }
	// }
	// }
	// $dup[$arr[$i]]=true;
	// print_r($dup);
	// echo "<br />";
	// }
	
	$dup = array ();
	foreach ( $arr as $v ) {
		$dup [$v] += 1;
	}
	foreach ( $dup as $k => $v ) {
		if ($diff == 0) {
			
			if ($v >= 2)
				$count_pairs ++;
		} else {
			
			if (array_key_exists ( $k + $diff, $dup ))
				$count_pairs ++;
		}
	}
	return $count_pairs;
}

// test arr
$arr = array (
		1,
		2,
		3,
		4,
		5 
);
echo pairs ( $arr, 1 );