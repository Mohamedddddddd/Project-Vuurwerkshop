<?php

//this is column C
Array
(
[0] = Datum;
[1] = Afspraak;
[2] = Adres;
)
Array
(
[0] = Maandag;
[1] = Ortho;
[2] = Kerker;
) 
Array
(
[0] = Dinsdag;
[1] = Orbo;
[2] = Kerper;
) 
// open file
$file = fopen("help.csv","r") or die("File kan niet worden geopend");
while(! feof($file))

{
    echo fgetcsv($file)[0];
}
{
    echo fgetcsv($file)[1];
}
{
    echo fgetcsv($file)[2];
}

// close connection
fclose($file);

?>