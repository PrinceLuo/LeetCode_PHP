<?php
function reverse_word($str){
	
	$strarr = explode(" ", $str);
	for($i = 0; $i<count($strarr); $i++){
		$strarr[$i] = strrev($strarr[$i]);
	}
	return implode($strarr, " ");
}
$str = "Let's take LeetCode contest";
echo reverse_word($str);