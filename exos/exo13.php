<?php
	$nombres = [1, 3, 5, 7, 9];
	$doubles = [];

	foreach ($nombres as $nombre) {
		$double = $nombre*2;
		array_push($doubles, $double); //autre syntaxe $doubles[] = $nombre*2;
	}
	print_r($doubles);
?>