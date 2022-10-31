<?php

require_once("db_config.php");

$order = "asc";

if(isset($_GET['o'])) $order = $_GET['o'];

$dep = "";

if(isset($_GET['d'])) $dep = " WHERE no='$_GET[d]' ";


echo 
"<!DOCTYPE html>
<html>
<head>
   <meta charset=\"utf-8\">
   <title>Liste des départements</title>
   <style>
     table {border: 1px solid black; border-collapse: collapse;}
     td,th {border: 1px solid black;}
   </style>
</head>
<body>";

if($order=="asc") $s = "desc";
else $s = "asc";

if (empty($dep)){
 echo "<h1>Liste des départements français</h1>";
} else {
 echo "<h1>Département : $_GET[d]</h1>";
}	
echo 
"<table>
 <thead>
   <tr><th><a href=\"?o=$s\">No</th><th>Nom</th></tr>
 </thead>
 <tbody>
";


$SQL = "SELECT * FROM departements $dep ORDER BY no $order";

if ($res = mysqli_query($conn,$SQL)){

	
  while ($row = mysqli_fetch_array($res)){ 
    	echo "    <tr><td>$row[no]</td><td>$row[nom]</td></tr>\n";
  }  

} else {
	echo mysqli_error($conn);
}

mysqli_close($conn);

echo "</tbody></table>";


echo "</body></html>";

?>