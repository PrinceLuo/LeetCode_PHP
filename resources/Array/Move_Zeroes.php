<?php
function mov($arr){
	
	echo "<br />";
	$c=count($arr);
	$i = 0;
	while($i<=$c){
		if($arr[$i]==0){
			//echo '$i=',$i,"<br />";
			$exchange = $arr[$i];
			array_splice($arr, $i, 1);
			$arr[]=$exchange;
			$c--;
			//echo '$c=',$c,"<br />";
			//print_r($arr);
			//echo "<br />";
		}
		$i++;
	}
	return $arr;
}

// test
$test=array(1,3,0,5,0,7,0,3,2,7);
print_r(mov($test));