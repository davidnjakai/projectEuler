$filehandle=fopen("numbers.txt", "rb");
for ($x=0; $x < 100; $x++) { 
	$myarr[$x]=fgets($filehandle));
}
echo $myar