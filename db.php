
<?php


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "data");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 
 
 
         // Attempt select query execution
          $sql = "SELECT knalvuurwerk FROM data";
          if($result = mysqli_query($link, $sql)){
          if(mysqli_num_rows($result) > 0){
         echo "<table>";
         echo "<tr>";
         echo "<th>Naam</th>";
         echo "<th>Prijs</th>";
         echo "<th>Categorie</th>";
         echo "<th>Url</th>";
		 echo "</tr>";
		  while($row = mysqli_fetch_array($result)){

         echo '<div class="product1">';
         echo "<tr>";
		 echo "<td>" . $row['Naam'] . "</td>";
         echo "<td>" . $row['Prijs'] . "</td>";
         echo "<td>" . $row['Categorie'] . "</td>";
		 //echo "<td>" . $row['Url'] . "</td>";
         echo "<td><img class='superkanonslag' src=".$row['Url']."></td>";
         echo "</tr>";
         echo "</div>";
        }
         echo "</table>";
		
		
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>

