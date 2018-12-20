<?php
function Somlijst(array $Somlijst) :int {
	$som = 0;
	$aantal = count($Somlijst);
	for($t=0; $t < $aantal; $t++){
		$som = $som + $Somlijst[$t];	
}

return $som;

}
function Som2 (array $Somlijst, int &$uitkomst, float &$uit){
	
	$uitkomst = SomLijst($Somlijst); 
	$uit = $uitkomst / 0.12; 
			
	}



	?>