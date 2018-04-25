<?php
function reshape(array $arr, int $r, int $c){

// 	$arr = [
// 			[],
// 			[],
// 			...,
// 			[]
// 	]

	$row = count($arr);
	$colume = count($arr[0]);
	if($row*$colume != $r*$c){
		return $arr;
	}
	$res = array();
// 	$row = 0;
// 	$colume = 0;
// 	$res = array();
// 	while(list(,$subarr)=each($arr)){
// 		while(list(,$mem)=each($subarr)){
// 			$subres[] = $mem;
// 			$colume++;
// 			if($colume == $c){
// 				$res[] = $subres;
// 				$row++;
// 				$subres = array();
// 				$colume = 0;
// 			}
// 		}
// 	}
// 	if($colume == 0) $colume = $c;
// 	if($row*$colume != $r*$c){
// 		return $arr;
// 	}else{
// 		return $res;
// 	}
	for($i=0; $i<$r*$c;$i++){
		$res[(int)$i/$c][(int)$i%$c] = $arr[(int)$i/$colume][(int)$i%$colume];
	}
	return $res;
}

$test = array(
		['a','b','c','d','e'],
		['f','g','h','i','j']
); // the test array, fill in by hand
print_r(reshape($test,3,4));