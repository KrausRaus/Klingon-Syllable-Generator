<?

//First, we lay out an array of every possible onset, nucleus(vowel), and coda.
//We'll loop through these arrays to create every logically possible combination.
//Then, at the end, we filter out those that contain "ow" or "uw", as those sequences are not allowed. 
//Also of note is that I'm using double quotes in PHP where I'd normally
//use single. This is because of the use of the single quote to represent
//the glottal stop. 

$onsets = array("p", "t", "q", "'", "b", "D", "tlh", "ch", "Q", "j", "S", "H", "v", "gh", "m", "n", "ng", "w", "r", "l", "y");

$vowels = array("a", "e", "I", "o", "u");

$codas = array("p", "t", "q", "'", "b", "D", "tlh", "ch", "Q", "j", "S", "H", "v", "gh", "m", "n", "ng", "w", "r", "l", "y", "w'", "y'", "rgh");


//This global counts up to make sure each created syllable is added as it's created. 

$syllableTicker = 0;


//This loop will create all our CV syllables. 
for ($i = 0; $i < 21; $i++) {
	for($j = 0; $j < 5; $j++) {
		$syllables[$syllableTicker] = $onsets[$i] . $vowels[$j];
		$syllableTicker++;
	}
}

$syllablesCount = count($syllables);

//This loop will take all the previously created syllables and add codas. 
for ($i = 0; $i < $syllablesCount; $i++) {
	for($j = 0; $j < 24; $j++) {
		$syllables[$syllableTicker] = $syllables[$i] . $codas[$j];
		$syllableTicker++;
	}
}

//Finally, we echo out all the syllables that are licit. 

$syllablesCount = count($syllables);

for ($i = 0; $i < $syllablesCount; $i++) {
	$check = substr($syllables[$i], 1, 2);
	$checkTwo = substr($syllables[$i], 2, 2);
	$checkThree = substr($syllables[$i], 3, 2);
	if ($check != "ow" && $check != "uw") {
		if ($checkTwo != "ow" && $checkTwo != "uw") {
			if ($checkThree != "ow" && $checkThree != "uw") {
				echo $syllables[$i] . "<br>"; 
			}
		}
	}
}

echo "oy" . "<br>";
echo "sto"  . "<br>";

?>