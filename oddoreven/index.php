<?php 

// if else method

function even_or_odd($n) {
	$new_num = $n % 2;
	if($new_num === 0){
		return "Even";
	} else {
		return "Odd";
	}
}
echo even_or_odd(0);

//or switch method

function even_or_odd($n){
	switch($new_num = $n %2){
		case 0:
		return "Even";
		break;
		default:
		return "Odd";
	}
}
echo even_or_odd(0);

// shorthand ternary method

function even_or_odd($n){
	$o = $n % 2;
	return ($o == 0 ? "Even" : "Odd");
}
even_or_odd(0);
?>