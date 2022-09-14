<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;

}


?>


<!-- PHP code to establish connection with the localserver -->
<?php
 
// Username is root
$user = 'root';
$password = '';
 

$database = 'cse370_project';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM order_payment ORDER BY order_no DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>My Details</title>
    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
    body {
        background: url(bg.jpeg);
        background-size: cover;
        font-family: Arial;
        font-size: 20px;
        font-weight: 400;
        line-height: 1.5em;
    }
    .inner_main_menu{
        margin: 0 auto; 
        width: 1300px;
    }
    .inner_main_menu ul{
        margin: 15px;
        padding: 10px 0 0; 
        list-style: none;
        text-align: right;
    }    
    .inner_main_menu ul li{
        float: none; 
        display: inline-block;
    }
    .inner_main_menu ul li a{
        color: white;
        font-size: 25px; 
        text-transform: capitalize; 
        text-decoration: none;
        display: block; 
        padding: 10px 8px;}
    .inner_main_menu ul li a:hover{
        color: maroon;
    }
    #main_menu{
        background-color: #e07c61;
        margin: 2px;
        width: 100%; 
        padding: 1.5px;
        position: relative;
        border: 3px solid maroon;
    }
    table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    .logo_area{
        width:200px; 
        height: 300px; 
        position: absolute; 
        left: 12%;
        top: 3px;
        content: ""; 
        margin-left: -150px;
    }

    #logo{
        width: 320px;
        height: 100px

    }


    .student-profile .card {
        border-radius: 10px;
    }

    .student-profile .card .card-header .profile_img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin: 10px auto;
        border: 10px solid #ccc;
        border-radius: 50%;
    }

    .student-profile .card h3 {
        font-size: 20px;
        font-weight: 700;
    }

    .student-profile .card p {
        font-size: 16px;
        color: #000;
    }

    .student-profile .table th,
    .student-profile .table td {
        font-size: 14px;
        padding: 5px 10px;
        color: #000;
    }       
    </style>
</head>

<body>
    <div id="main_menu">
        <div class="logo_area">
            <a href=""><img  src="logo.png" id="logo"></a>
        </div>
        <div class="inner_main_menu">
            <ul>
                <li><a>Hi,<?php echo htmlspecialchars($_SESSION["username"]); ?> Welcome to our Site.</a></li>
            </ul>
        </div>
        </div>
        
<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">     
<!-- Delivery Man's Profile -->

<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
            <h3><?php echo htmlspecialchars($_SESSION["username"]); ?></h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">ID:</strong><?php echo htmlspecialchars($_SESSION["id"]); ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Your Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Email</th>
                <td width="2%">:</td>
                <td>ash@gmail.com</td>
              </tr>
              <tr>
                <th width="30%">Phone Number</th>
                <td width="2%">:</td>
                <td>01558066589</td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td>Male</td>
              </tr>
              <tr>
                <th width="30%">Assigned Area</th>
                <td width="2%">:</td>
                <td>Mirpur</td>
              </tr>
              <tr>
                <th width="30%"><p><a href="reset-password.php" class="btn btn-warning">Reset Your Password</a></p></th>
                <td width="2%"> Or</td>
                <td><p><a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a></p></td>
              </tr>
            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Tasks</h3>
          </div>
          <div class="card-body pt-0">
          <table>
            <tr>
                <th>username</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Payment</th>
            </tr>

            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['customer_name'];?></td>
                <td><?php echo $rows['customer_address'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['payment_method'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        </div>
      </div>
    </div>
  </div>
</div>    
</section>
</body>
</html>