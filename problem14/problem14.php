<?php
function nextNum($num){
	if ($num % 2 == 0) {
		return $num / 2;
	}
	else{
		return ($num * 3)+1;
	}
}
function seriesLengthArray($mynum){
	$seriesArray=array();
	array_push($seriesArray,$mynum);
	while($mynum!=1){
		$mynum=nextNum($mynum);
		array_push($seriesArray,$mynum);
	}
	return $seriesArray;
}
/*for ($i=0; $i < 1000000; $i++) { 
	$counter=0;
	$checker=$i;
	while($checker != 1){
		$checker=nextNum($checker);
		$counter++;
	}
}*/
//echo $counter;
?>
