<?php
	$limite = 50;
	$multipleDe = 7;

	$count = 0;

	for ($i=1; $i <=$limite ; $i++) { 
		if ($i%$multipleDe == 0) {
			$count += 1;
		}
	}


	echo "Il y a " . $count . " multiple de " . $multipleDe . " entre 1 et " . $limite;

?>