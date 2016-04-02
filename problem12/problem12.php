<?php
function getTriNumber($mynum){
	$retVal=0;
	for ($i=0; $i < $mynum; $i++) { 
		$retVal=$retVal+$i+1;
	}
	return $retVal;
}
function getFactor($mynum2){
	$myArray=array();
	for ($i=0; $i < $mynum2; $i++) { 
		if ($mynum2 % ($i+1) == 0) {
			array_push($myArray, $i+1);
		}
	}
	return $myArray;
}
?>