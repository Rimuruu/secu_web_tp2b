<?php

echo 
"<!DOCTYPE html>
<html>
<head>
   <meta charset=\"utf-8\">
   <title>Modification nom</title>
</head>
<body>";

  if (!isset($_GET['id'])) {
    echo "<p>Erreur</p>";
  } else {
		include("db_config.php");
	  
		$id = mysqli_escape_string($conn,$_GET['id']);
		$SQL = "SELECT * FROM noms a WHERE id='$id'";
		$res = mysqli_query($conn,$SQL);
		if(!$res || mysqli_num_rows($res)==0) die ("Erreur".mysqli_error($conn));
	    $row = mysqli_fetch_assoc($res);
	    echo "<p>Modification de : $row[prenom] $row[nom]</p>";
      if (!isset($_POST['nom']) || !isset($_POST['prenom'])|| !isset($_POST['age'])) {
	    include("mod_form.php");
	  } else{
	  		$nom = mysqli_real_escape_string($conn,$_POST['nom']);
	  		$prenom = mysqli_real_escape_string($conn,$_POST['prenom']);
			$age = mysqli_real_escape_string($conn,$_POST['age']);
			$SQL = "UPDATE noms SET nom='$nom', prenom='$prenom', age='$age' WHERE id='$id'";
			$res = mysqli_query($conn,$SQL);
	    if(!$res) {
		  echo "<p>Erreur de modification</p>".mysqli_error($conn);
	  } else {
	      echo "<p>Nom modifié</p>";
		}
	  }
	  }
	  echo "<p><a href=\"index.php\">Revenir</a> à la page précédente.</a></p>";
  echo "</body></html>";


?>