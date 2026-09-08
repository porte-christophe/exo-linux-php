<?php
	$a = 12;
	$b = 4;
	$operations = ['+', '-', '\*', '/'];
	
	foreach ($operations as $symbol) {
		switch ($symbol) {
			case '+':
				echo $a . " + " . $b . " = ". $a+$b . "<br>";
				break;
			
			case '-':
				echo $a . " - " . $b . " = ". $a-$b . "<br>";
				break;
			
			case '\*':
				echo $a . " \* " . $b . " = ". $a*$b . "<br>";
				break;
			
			case '/':
				if ($b == 0) {
					echo "division par zero impossible";
				} else {
					echo $a . " / " . $b . " = ". $a/$b . "<br>";
				}
				break;
			
			
		}
	}
?>