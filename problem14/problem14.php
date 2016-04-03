<?php
function nextNum($num){
	if ($num % 2 == 0) {
		return $num / 2;
	}
	else{
		return ($num * 3)+1;
	}
}
for ($i=0; $i < 1000000; $i++) { 
	$counter=0;
	$checker=$i;
	while($checker != 1){
		$checker=nextNum($checker);
		$counter++;
	}
}
echo $counter;
?>