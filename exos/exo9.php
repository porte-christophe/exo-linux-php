<?php
	$phrase = 'Bonjour tout le monde';
	$voyelles = ["a","e","i","o","u","y"];
	$phraseArray = str_split(strtolower($phrase));
	$count=0;
	foreach ($phraseArray as $letter) {
		if (in_array($letter, $voyelles)) {
			$count +=1;
		}
	}
	echo $count;

?>