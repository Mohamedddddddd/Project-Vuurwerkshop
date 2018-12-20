<?php
$Namen = array("Jan", "Klaas", "Piet");
$Cijfers = array (8,9,10);

$som=0;
$tel=0;
for ($i=2;$i< count($Cijfers);$i++){
 $som = $som + $Cijfers[$i];
 $tel++;
}
$gem=$som/$tel;
echo $gem . "<br>";
echo $som . "<br>";

?>

