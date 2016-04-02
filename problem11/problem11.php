<?php
$filehandle=fopen("numbers.txt", "rb");
//create 2d array from file
for ($x=0; $x < 20; $x++) { 
	$myarr[$x]=explode(" ", fgets($filehandle));
}
//invert myarr dimensions
for ($i=0; $i < 20; $i++) {
	for($j=0; $j < 20; $j++){ 
	$myarr2[$j][$i]=$myarr[$i][$j];
	}
}
$ans = 0;
//horizontal multiplications
for ($i=0; $i < 20; $i++) {
	for ($x=0; $x < 17; $x++) { 
		$check=$myarr[$i][$x] * $myarr[$i][$x+1] * $myarr[$i][$x+2] * $myarr[$i][$x+3];
		if ($check>$ans) {
			$ans=$check;
		}
	}
}
//vertical multiplications
for ($i=0; $i < 20; $i++) {
	for ($x=0; $x < 17; $x++) { 
		$check=$myarr2[$i][$x] * $myarr2[$i][$x+1] * $myarr2[$i][$x+2] * $myarr2[$i][$x+3];
		if ($check>$ans) {
			$ans=$check;
		}
	}
}
//diagonal multiplications
//"forward slash" diagonal
//echo $ans;
for ($i=0; $i < 17; $i++) { 
	for ($j=0; $j < 17; $j++) { 
		$check=$myarr2[$i][$j] * $myarr2[$i+1][$j+1] * $myarr2[$i+2][$j+2] * $myarr2[$i+3][$j+3];
		if ($check>$ans) {
			$ans=$check;
		}
	}
}
for ($i=0; $i < 17; $i++) { 
	for ($j=0; $j < 17; $j++) { 
		$check=$myarr[$i][$j+3] * $myarr[$i+1][$j+2] * $myarr[$i+2][$j+1] * $myarr[$i+3][$j];
		if($check>$ans){
			$ans=$check;
		}
	}
}
echo $ans;
?>
