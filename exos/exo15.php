<?php
	$valeurs = [8, 3, 5, 1, 9];
	$min = 0;

	for ($i=0; $i < count($valeurs) ; $i++) { 
		if ($i == 0) {
			$min = $valeurs[$i];
		} elseif ($valeurs[$i]<$min) {
			$min = $valeurs[$i];
		}
	}

	print_r($min);
?>