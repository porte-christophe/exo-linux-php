<?php
	$nombres = [10, 42, 5, 8, 42, 19];
	$recherche = 42;

	if (in_array($recherche, $nombres)) {
		$res = array_keys($nombres,$recherche);
		echo "La valeur rechercher apparait aux index " . implode(" et ", $res) . " du tableau";
	} else {
		echo "La valeur rechercher n'est pas dans le tableau";
	}
?>