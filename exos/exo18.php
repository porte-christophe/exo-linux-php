<?php
	$de1 = rand(1, 6);
	$de2 = rand(1, 6);

	$total = $de1 + $de2;

	if ($total == 7 || $total == 11) {
		echo $total;
		echo "Gagné!";
	} else {
		echo $total;
		echo "Perdu";
	}
?>