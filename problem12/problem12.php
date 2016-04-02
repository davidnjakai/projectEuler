<?php
function getTriNumber($mynum){
	$retVal=0;
	for ($i=0; $i < $mynum; $i++) { 
		$retVal=$retVal+$i+1;
	}
	return $retVal;
	echo "trinumber is: ".$retVal."<br>";
}
function getFactors($mynum2){
	$myArray=array();
	for ($i=0; $i < sqrt($mynum2); $i++) { 
		if ($mynum2 % ($i+1) == 0) {
			array_push($myArray, $i+1);
			array_push($myArray, $mynum2 / ($i+1));
		}
	}
	return $myArray;
	echo "array returned"."<br>";
}
for ($i=1; $i > 0; $i++) { 
	$myTriNo=getTriNumber($i);
	$triFactors=getFactors($myTriNo);
	if(sizeof($triFactors) > 500){
		echo $myTriNo."<br>";
	}
}
?>