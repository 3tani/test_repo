<?php

	$test = 2;
	$test += 1; 
	$test *= 2;
	
	$ary[] = 1;
	$ary[] = 2;
	$ary[] = 3;
	$ary[] = 4;
	$ary[] = 5;
	
	foreach($ary AS $key => $val){
		$result += $val;
	}
	
	$result += $test;
	
	echo $result;
?>
