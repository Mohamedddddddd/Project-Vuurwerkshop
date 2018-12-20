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
<h1>De ingevoerde gegevens</h1>
<?php



// Resultaat ophalen uit het formulier.
$naam = $_POST["naam"];
$email = $_POST["email"];
$opmerkingen = $_POST["opmerkingen"];
$vragen = $_POST["vragen"];
$man = $_POST["man"];
$vrouw = $_POST["vrouw"];
$toevoegen = $_POST["toevoegen"];




// Waarde op het scherm schrijven..
echo "<b>Naam:</b> $naam</br>";
echo "<b>E-mail:</b> $email</br>";
echo "<b>Opmerkingen: </b> $opmerkingen</br>";
echo "<b>vragen: </b> $vragen</br>";
echo "<b>man: </b> $man</br>";
echo "<b>vrouw: </b> $vrouw</br>";
echo "<b>toevoegen:</b> $toevoegen</br>";

// variabele met waarde uit het veld halen en bij geen waarde op null zetten.
$onder18 = (isset($_POST['onder18']) ? $_POST['onder18'] : null);

// toon de waarde
echo "<h2>boven18: $boven18</h2>";


?>
</body>
</html> 