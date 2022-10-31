<?php

echo 
"<!DOCTYPE html>
<html>
<head>
   <meta charset=\"utf-8\">
   <title>Ajout produit</title>
</head>
<body>";

include("db_config.php");

if (!isset($_POST["nom"]) || !isset($_POST["prix"]) ||
	empty($_POST["nom"]) || empty($_POST["prix"])){
    include("produit_form.php");
} else{
   $nom = $_POST["nom"];
   $prix = $_POST["prix"];
   $sql = 'INSERT INTO produits VALUES(DEFAULT,:nom,:prix)';
   $sth = $db->prepare($sql);
   $res = $sth->execute([':nom' => $nom, ':prix' => $prix]);
   if (!$res) echo "<p>Erreur: ".$db->errorInfo()[2];
        else echo "<p>Produit $nom ajouté";
}

echo "<p><a href=\"index.php\">Revenir</a></p>";
    
echo "</body></html>";

?>