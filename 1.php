
<?php

//this is column C
$col = 0;
$col1 = 1;
$col2 = 2;
$col3 = 3;


// open file
$file = fopen("voorbeeld.csv","r") or die("File kan niet worden geopend");
while(!feof(#file) 

{
	$Datum = fgetcsv($file);
	$Afspraak = fgetcsv($file);
	$Adres = fgetcsv($file);
}


fclose($file);

<table style="width=100%">
<tr>
<th>Datum</th>
<th>Afspraak</th>
<th>Adres</th>
</tr>
<tr>
<td>', $Datum,'</td>
<td>', $Afspraak,'</td>
<td>', $Adres,'</td>

</tr>
</table>';

?>

</html>