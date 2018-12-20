<?php

$naam = "pietje";
$myfile = fopen ("log.txt", "a");
fwrite($myfile, $naam);
fwrite($myfile, $naam);
echo "klaar";
?>