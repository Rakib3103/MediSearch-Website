<?php
$connect = mysqli_connect('localhost','root','','cse370_project') or die('Connection Failed');
if (!empty($_POST['save']))
{
    $username= $_POST['un'];
    $password= $_POST['pw'];
    $query= "select * from customer where c_name='$username' and password='$password'";
    $result= mysqli_query($connect,$query);
    $count= mysqli_num_rows($result);
    if($count>0){
        header("Location: submit.php");
    }
    else{
        echo 'Login failed';
    }
   
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Customer Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/f0b4d212f8.js" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;300;400;500;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/fluid.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/home_style.css">
	<link rel="stylesheet" type="text/css" href="css/media-query.css">
</head>
<body>
<section class="login-sectionV js--login" id="login">
	<div class="row">
		<h2 class="login-heading">CUSTOMER LOG IN</h2>
	</div>
	<div class="row">
    <form method='post'> 
    Enter Username <input type='text' name='un'/>
    <br>
    Enter Password <input type='password' name='pw'/>
    <br>
    <input type='submit' name='save' value='Login'/>
</form>
	</div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="resources/js/script.js"></script>



</body>

</html>