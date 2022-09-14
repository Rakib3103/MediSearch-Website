<?php
include("connection.php");
//function check_login($con)
//{
//if(isset($_POST['submit']))
//	{
//
//		$medicine_name = $_POST["name"];
//		$quantity = $_POST["quantity"];
//        $sql = "insert into medicine(Name,Quantity) values ('$medicine_name', '$quantity')";
//        $result = mysqli_query($con,$sql);
//        if ($result){
//            echo "Successful";
//        }else{
//            die(mysqli_error($con));
//            
//        }
//}
//}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Admin Panel</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  
  <div class="form-group">
    <label>Pharmacy ID</label>
    <input type="text" class="form-control" placeholder=" " name="pharm_id">
  </div>
        
  <div class="form-group">
    <label>Medicine Name</label>
    <input type="text" class="form-control" placeholder=" " name="name">
  </div>
  
  <div class="form-group">
    <label>Quantity</label>
    <input type="text" class="form-control" placeholder=" " name="quantity">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
      
      
    </div>
<?php

if(isset($_POST['submit'])) {
    $pharm_id = $_POST["pharm_id"];  
    $medicine_name = $_POST["name"];
    $quantity = $_POST["quantity"];
}
$query = "INSERT INTO pharmacy_sells (Pharm_id, med_name, Quantity_per_pack) VALUES('$pharm_id', '$medicine_name', '$quantity')";
mysqli_query($con,$query);
echo("Medicine added");
      
?>