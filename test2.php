<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>  

<div>
    <nav>
      <button><a href="test2.php">Home</a></button>
      <button><a href="contact.php">Contact</a></button>
    </nav>
</div>

<div>
  <?php include 'tabel.php';?>  
</div>



<div class="hoofd">
  <h2>Mustafa Bolat</h2>
  <h2><?php include'bestand.php'; ?></h2>
</div>


<div class="form">
    <h2>Afspraak toevoegen</h2>
    <form method="post" action="sprint.php">  
      Datum: <input type="text" name="datum">
      <br><br>
      
      Naam: <input type="text" name="afspraak">
      <br><br>
      Afspraak: <input type="text" name="tijd">
      <br><br>
     
      <input type="submit" ="submit" name="Invoeren" value="Invoeren">  
	 
    </form>
	

</div>

</body>
</html>