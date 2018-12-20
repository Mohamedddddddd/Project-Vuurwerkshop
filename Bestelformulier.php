<!DOCTYPE html>
<html>
<head>
<style>
body{background-color: aqua;}
input:required:focus {
  border: 1px solid red;
  outline: none;
</style>
    <title>Voorbeeld HTML formulier</title>
</head>
<body>
<A HREF="mailto: M_zeriouhi@hotmail.com">
M_zeriouhi@hotmail.com</A>

Verstuur via mail

<h1>De ingevoerde gegevens</h1>
<?php



// Resultaat ophalen uit het formulier.
$naam = $_POST["naam"];
$email = $_POST["email"];
$adres = $_POST["adres"];
$rekeningnummer = $_POST["rekeningnummer"];
$opmerkingen = $_POST["opmerkingen"];

// Waarde op het scherm schrijven..

echo "<b>naam:</b> $naam</br>";
echo "<b>email:</b> $email</br>";
echo "<b>adres: </b> $adres</br>";
echo "<b>rekeningnummer: </b> $rekeningnummer</br>";
echo "<b>opmerkingen: </b> $opmerkingen</br>";


// variabele met waarde uit het veld halen en bij geen waarde op null zetten.
//$27-30 = $_POST['27-30'];
$beoordeling = (isset($_POST['27-30']) ? $_POST['27-30'] : null);

// toon de waarde
echo "<h2>Maat: 27-30</h2>"; 
echo "<h2>Bestelling is verstuurd!</h2>";


?>
</body>
</html> 