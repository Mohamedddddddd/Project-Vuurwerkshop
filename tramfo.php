<!DOCTYPE html>
<html>
<head>
<style>
body{background-color: aqua;}
input:required:focus {
  border: 1px solid red;
  outline: none;
</style>
    <title>Tram Enquete Antwoorden</title>
</head>
<body>
<h1>Antwoorden Enquete</h1>
<?php


// Resultaat ophalen uit het formulier.
$Geluidoverlast = $_POST['Geluidoverlast'];
$Zitruimte = $_POST["Zitruimte"];
$Timing = $_POST["Timing"];
$Klantvriendelijkheid = $_POST["Klantvriendelijkheid"];


// Waarde op het scherm schrijven..
echo "<b>Geluidoverlast:</b> $Geluidoverlast</br>";
echo "<b>Zitruimte:</b> $Zitruimte</br>";
echo "<b>Timing:</b> $Timing</br>";
echo "<b>Klantvriendelijkheid:</b> $Klantvriendelijkheid</br>";


?>
</body>
</html> 