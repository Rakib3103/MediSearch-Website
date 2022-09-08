<?php

session_start();

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="cse370_project";

if (!$con= mysqli_connect($dbhost,$dbuser, $dbpass, $dbname))
{
    die("Failed to connect to the database!");

}
?>