<?php

require_once("db_config.php");

$prix=-1;

if(isset($_GET['prix'])) $prix = $_GET['prix'];

echo 
"<!DOCTYPE html>
<html>
<head>
   <meta charset=\"utf-8\">
   <title>Liste des prix</title>
   <style>
     table {border: 1px solid black; border-collapse: collapse;}
     td,th {border: 1px solid black;}
   </style>
</head>
<body>";

echo 
"
<form method=\"get\" action=\"\">
<p>Prix: <input type = \"number\" name=\"prix\" value = \"".($prix>0?$prix:"")."\" /></p>
<p><input type=\"submit\" value=\"Afficher\" /></p>
</form>
";

if ($prix==-1) echo "<h1>Liste de tous les produits :</h1>";
else echo "<h1>Liste des produits ayant le prix inferieur à $prix:</h1>";

echo 
"<table>
 <thead>
   <tr><th>Nom</th><th>Prix</th></tr>
 </thead>
 <tbody>
";


if($prix==-1) {
  $SQL = "SELECT * FROM produits ";
  $sth = $db->prepare($SQL);
  $res = $sth->execute([]);
}
else {
  $SQL = "SELECT * FROM produits WHERE prix < :prix";
  $sth = $db->prepare($SQL);
  $res = $sth->execute([':prix' =>$prix]);

}


if ($res){

	
  while ($row = $sth->fetch()){ 
    	echo "    <tr><td>$row[nom]</td><td>$row[prix]</td></tr>\n";
  }  

} else {
	echo $db->errorInfo()[2];
}

$db=null;

echo "</tbody></table>";

echo "<p><a href=\"ajout_produit.php\">Ajouter un produit</a></p>";

echo "</body></html>";

?>