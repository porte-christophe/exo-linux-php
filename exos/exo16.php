<?php
	$mysteres = [38, 72, 15];
	$resultats = [];
	

	foreach ($mysteres as $nbMys) {
		$rand = rand(1, 100);
		$count = 1;
		while ($rand !=$nbMys) {
			$count += 1;
			$rand = rand(1, 100);
		}
		//$resultats[$nbMys] = $count; //version clé valeurs
		array_push($resultats, $count);
	}
	for ($i=0; $i < count($mysteres) ; $i++) { 
			echo "Nombre mystère " . $mysteres[$i] . " trouvé en " . $resultats[$i] . " essais<br>";
	}

	/*foreach($resultats as $key => $value){
		echo "Nombre mystère " . $key . " trouvé en " . $value . " essais<br>";
	}//version clé valeur*/
?>