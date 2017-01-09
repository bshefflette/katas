<?php  
//middlechar kata
function middlechar($test){
	$a = strlen($test);
	$c = ($a % 2 === 1) ? "odd" : "even";
	if($c === "odd"){
		$d = ($a+1)/2;
		$e = $test[$d-1];
		return $e;
	} else{
		$d = $a/2;
		$e = $test[$d-1] . $test[$d];
		return $e;
	}
}
//echo middlechar("Pooper");
echo middlechar("starter");
echo middlechar("starwars");
?>