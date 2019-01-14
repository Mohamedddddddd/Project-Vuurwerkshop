<html>
<head>

<?php

$link = mysqli_connect("localhost", "root", "", "project");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "SELECT * FROM `toon_producten`WHERE `Categorie` = 'Kindervuurwerk' ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
			
			
                echo "<th>Naam</th>";
				echo "<th>Prijs</th>";
				echo "<th>Categorie</th>";
				echo "<th>Voorraad</th>";
								

            echo "</tr>";
			
        while($row = mysqli_fetch_array($result)){
			
            echo "<tr>"; 
                echo "<td>" . $row['Naam'] . "</td>";
                echo "<td>" . $row['Prijs'] . "</td>";
                echo "<td>" . $row['categorie'] . "</td>";
				echo "<td>" . $row['Voorraad'] . "</td>";


				//echo "<td>" . $row['url'] . "</td>";
								echo "<td><img class='superkanonslag' src=".$row['Url_foto']."></td>";

				echo "</tr>";
				echo "</div>";
        }
        echo "</table>";
		
		        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
?>
 </div>
</head>
</html>