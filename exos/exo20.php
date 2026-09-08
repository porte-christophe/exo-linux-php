<?php
	$grille = [['X','O','X'],[' ','X',' '],['O','O','O']];
	$cases = [];
	foreach ($grille as $line) {
		foreach ($line as $col) {
			$cases[] = $col;
		}
	}
	
	if ($cases[0] == $cases[1] && $cases[1] == $cases[2]) {
		echo $cases[0] . " gagne à la ligne 1";
	} elseif ($cases[3] == $cases[4] && $cases[4] == $cases[5]) {
		echo $cases[3] . " gagne à la ligne 2";
	} elseif ($cases[6] == $cases[7] && $cases[7] == $cases[8]) {
		echo $cases[6] . " gagne à la ligne 3";
	} elseif ($cases[0] == $cases[3] && $cases[3] == $cases[6]) {
		echo $cases[0] . " gagne à la colonne 1";
	} elseif ($cases[1] == $cases[4] && $cases[4] == $cases[7]) {
		echo $cases[1] . " gagne à la colonne 2";
	} elseif ($cases[2] == $cases[5] && $cases[5] == $cases[8]) {
		echo $cases[2] . " gagne à la colonne 3";
	} elseif ($cases[0] == $cases[4] && $cases[4] == $cases[8]) {
		echo $cases[0] . " gagne à la diagonale \\";
	} elseif ($cases[2] == $cases[4] && $cases[4] == $cases[6]) {
		echo $cases[2] . " gagne à la diagonale /";
	} else {
		echo "Perdu";
	}
?>