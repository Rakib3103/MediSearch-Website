<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device=width, initial-scale=1">
	<title>final project</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
	<style>
		body{background: url(bg.jpeg) ;font-family: 'Oswald', sans-serif;font-size: 20px;font-weight: 400;line-height: 1.5em;}
		 .inner_main_menu{margin: 0 auto; width: 1170px;}
		 .inner_main_menu ul{margin: 0; padding: 30px 0 0; list-style: none;text-align: right;}
		 .inner_main_menu ul li{float: none; display: inline-block;}
		 .inner_main_menu ul li a{color: white;font-size: 25px; text-transform: capitalize; text-decoration: none;
		 display: block; padding: 10px 8px;}
		 .inner_main_menu ul li a:hover{color: maroon;}
		 #main_menu{width: 100%; position: relative;}
		 .logo_area{width:200px; height: 300px; position: absolute; left: 12%;top: 10px;content: ""; margin-left: -150px;}

         html, body {
                min-height: 100%;
                padding: 0;
                margin: 0;
                font-family: Roboto, Arial, sans-serif;
                font-size: 14px;
                color: #666;
                }
                h1 {
                margin: 0 0 20px;
                font-weight: 400;
                color: #1c87c9;
                }
                p {
                margin: 0 0 5px;
                }
                .main-block {
                display: flex;
                width: 67%;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-height: 50vh;
                background: transparent;
                }
                form {
                padding: 25px;
                margin: 25px;
                box-shadow: 0 2px 5px #f5f5f5; 
                background: transparent; 
                }
                .fas {
                margin: 25px 10px 0;
                font-size: 72px;
                color: #fff;
                }
                .fa-envelope {
                transform: rotate(-20deg);
                }
                .fa-at , .fa-mail-bulk{
                transform: rotate(10deg);
                }
                input, textarea {
                width: calc(100% - 18px);
                padding: 8px;
                margin-bottom: 20px;
                border: 1px solid #1c87c9;
                outline: none;
                }
                input::placeholder {
                color: #666;
                }
                button {
                width: 100%;
                padding: 10px;
                border: none;
                background: #800000; 
                font-size: 16px;
                font-weight: 400;
                color: #fff;
                }
                button:hover {
                background: #2371a0;
                } 
                @media (min-width: 568px) {
                .main-block {
                flex-direction: row;
                }
                .left-part, form {
                width: 50%;
                }
                .fa-envelope {
                margin-top: 0;
                margin-left: 20%;
                }
                .fa-at {
                margin-top: -10%;
                margin-left: 65%;
                }
                .fa-mail-bulk {
                margin-top: 2%;
                margin-left: 28%;
                }
                }
	</style>
