<?php
// Decipher this!_
// You are given several secret messages you need to decipher. Here are the conditions:

// The first letter corresponds to ASCII character code (case sensitive)
// The second letter needs to be switched to the last letter
// The last letter needs to be switched to the second letter
// If it only has one letter, it will be unchanged
// If it only has two letters, you will just need to convert the ASCII character code to a letter
// Keepin' it simple -- there are no special characters

// Example:
// decipherThis('72olle 103doo 100ya'); // 'Hello good day'
// decipherThis('82yade 115te 103o'); // 'Ready set go'
$string1 = "72olle 103doo 100ya";
// $string2 = "82yade 115te 103o";
// $teststring = "72olle";
function decipherThis($str){
	
	$newstring = "";
	$newarray = explode(" ", $str);
	foreach($newarray as $key => $string){
			//step1 - takes numbers from a string and converts to just a string of the numbers, works good
		preg_match_all('!\d!', $string, $matches);
		$ascnum = implode($matches[0]);
		$part1 = chr(intval($ascnum));
			//step2 - need to finish swapping pos1 with posx where x=strlen($cc)
		$letters = preg_split('!\d!', $string);
		$tempcode = $letters[count($letters)-1];
		
		$part2 = swapLetters($tempcode);
			//step3 - need to combine step 1 and 2
		$newstring .= $part1 . $part2 . " ";
	}
	return trim($newstring);

}
function swapLetters($tempcode){
			if(empty($tempcode)){
				return "";
			}elseif(strlen($tempcode)===1){
				return $tempcode;
			} else{
				$tmplen = strlen($tempcode);
				$tmp1 = $tempcode[0];
				$tmp2 = $tempcode[strlen($tempcode)-1];
				if($tmplen===2){
					return $tempcode = $tmp2 . $tmp1;
				} else{
					$part2 = $tmp2;
					for($i = 1; $i < $tmplen-1; $i++){
						$part2 .= $tempcode[$i];
					}
					return $part2 .= $tmp1;
				}
			}
		}
var_dump(decipherThis($string1));

//step1 - takes numbers from a string and converts to just a string of the numbers, works good
// $string = "72olle";
// preg_match_all('!\d!', $string, $matches);
// $ascnum = implode($matches[0]);
// $part1 = chr(intval($ascnum));
// //step2 - need to finish swapping pos1 with posx where x=strlen($cc)
// $letters = preg_split('!\d!', $string);
// $tempcode = $letters[count($letters)-1];
// function swapLetters($tempcode){
// 	if(strlen($tempcode)===1){
// 		return $tempcode;
// 	} else{
// 		$tmplen = strlen($tempcode);
// 		$tmp1 = $tempcode[0];
// 		$tmp2 = $tempcode[strlen($tempcode)-1];
// 		if($tmplen===2){
// 			return $tempcode = $tmp2 + $tmp1;
// 		} else{
// 			$part2 = $tmp2;
// 			for($i = 1; $i < $tmplen-1; $i++){
// 				$part2 .= $tempcode[$i];
// 			}
// 			return $part2 .= $tmp1;
// 		}
// 	}
// }
// $part2 = swapLetters($tempcode);
// //step3
// //need to combine step 1 and 2
// echo $part1 . $part2;





?>