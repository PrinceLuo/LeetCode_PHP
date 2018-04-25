<?php
/*
 * Given an array of integers, 1 ≤ a[i] ≤ n (n = size of array), some elements appear twice and others appear once.

Find all the elements that appear twice in this array.

Could you do it without extra space and in O(n) runtime?
 */
/*
 * key to solve this:
 * 1 ≤ a[i] ≤ n
 * which means the key and value could somehow exchange
 */
function find_dup($arr){
	$res = array();
	foreach($arr as $k=>$v){
		$index = abs($v);
		if($arr[$index-1]<0){
			$res[]=$v;
		}else{
			$arr[$index-1]=-$arr[$index-1];
		}
	}
	return $res;
}

// test
$arr = array(2,3,8,4,6,9,2,5,5);
print_r(find_dup($arr));
