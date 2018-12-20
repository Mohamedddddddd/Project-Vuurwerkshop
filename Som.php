<?php
function SomLijst(array $lijst){
	
	$som=0;
	$aantal= count ($lijst);
	for ($t=0; $t< $aantal; $t++){
		$som = $som + $lijst[$t]; 
	}
	return $som;
	}
function Som($getal1, $getal2){
	$som = $getal1 + $getal2;
	return $som;
}
function Vrm($getal1, $getal2){
$uit = $getal1 * $getal2;
return $uit;
}

	//hoofdprogramma
$cijfers= array(1,2,3);
echo SomLijst($cijfers);
?>

