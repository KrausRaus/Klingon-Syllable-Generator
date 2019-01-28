<?php

//All the possible onsets, nuclei, and codas. To produce the CV syllables without a separate loop, we add the empty string to the list of codas. 
		
		$onsets = array("p", "t", "q", "'", "b", "D", "tlh", "ch", "Q", "j", "S", "H", "v", "gh", "m", "n", "ng", "w", "r", "l", "y");

		$nuclei = array("a", "e", "I", "o", "u");

		$codas = array(" " , "p", "t", "q", "'", "b", "D", "tlh", "ch", "Q", "j", "S", "H", "v", "gh", "m", "n", "ng", "w", "r", "l", "y", "w'", "y'", "rgh");
		
		
	//We loop through all the logical possibilities, and if the illicit sequences /ow/ or /uw/ would happen, they don't. 

		for ($i = 0; $i < 21; $i++) {
			
			for($j = 0; $j < 5; $j++) {
				
				for($k = 0; $k < 25; $k++) {
					
					//echo ($nuclei[$j] == "o" || $nuclei[$j] == "u") && strrpos($codas[$k], "w") === 0 ? "" : $onsets[$i] . $nuclei[$j] . $codas[$k] . "<br>";
					
					//echo in_array($nuclei[$j], ["o", "u"]) && strpos($codas[$k], "w") > -1 ? "" : $onsets[$i] . $nuclei[$j] . $codas[$k] . "<br>";
					
					echo ($syl = $onsets[$i] . $nuclei[$j] . $codas[$k] . "<br>") && (strpos($syl, "ow") || strpos($syl, "uw")) ? "" : $syl;
					
				} //k-loop
				
			} //j-loop
			
		} //i-loop