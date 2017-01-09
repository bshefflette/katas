<?php


function findNeedle($haystack) {
    // returns value in array where the 'needle' is found.
    $i = 0;
    foreach($haystack as $key){
    $key === "needle" ? $b = "found the needle at position $i" : null;
    $i++;
    }
   return $b;
}


function findNeedle($haystack) {
    // returns an array of what I thought the assignment was ((1,2,3),1);
    $stacka = array();
    $stackb;
    $i = 1;
    foreach($haystack as $key){
    $key === "needle" ? array_push($stacka, $key) && ($stackb = "found the needle at position $i") : array_push($stacka, $key);
    $i++;
    }
   return $bigarray = array($stacka, $stackb);
}
/*function traverseArray($array)
{
    // Loops through each element. If element again is array, function is recalled. If not, result is echoed.
    foreach ($array as $key => $value)
    {
      
        if (is_array($value))
        {
            traverseArray($value);
        }
        else
        {
            echo $value 
      
            ;
        }
    }
}*/
// echo list of numbers in multidimensional array

$a = array(1,2,3,"pop","needle");
//traverseArray(findNeedle($a));
print_r(findNeedle($a));




/*
function findNeedle($haystack) {
    // your code here
    $i = 0;
    foreach($haystack as $key){
    $key === "needle" ? $key = "found the needle at position $i" : null;
    $i++;
    }
   return $bigarray = array($haystack, $key);
   foreach(findNeedle($a) as $d => $e){
	if(!is_array($d)){
	return $e;
	} else {
	foreach($d as $f => $g){
	return $g;
	}
	}

}


}


/*for($b = 0; $b < sizeof(findNeedle($a)); $b++){
	echo 1;
}
*/


?>