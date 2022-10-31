<?php
//error_reporting(0);
$login = "root";
$password = "";
$host = "localhost";
$db = "sweb";

$db = new PDO("mysql:dbname=$db;host=$host", $login, $password ); 

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$db->query("SET NAMES utf8");


?>