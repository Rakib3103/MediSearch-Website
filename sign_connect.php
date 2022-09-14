<?php

include "dbconnect.php";

$user_name = $_POST['user_name'];
$pass = $_POST['password'];
$email = $_POST['email'];
$num = $_POST['number'];
$addre = $_POST['address'];

$ser = rand(1,100000);

$ass_query = "INSERT INTO customer VALUES ($ser,'$user_name','$pass','$email','$num','$addre')";
$res2 = mysqli_query($conn, $ass_query); 

echo "<h1>Signup Complete</h1>"

?>