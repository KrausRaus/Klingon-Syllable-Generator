<?

//Mad props to Dave Johnson for suggesting that the ow/uw filter be moved up to prevent those illicit syllables 
//from even being added to the $syllables array in the first place.

//First, we lay out an array of every possible onset, nucleus(vowel), and coda.
//We'll loop through these arrays to create every logically possible combination.
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
//Here we the current length of the array.
$syllablesCount = count($syllables);

//Now, we're going to create every logically possible combination of CV syllable and coda,
//but, we'll prevent any phonologically illicit syllables from being added to the $syllables array.
for ($i = 0; $i < $syllablesCount; $i++) {
	for ($j = 0; $j < 24; $j++) {
		$provisional = $syllables[$i] . $codas[$j];
		$check = substr($provisional, 1, 2);
		$checkTwo = substr($provisional, 2, 2);
		$checkThree = substr($provisional, 3, 2);
		if ($check != "ow" && $check != "uw") {
			if ($checkTwo != "ow" && $checkTwo != "uw") {
				if ($checkThree != "ow" && $checkThree != "uw") {
					$syllables[$syllableTicker] = $provisional;
					$syllableTicker++;
				}
			}
		}
	}
}

//And now we take the full length of the syllable array.
$syllablesCount = count($syllables);


//Last, we echo out all our generated syllables plus two others that cannot be generated from the arrays above,
//because they are special cases. Therefore, we simply echo them.
for ($i = 0; $i < $syllablesCount; $i++) {
	echo $syllables[$i] . "<br>"; 
}
echo "oy" . "<br>";
echo "sto"  . "<br>";
?>