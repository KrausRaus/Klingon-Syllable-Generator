<?php

$sounds = array(" " , "p", "t", "q", "'", "b", "D", "tlh", "ch", "Q", "j", "S", "H", "v", "gh", "m", "n", "ng", "w", "r", "l", "y", "w'", "y'", "rgh", "a", "e", "I", "o", "u");

for ($i = 1; $i < 22; $i++) {
	
	for ($j = 25; $j < 30; $j++) {
		
		for ($k = 0; $k < 25; $k++) {
			
			echo ($syl = $sounds[$i] . $sounds[$j] . $sounds[$k] . "<br>") && (strpos($syl, "ow") || strpos($syl, "uw")) ? "" : $syl;
			
		} //k-loop
		
	} //j-loop
	
} //i-loop