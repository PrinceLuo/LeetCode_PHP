<?php
function attendence($str){
	if(substr_count($str,"A")>1||substr_count($str, "LLL")>0){
		return false;
	}else{
		return true;
	}
}

// initialize a string
$str = "PLLALLLLL";
echo attendence($str)?"true":"false";