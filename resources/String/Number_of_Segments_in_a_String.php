<?php
function segment($str){
	$arr = explode(" ",$str);
	$res = count($arr);
	return $res;
}

// test
$test = "Hello, my name is John";
echo segment($test);