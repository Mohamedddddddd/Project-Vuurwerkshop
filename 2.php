<?php

//this is column C
$col = 0;
$col1 = 1;
$col2 = 2;


// open file
$file = fopen("voorbeeld.csv","r") or die("File kan niet worden geopend");
while(! feof($file))

{
    echo fgetcsv($file)[$col];
}
{
    echo fgetcsv($file)[$col1];
}
{
    echo fgetcsv($file)[$col2];
}

// close connection
fclose($file);

?>