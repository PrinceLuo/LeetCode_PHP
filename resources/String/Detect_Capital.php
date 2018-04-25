<?php
function detect($str){
	
	$res = preg_match('/^[A-Z]+$|^[A-Z]?[a-z]+$/', $str,$arr);
	echo $res, "<br />";
	print_r($arr);
	return $res;
}

// test; 1 => true;
// 0 => false;
$str='asldjawieh';
echo (detect($str)==0?false:true);