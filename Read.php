<?php
$myfile = fopen("logg.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("logg.txt"));
fclose($myfile);
?>