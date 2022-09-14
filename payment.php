<!DOCTYPE html>
<html>
<head>
<title>MediSearch</title>
<link rel="stylesheet" href="main.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<p style="background-image: url('C:\xampp\htdocs\MediSearchPHP\bg.jpeg');">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background-image: url('C:\xampp\htdocs\MediSearchPHP\bg.jpeg');
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}


span.price {
  float: right;
  color: grey;
}

span.Quantity {
  float: center;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
  <!-- <form action="insert1.php" method="POST"> -->
  <nav class="navbar">
        <div>
            <a href="#">
                <img class="icon" src="logo1.png"/>
            </a>
        </div>
<p>Customer Info</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="insert1.php" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <form action="insert1.php" method="POST">
              <label for="fname"><i class="fa fa-user"></i> Name</label>
              <input type="text" id="fname" name="name" placeholder="John M. Doe">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="john@example.com">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
              <label for="phone"><i class="fa fa-institution"></i> Phone </label>
              <input type="text" id="phone" name="phone" placeholder="phone">
              <label for="payment_method"><i class="fa fa-institution"></i> Payment Method </label>
              <input type="radio" name="payment_method" value="c">COD
              <input type="radio" name="payment_method" value="o">Online

              <div class="row">
              </div>
          </div> 
        </div>
        <!-- <td>
          <input type="radio" name="payment_method" value = "C"> Cash On Delivery
          <input type="radio" name="payment_method" value = "O"> Online Payment
        </td> -->

        <input type="submit" value="Continue to checkout" class="btn">
        <p><a href="invoice.php">Generate My Invoice</a></p>
        <!-- <a href="http://programminghead.com" target = "blank"> -->
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <table>
         <tr>
          <th>Cart</th>
          <th>Quantity</th>
          <th>Price</th>

        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "cse370_project");
        if ($conn-> connect_error) {
          die("Connection falied:". $conn-> connect_error);
        }
        $sql = "SELECT med_name, med_quantity, price_per_pack from medicine_order_list WHERE order_no=0";
        $result = $conn-> query($sql);

        if ($result-> num_rows > 0) {
          while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["med_name"]. "</td><td>". $row["med_quantity"]."</td><td>". $row["price_per_pack"]. "</td></tr>";
          }
          echo "</table>";
        }
        else{
          echo "o result";
        }
        $conn-> close();
        ?>
      </table>
      <!-- <h4>Cart <span class="Quantity" style="color:black"> <b>Quantity</b> </span> <span class="price" style="color:black"> <b>TK</b></span></h4>
      <p>Napa <span class="Quantity">---------------1</span> <span class="price">10 TK</span></p>
      <p>Tofen <span class="Quantity">-------------2</span> <span class="price">5 TK</span></p>
      <p>Histacin <span class="Quantity">---------3</span> <span class="price">8 TK</span></p>
      <p>Losectil <span class="Quantity">---------4</span> <span class="price">2 TK</span></p> -->
      <hr>
      <p>Discount <span class="price" style="color:black"><b>5% </b></span></p>
      <p>Total <span class="price" style="color:black"><b>30 TK</b></span></p>
    </div>
  </div>
</div>

</body>
</html>
