<?php

echo 
"<!DOCTYPE html>
<html>
<head>
   <meta charset=\"utf-8\">
   <title>Suppression nom</title>
</head>
<body>";

if (!isset($_GET["id"])) {
    echo "<p>Erreur\n";
   exit();
}

if (!isset($_POST["supprimer"]) && !isset($_POST["annuler"]) ){
echo <<<EOT
<p>Etes vous sur?
<form method="post">
  <input type="submit" name="supprimer" value="Supprimer">
  <input type="submit" name="annuler" value="Annuler">
</form>
EOT;
   exit();
}

if (isset($_POST["annuler"])){
  echo "Opération annulée";
  echo "<a href='index.php'>Revenir</a>";
  exit();
}


  include("db_config.php");

  $id = mysqli_escape_string($conn,$_GET['id']);
  
  $SQL = "SELECT * FROM noms WHERE id='$id'";
 
  $res = mysqli_query($conn,$SQL);

  if (!($res && (mysqli_num_rows($res) >0)) )
  {
    echo "<p>Erreur\n"; 
	exit();
  }else {
    $l = mysqli_fetch_assoc($res);
    $SQL = "DELETE FROM noms WHERE id='$id'";
    $res = mysqli_query($conn,$SQL);
    echo "$l[nom] $l[prenom] a été supprimé";
  }
  echo "<p><a href='index.php'>Revenir à la page d'accueil</a>\n";
  echo "</body></html>";


?>