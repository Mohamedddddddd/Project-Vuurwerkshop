<?php

$file = fopen('voorbeeld.csv', 'r');
while(!feof($file)) {

$line = fgetcsv($file, 1000, ",");

echo $line [0]; 
echo $line [1]; 
echo $line [2];
echo "<br>";


																																																	
  //$line is an array of the csv elements
}
fclose($file);


?>
</html>
   <table>
     <tr>
       <td>title</td>
       <td>price</td>
       <td>number</td>
     </tr>
      foreach ($line as $line) : 
     <tr>
       <td> echo $line[0]; </td>
       <td> echo $line[1]; </td>
       <td> echo $line[2]; </td>
     </tr>
      endforeach; 
   </table>


?>



</html>