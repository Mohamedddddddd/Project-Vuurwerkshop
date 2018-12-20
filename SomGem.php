<?php
function Som(array $lijst){
	$som=0;
	$aantal= count ($lijst);
	for ($t=0;$t< $aantal; $t++){
		$som = $som + $lijst[$t];
	}
	} return $som;
	
$cijfers= array(1,2,3,4);
Som ($cijfers);


