<!DOCTYPE html>
<html>
<head>
<style>
body{background-color: aqua;}
input:required:focus {
  border: 1px solid red;
  outline: none;
</style>
    <title>extra site</title>
</head>
<body>

<h1>De ingevoerde gegevens</h1>
<?php



// Resultaat ophalen uit het formulier.
$naam = $_POST["naam"];
$email = $_POST["email"];
$opmerkingen = $_POST["opmerkingen"];

// Waarde op het scherm schrijven..

echo "<b>naam:</b> $naam</br>";
echo "<b>email:</b> $email</br>";
echo "<b>opmerkingen: </b> $opmerkingen</br>";




?>
</body>
</html> 