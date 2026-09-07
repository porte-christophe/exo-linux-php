<?php
	$mot = 'radar';
	$motMinus = strtolower($mot);
	$motInverser = "";
	$motArray = str_split($motMinus);


	for ($i = count($motArray)-1; $i >= 0 ; $i--) { 
		$motInverser = $motInverser . $motArray[$i];
	}
	if ($motMinus == $motInverser) {
		echo "Palindrome";
	} else {
		echo "Pas palindrome";
	}
?>