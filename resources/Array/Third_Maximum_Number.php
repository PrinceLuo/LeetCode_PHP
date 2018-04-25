<?php
function third_max($arr){
	
	$first = null;
	$second = null;
	$third = null;
	foreach($arr as $num){
		if($num > $first){
			
			$third = $second;
			$second = $first;
			$first = $num;
			echo $first,">",$second,">",$third,"<br />";
		}
	}
	if($third!=null){
		return $third;
	}else{
		return $first;
	}
}

// test
$test = array(-1,-1,1,2,2,2);
echo third_max($test);