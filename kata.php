<?php
$a = array(0,1,0,0,0,0);

function find_uniq($a) {
  // takes a list of numbers, sorts them, then checks first two values to see if they are equal, if they are, save the final value as the weird number, if they arent, then save the first value as the weird number. 
  $c = 0;
  sort($a);
  $b = count($a) - 1;
  if($a[0] === $a[1]){
    $c = $a[$b];
  } else{
    $c = $a[0];
  }
  return $c;
}

echo find_uniq($a);

?>