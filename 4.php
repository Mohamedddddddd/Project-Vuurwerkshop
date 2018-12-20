<html>
<head>
<style>
table, th, td {
   border: 1px solid black;
}
table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}
table {
    width: 80%;
}

th {
    height: 50px;
}

 </style>
</head>
<body>


<div id="form">
<form action="Contactwigmans.php" method="post">


<p>Voeg uw afspraak hier toe</p>
<p><textarea rows="7" cols="60" id="toevoegen" name="toevoegen" placeholder="Voeg een afspraak toe.">
</textarea></p>
<input type="submit" value="Verzenden met submit"></br></br>

<h2> De gemaakte afspraken.</h2>


</body
<br>
<br>



<?php

echo "<table>";
$file = fopen('voorbeeld.csv', 'r');
while(!feof($file)) {

$line = fgetcsv($file, 1000, ",");

echo "<tr><td>$line[0]</td><td>$line[1]</td><td>$line[2]</td></tr>"; 


//echo $line [0]; 
//echo $line [1]; 
//echo $line [2];



																																																	
  //$line is an array of the csv elements
}
fclose($file);
echo "</table>";


?>
</html>


