<?php
function som($getal1, $getal2){
	$som = $getal1 + $getal2;
	
	return $som;
}
function vrm($getal1, $getal2){
	$uit = $getal1 * $getal2;
	return $uit;
}

//hoofdprogramma
$getal1 = 10;
$getal2 = 20;
$getal3 = 100;

$som = $getal1 + $getal2;
echo $som;
echo "<br>Uitkomst Som: " . Som ($getal1, $getal3);
echo "<br>Uitkomst Vrm: " . Vrm($getal1, $getal3);

?>
