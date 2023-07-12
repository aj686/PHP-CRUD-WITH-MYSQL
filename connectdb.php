<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "student unikl";

//check connection to mysql database 
$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if(!$con) {
    die("Failed to connect");
}

//echo "Successful Connected";


?>