<?php
/*
 * {a1,a2,..,an,b1,b2,...,bn}, for i, bi>=ai
 * To prove Sn=a1+a2+...an 
 * Say:
 * Sa=a1+a2+...+an+b1+b2+..bn (const.)
 * Diff=sum(|bi-ai|)=>(b1+b2+..bn)-(a1+a2+...+an)
 * Sa=Diff+2Sn
 * Sn=(Sa-Diff)/2
 * To make Diff as small as possible
 */

//input a 2n integer array
function parttition($arr){
	sort($arr);
	//print_r($arr);
	$res = array();
	$sum = 0;
	for($i = 0; $i<count($arr)-1; $i=$i+2){
		echo $arr[$i],"<br />";
		$resarr = array();
		$resarr[] = $arr[$i];
		$resarr[] = $arr[$i+1];
		$res[] = $resarr;
		$sum+=$arr[$i];
	}
	return array($sum,$res);
}

$arr = [-1,-3,-6,0,9,10,23,1];
$res = parttition($arr);
echo $res[0];
var_export($res[1]);