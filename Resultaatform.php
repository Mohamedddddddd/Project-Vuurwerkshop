<!DOCTYPE html>
<html>
<head>
<style>
body{background-color: aqua;}
input:required:focus {
  border: 1px solid red;
  outline: none;
</style>
    <title>Website</title>
</head>
<body>
<h1>Gegevens succesvol verzonden!</h1>
<?php



// Resultaat ophalen uit het formulier.
$naam = $_POST["naam"];
$email = $_POST["email"];
$opmerkingen = $_POST["opmerkingen"];

// Waarde op het scherm schrijven..
echo "<b>Naam:</b> $naam</br>";
echo "<b>E-mail:</b> $email</br>";
echo "<b>Opmerkingen: </b> $opmerkingen</br>";


?>
</body>
</html> 