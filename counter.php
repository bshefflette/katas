<?php
function counter_effect($hit_count) {
  // create big array
	$countarray = array();
	$strnum_array = str_split($hit_count);
  //print_r($strnum_array);
	foreach( $strnum_array as &$i ){
		$i = intval($i);

		// loops through numbers in array to add 0 through $i into an array 
		for($j = 0;$j < $i+1; $j++){
			if($j==0){
				$jarray = array();
			}
			array_push($jarray, $j);
		}
		$iarray = $jarray;

		array_push($countarray, $iarray);
	}
	return $countarray;
}
//counter_effect(1234); produces 01012012301234 or ([0,1],[0,1,2],[0,1,2,3],[0,1,2,3,4]);

function traverseArray($array)
{
    // Loops through each element. If element again is array, function is recalled. If not, result is echoed.
    echo "<br />\n";
    foreach ($array as $key => $value)
    {
    	
        if (is_array($value))
        {
            traverseArray($value);
        }
        else
        {
            echo $value 
            //. "<br />\n"
            ;
        }
    }
}
// echo list of numbers in multidimensional array
traverseArray(counter_effect(436000));
?>