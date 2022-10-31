<?php

$login = "root";
$password = "";
$host = "localhost";
$db = "sweb";

$conn = mysqli_connect($host,$login,$password,$db);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

mysqli_query($conn,"SET NAMES utf8");

?>