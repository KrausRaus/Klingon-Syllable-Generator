<?php
$sounds = array("p", "t", "q", "'", "b", "D", "tlh", "ch", "Q", "j", "S", "H", "v", "gh", "m", "n", "ng", "w", "r", "l", "y", "a", "e", "I", "o", "u", " " , "p", "t", "q", "'", "b", "D", "tlh", "ch", "Q", "j", "S", "H", "v", "gh", "m", "n", "ng", "w", "r", "l", "y", "w'", "y'", "rgh");
for ($i=0; $i < 21*5*25; $i++) {
	echo ($syl = $sounds[$i%21] . $sounds[21+floor($i/21)%5] . $sounds[21+5+floor($i/(21*5))%25] . "<br>") && (strpos($syl, "ow") || strpos($syl, "uw")) ? "" : $syl;
}