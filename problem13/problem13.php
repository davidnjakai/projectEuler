<?php
$filehandle=fopen("numbers.txt", "rb");
for ($x=0; $x < 100; $x++) { 
	$myarr[$x]=fgets($filehandle);
}
//invert myarr dimensions
for ($i=0; $i < 50; $i++) { 
	for ($j=0; $j < 100; $j++) { 
		$wrkingArr[$i][$j]=$myarr[$j][$i];
	}
}
function addColumns($somearray){
	$sum=0;
	$carry=0;
	$digits=array();
	for ($j=50; $j > 0; $j--) { 
		for ($i=0; $i < 100; $i++) { 
		$sum=$sum+$somearray[$j-1][$i];
		}
		$sum=$sum+$carry;
		$mod=$sum % 10;
		if ($sum > 10) {
			array_push($digits, $sum % 10);
			$carry=($sum-$mod)/10;
		}
		else{
			array_push($digits, $sum);
			$carry=0;
		}
		$sum=0;
	}
	array_push($digits, $carry);
	return $digits;
}
$theArray=addColumns($wrkingArr);
for ($i=0; $i < sizeof($theArray); $i++) { 
	echo $theArray[$i];
}

?>