</head>
<body>
	<div id="main_menu">
		<div class="logo_area">
			<a href=""><img src="logo.png" ></a>
		</div>
		<div class="inner_main_menu">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="370.html">Cart</a></li>
				<li><a href="#">Checkout</a></li>
				<li><a href="#">Payment</a></li>
				<li><a href="Hemlo.html">Delivery</a></li>
			</ul>
		</div>
	</div>	
    <div class="main-block">
        <div class="left-part">
            <i class="fas fa-envelope"></i>
            <i class="fas fa-at"></i>
            <i class="fas fa-mail-bulk"></i>
        </div>
         
            <form method='post'>
                <!-- <h1>Contact Us</h1> -->
                <div class="info">
                    <input class="fname" type="text" name="location" placeholder="Enter Location">
                    <input type="text" name="medname" placeholder="Enter Medicine Name">
                    <input type="text" name="time" placeholder="Select Time">
                </div>

                <button type="submit" name='button'href="/">Search</button>
        </form>
    </div>

    <div class="row" id='adjust' align='center'>
				<div class="col-md-12">
					<h1 class="text-center mb-4">Available Pharmacies</h1><br>
					<div class="table-wrap">
    				<table class="table" >
        				<thead class="thead-primary">
						<style>
							table,tr,th,td
							{
								border: 3px solid maroon ;
								
							}
						</style>
							<tr>
								<th >Pharmacy Name</th>
								<th>Medicine Name</th>
								<th>Pharmacy Location</th>
								<th>Medicine Price</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$servername = "localhost";
							$username = "root";
							$password = "";
							$database = "cse370_project";

							// Create connection
							$connection = new mysqli($servername, $username, $password, $database);

							// Check connection
							if ($connection->connect_error) {
								die("Connection failed: " . $connection->connect_error);
							}

							// read all row from database table
							
                            
                            if(isset($_POST['button'])) {
                                $location = $_POST['location'];
							    $medicine = $_POST['medname'];
							    $time = $_POST['time'];
                            }
                            //     if (empty($location)==false && empty($medicine)==false && empty($time)==false){
                            //         $query = 'SELECT pharmacy.pharm_name,medicine.med_name,pharmacy.pharm_location,medicine.price_per_packFROM pharmacy JOIN pharmacy_sells ON pharmacy.pharm_id = pharmacy_sells.pharm_id 
                            //         JOIN medicine ON pharmacy_sells.med_name = medicine.med_name WHERE pharmacy.Location={$location} and medicine.med_name = {$medicine} and pharmacy.Time={$time} order by medicine.price_per_pack ASC;';
                            //         $result = $connection->query($query);
                                    
                            //     }



                            // }
                            

							if (empty($location)==false && empty($medicine)==false && empty($time)==false){
							$query = "SELECT pharmacy.pharm_name,medicine.med_name,pharmacy.pharm_location,medicine.price_per_pack
							FROM pharmacy JOIN pharmacy_sells ON pharmacy.pharm_id = pharmacy_sells.pharm_id 
							JOIN medicine ON pharmacy_sells.med_name = medicine.med_name WHERE
							pharmacy.Location='$location' and medicine.med_name = '$medicine' and pharmacy.Time='$time' order by medicine.price_per_pack ASC;";
                            // mysqli_query($con,$query);
                            $result = $connection->query($query);
                            
                                if (!$result) {
                                    die("Invalid query: " . $connection->error);
                                }

                                // read data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                        <td>" . $row["pharm_name"] . "</td>
                                        <td>" . $row["med_name"] . "</td>
                                        <td>" . $row["pharm_location"] . "</td>
                                        <td>" . $row["price_per_pack"] . "</td>
                                        
                                        <td>
                                            <a class='btn btn-primary btn-sm' href='Add'>Add to cart</a>
                                        </td>
                                    </tr>";
                                }

							$connection->close();
                            }
                            // if (empty($location)==false && empty($medicine)==false && empty($time)==false){
                            // $query = "SELECT pharmacy.pharm_name,medicine.med_name,pharmacy.pharm_location,medicine.price_per_pack
                            // FROM pharmacy JOIN pharmacy_sells ON pharmacy.pharm_id = pharmacy_sells.pharm_id 
                            // JOIN medicine ON pharmacy_sells.med_name = medicine.med_name WHERE
                            // pharmacy.Location='$location' OR medicine.med_name = '$medicine' OR pharmacy.Time='$time' order by medicine.price_per_pack ASC;";
                            //     // mysqli_query($con,$query);
                            //     // $result = $connection->query($query);
                                
                            //     if (!$result) {
                            //             die("Invalid query: " . $connection->error);
                            //         }
    
                            //         // read data of each row
                            //     while($row = $result->fetch_assoc()) {
                            //         echo "<tr>
                            //             <td>" . $row["pharm_name"] . "</td>
                            //             <td>" . $row["med_name"] . "</td>
                            //             <td>" . $row["pharm_location"] . "</td>
                            //             <td>" . $row["price_per_pack"] . "</td>
                                        
                            //             <td>
                            //                 <a class='btn btn-primary btn-sm' href='Add'>Add to cart</a>
                            //             </td>
                            //         </tr>";
                            //     }
    
                            // $connection->close();
                            // }
							?>
                            

						</tbody>
   					 </table>
					</div>
				</div>
			</div>
		</div>
	<!-- </div> -->
	</section>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
    
</body>
</html>


