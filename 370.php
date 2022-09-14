
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    background-image: url(bg.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
    font-family:'Oswald', sans-serif;

}

.container {
    margin: 50px;
    padding: 10px;
    margin-left: 17%;
}

table {
    width: 80%;
}

table,
th,
td {
    border: 5px solid white;
    border-collapse: collapse;
    border-radius: 15%;
    box-shadow: 10 20;
}

th,
td {
    padding: 30px;
    text-align: center;
    background-color: rgb(198 146 127 / 76%);
}

.op,
th {
    font-size: 20px;
}

#fname {
    align-items: center;
}

.container1 {
    width: 60%;
    margin-left: 25%;
}

.il {
    font-size: 25px;
}

li {
    display: inline;
}

.hio {
    display: inline;
    float: right;
    font-size: 25px;
    text-transform:capitalize;
    text-decoration: none;
    padding: 10px 15px;
    display:block;


}

a {
    color: white;
    width: 30px;
}

a:hover{
    color:maroon;
}

.main{
    width:200px; 
    height: 300px; 
    position: absolute; 
    left: 12%;
    top: 10px;
    content: ""; 
    margin-left: -150px;
}
    </style>
</head>
<link rel="stylesheet" href="style.css">


<body>
    <div class="container3">
        <ul>
            <li class="main"><img src="Logo.png"></li>
            <li class="hio"><a href="Hemlo.php">Delivery</a></li>
            <li class="hio"><a a href="Payment.php">Payment</a></li>
            <!-- <li class="hio"><a>Checkout</a></li> -->
            <li class="hio"><a href="370.php">Cart</a></li>
            <li class="hio"><a href="submit.php">Home</a></li>
        </ul>

    </div>


    <div class="container">
        <table>
            <?php
            if(isset($_SESSION['cart']))
            {
               foreach($_SESSION['cart'] as $key => $value)
               {
                  echo"
                  <tr>
                     <td>$value[Item_Name]</td>
                     <td><input value=$value[Quantity]></td>

                    
                     <td>$value[Price]</td>
                     <td><button>add</button></td>
                   </tr>
                   ";
                }

            }
            ?>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Add</th>
            </tr>
            <tr>
                <td>napa</td>
                <td><input type="value"></td>
                <td>60</td>
                <td><button>add</button></td>
            </tr>
            
            <?php
            $Quantity = $_POST['Quantity'];

            if (!empty($quantity)){
                $host = "localhost";
                $dbUsername = "root";
                $dbPassword = "";
                $dbname = "Quantity";
                //Connection
                $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

                if (mysqli_connect_error()) {
                    die('Connect Error('. mysqli_connect_errSno().')'. mysqli_connect_error());
                } else {
                    // $SELECT = "SELECT email From order_payment Where email = ? Limit 1";
                    $INSERT = "INSERT Into cart (quantity) values(?)";

                    $stmt = $conn->prepare($SELECT);
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $stmt->bind_result($email);
                    $stmt->store_result();
                    $rnum = $stmt->num_rows;

                    if ($rnum==0){
                        $stmt->close();
                        $stmt = $conn->prepare($INSERT);
                        $stmt->bind_param("s", $Quantity);
                        $stmt->execute();
                        echo "New record inserted successfully";
                    } else{
                        echo "Someone already registered using this email";
                    }
                    $stmt->close();
                    $conn->close();
                }

            } else {
                echo "All field are required";
                die();
            }
            ?>
            <!-- <td><button>add</button></td> -->
            
            </tr>
            <tr>
                <td>losectil</td>
                <td><input type="value"></td>
                <td>80</td>
                <td><button>add</button></td>
            
            </tr>
            <tr>
                <td>Seclo</td>
                <td><input type="value"></td>
                <td>50</td>
                <td><button>add</button></td>
            
            </tr>
        </table>
    </div>
    <hr>

    <div class="container1">
        <table>
            <tr>
                <td class="il">Total</td>
                <td class="il">560</td>
            </tr>
        </table>
    </div>
    

</body>

</html>