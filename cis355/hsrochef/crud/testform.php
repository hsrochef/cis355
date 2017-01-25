<?php

$digits = $_GET['number'];

	echo "</br>";
	$sum = 0;
	for($i = 0; $i < strlen($digits); $i++){
		$sum = ($sum + $digits[$i]);
	}
	echo "</br>";
	echo $sum;





?>