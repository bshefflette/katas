
<?php
///check rots kata
function checkrots($s, $arr){

	$arraytocheck = str_split($s);
	$rotarray = array();
	foreach($arraytocheck as $w){
		 $temparray = array_shift($arraytocheck);
		 array_push($arraytocheck, $temparray);
		 $stringified = implode($arraytocheck);
		 array_push($rotarray, $stringified);	
	}

	$arraycheck = array_diff($rotarray, $arr);
	return ($arraycheck) ? false : true;

}

echo checkrots("poop", ["poop"]);

?>