<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device=width, initial-scale=1">
	<title>final project</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet">
	<link rel="stylesheet" href="style1.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
	<style>
		body{background: url(bg.jpeg) ;font-family: 'Oswald', sans-serif;font-size: 20px;font-weight: 400;line-height: 1.5em;}
		 .inner_main_menu{margin: 0 auto; width: 1170px;}
		 .inner_main_menu ul{margin: 0; padding: 30px 0 0; list-style: none;text-align: right;}
		 .inner_main_menu ul li{float: none; display: inline-block;}
		 .inner_main_menu ul li a{color: white;font-size: 25px; text-transform: capitalize; text-decoration: none;
		 display: block; padding: 10px 8px;}
		 .inner_main_menu ul li a:hover{color: maroon;}
		 #main_menu{width: 100%; position: relative;}
		 .logo_area{width:200px; height: 300px; position: absolute; left: 12%;top: 10px;content: "";margin-left: -150px;}
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
			<a href=""><img src="logo.png" ></a>
		</div>
	</div>	
  <div id="main_menu">
        <div class="logo_area">
            <a href=""><img  src="logo.png" id="logo"></a>
        </div>
        <div class="inner_main_menu">
            <ul>
                <li><a>Hi, Welcome to our Site.</a></li>
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
            <h3>dman1</h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">ID:</strong>762312</p>
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
                
                <td>dman1@gmail.com</td>
              </tr>
              <tr>
                <th width="30%">Phone Number</th>
                
                <td>01558066589</td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                
                <td>Male</td>
              </tr>
              <tr>
                <th width="30%">Assigned Area</th>
                
                <td>Mirpur</td>
              </tr>
              <tr>
                <!-- <th width="30%"><p><a href="#" class="btn btn-warning">Reset Your Password</a></p></th> -->
                <td width="2%"> Or</td>
                <td><p><a href="emlogin.php" class="btn btn-danger ml-3">Sign Out of Your Account</a></p></td>
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
            <table class="table table-bordered">
            <tr>  
            <th>Priority</th>  
            <th>Reciever's Phone Number</th>  
            <th>Delivery Address</th> 
            <th>Tasks Completed ?</th>
            </tr>  
            <tr>  
            <td>1</td>  
            <td>0155821661</td>  
            <td>162/a west ulon east rampura</td>
            <td>
                <div>
                  <label for="cars">Choose a option:</label>
                  <select name="cars" id="cars">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>
            </td>
            </tr>  
            <tr>  
            <td>2</td>  
            <td>0177511645</td>  
            <td>152/j Wary Puran Dhaka</td>
            <td>
              <div>
                <label for="cars">Choose a option:</label>
                <select name="cars" id="cars">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            </td>
            </tr>  
            <tr>  
            <td>3</td>  
            <td>0177892116</td>  
            <td>3 data</td>
            <td>
              <div>
                <label for="cars">Choose a option:</label>
                <select name="cars" id="cars">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            </td>
            </tr>
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
	

</body>
</html>