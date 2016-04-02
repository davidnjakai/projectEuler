<?php
function getTriNumber($mynum){
	$retVal=0;
	for ($i=0; $i < $mynum; $i++) { 
		$retVal=$retVal+$i+1;
	}
	return $retVal;
}
?>