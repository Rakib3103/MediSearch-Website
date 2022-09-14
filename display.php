<?php
include("connection.php");

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
  <div class="container">
  <!-- <button class="btn btn-primary my-5"> Add Medicine</button> -->
  <li><a href="medicineUpdate.php">Add Medicine</a></li>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Medicine Name</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="Select * from pharmacy_sells where pharm_id='3'";
  $result=mysqli_query($con,$sql);
      
      while($row = $result->fetch_assoc()) {
          echo "<tr>
          <td>" . $row["med_name"] . "</td>
          <td>" . $row["Quantity_per_pack"] . "</td>
          </tr>";
            
      }

 ?>
</tbody> 
 </body>
</html>