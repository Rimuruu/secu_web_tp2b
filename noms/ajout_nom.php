<?php

echo 
"<!DOCTYPE html>
<html>
<head>
   <meta charset=\"utf-8\">
   <title>Ajout nom</title>
</head>
<body>";

include("db_config.php");

if (!isset($_POST["nom"]) || !isset($_POST["prenom"]) || !isset($_POST["age"]) ||
	empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["age"]) ){
    include("nom_form.php");
} else{
   $nom = mysqli_escape_string($conn,$_POST["nom"]);
   $prenom = mysqli_escape_string($conn,$_POST["prenom"]);
   $age = $_POST["age"];
   $SQL = "INSERT INTO noms VALUES(DEFAULT,'$nom','$prenom',$age)";
   $res = mysqli_query($conn,$SQL);
   if (!$res) echo "<p>Erreur: ".mysqli_error($conn);
        else echo "<p>Personne $nom ajouté";
}

echo "<p><a href=\"index.php\">Revenir</a></p>";
    
echo "</body></html>";

?>