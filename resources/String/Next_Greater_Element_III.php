<?php
function smallest_greater($str){
	
	//echo $str;
	$res = -1;
	
	//$strarr = explode('', $str); // This cannot achieve
	$strarr = array();
	$rev = array();
	while($str >= 1){
		//echo "$str || $str%10";
		$rev[]=$str%10;
		$str = $str/10;
	}
	krsort($rev);
	foreach($rev as $v){
		$strarr[] = $v;
	}
	
	//print_r($strarr);
	$pos = -1; // initialization
	$to_change = -1; // initialization
	for($i = count($strarr)-1; $i>=0; $i--){
		if($strarr[$i]>$strarr[$i-1]){
			//echo '$i=>',$i,"<br />";
			$pos = $i;
			$to_change = $i-1;
			break;
		}
	}
	//echo '$pos=',$pos, " and ", '$to_change=',$to_change, "<br />";
	$smallest = $strarr[$pos]; // initialization
	$s_pos = -1; // initialization
	for($i = $pos; $i<count($strarr); $i++){
		// first number to check
		if($smallest>$strarr[$i]){
			$s_pos = $i;
		}
	}
	
	$smallest = $strarr[$to_change];
	$strarr[$to_change] = $strarr[$s_pos];
	$strarr[$s_pos] = $smallest;
	if($pos==-1||$to_change==-1){
		//echo "Oops!";
		return $res;
	}
	$subarr = array_slice($strarr, $pos);
	//print_r($subarr);
	//echo "pay attention here.<br />";
	sort($subarr);
	for($i = $pos, $j = 0; $i<count($strarr);$i++, $j++){
		$strarr[$i] = $subarr[$j];
	}
	//print_r($subarr);
	$res = implode('',$strarr);
	return $res;
}

// test
$test = 534976;
echo $test,"<br />";
$test = smallest_greater($test);
echo $test;