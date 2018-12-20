<?php
function PrintTafel(int $tafelnr){
	
for($tafel=1;$tafel<=10 ;$tafel++){
		  echo "<br>$tafelnr x$tafel= ".($tafelnr*$tafel);
  }echo "<br>";
}

// hoofdprogramma

// Initialisatie

// rest het programma
PrintTafel(12);
echo"klaar <br>";


for ($tel=1;$tel<=10;$tel++){
PrintTafel($tel);
}


?>
