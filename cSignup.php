<?php
include("connection.php");
function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) {
		# code...

		$text .= rand(0,9);
	}

	return $text;
}


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
    $email = $_POST['email'];
    $utype =   $_POST['address'];
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(6);
      $pnum = random_num(11);
      // $address= random_bytes(6);
			$query = "insert into customer (c_id,c_name,password,c_email,c_p_number,c_address) values ('$user_id','$user_name','$password','$email','$pnum','$utype')";

			mysqli_query($con, $query);

			header("Location: submit.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
/>
      
    <title>Signup page</title>

    <style>
        h1{text-align: center;}
        
   </style>
  </head>
  <body background="bg.jpeg">
    <main>
      <h1>Signup to MediSearch</h1> <br>
      <section style="height: 470px;" class="container d-flex justify-content-center align-items-center rounded-3 " id="subscribe">
          <div>
            <br>

              <form method='post'>
                
                <div class="mb-4">

                  <label for="exampleInputEmail1" class="form-label">User name</label>
                  <input type="type" class="form-control" id="exampleInputEmail1"  name="user_name">

                </div>
                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>


                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input type="type" name="email" class="form-control" id="exampleInputPassword1">
                </div>
                <div>
                  <label for="exampleInputPassword1" class='form-label'>Address</label>
                  <input type="type" name="address" class="form-control" id="exampleInputPassword1">
                </div>
                <div>
                   <br>
                   <button type="submit" class="btn btn-primary">Sign Up</button>
                   <br>              <br>
                   Already have an account?
                   <a href="culogin.php" class="de text-white">Click to Login</a>
                </div>
                 <br> 

              </form>
            </div>
      </section>
      

    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html> 