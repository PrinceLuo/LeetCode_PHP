<?php
function ran_note($str, $mag){
	
	$res = true;
	$strarr = array();
	for($i = 0; $i<strlen($mag); $i++){
		//echo substr($mag, 0, 1);
		$c = substr($mag, $i, 1);
		echo '$c=>',$c;
		$strarr[$c]+=1;	
	}
	print_r($strarr);
	echo "<br />";
	for($i = 0; $i<strlen($str); $i++){
		$c = substr($str, $i, 1);
		$strarr[$c]-=1;
		if($strarr[$c]<0){
			echo $i,"im here";
			$res = false;
			break;
		}
	}
	return $res;
}

// test
if(ran_note('aa', 'aab')){
	echo 'true';
}else{
	echo 'false';
}