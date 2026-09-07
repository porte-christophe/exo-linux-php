<?php
	$mot = 'ordinateur';
	$lettre = 'r';
	$res =[];

	$motMinus = strtolower($mot);

	for ($i=0; $i < strlen($motMinus) ; $i++) { 
		if ($lettre == substr($motMinus, $i,1)) {
			array_push($res, $i+1);
		}
	}
	if ($res != []) {
		echo "position(s) " . implode(" et ", $res) . " dans le mot: " . $mot;
	} else {
		echo "lettre non presente";
	}
	
?>