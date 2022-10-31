<?php

require_once("db_config.php");

echo 
"<!DOCTYPE html>
<html>
<head>
   <meta charset=\"utf-8\">
   <title>Liste des noms</title>
   <style>
     table {border: 1px solid black; border-collapse: collapse;}
     td,th {border: 1px solid black;}
   </style>
</head>
<body>";

echo "<h1>Liste des noms</h1>";
echo 
"<table>
 <thead>
   <tr><th>Nom</th><th>Prénom</th><th>Age</th></tr>
 </thead>
 <tbody>
";


$SQL = "SELECT * FROM noms";

if ($res = mysqli_query($conn,$SQL)){

	
  while ($row = mysqli_fetch_array($res)){ 
    	echo "    <tr><td>$row[nom]</td><td>$row[prenom]</td><td>$row[age]</td><td><a href=\"supprimer_nom.php?id=$row[id]\">Supprimer</a></td><td><a href=\"modifier_nom.php?id=$row[id]\">Modifier</a></td></tr>\n";
  }  

} else {
	echo mysqli_error($conn);
}

mysqli_close($conn);

echo "</tbody></table>";

echo "<p><a href=\"ajout_nom.php\">Ajouter un nom</a></p>";

echo "</body></html>";

?>