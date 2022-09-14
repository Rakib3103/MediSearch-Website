<?php
$customer_name = $_POST['name'];
$email = $_POST['email'];
$customer_address = $_POST['address'];
$phone = $_POST['phone'];
$payment_method = $_POST['payment_method'];

if (!empty($customer_name) || !empty($email)  || !empty($customer_address) || !empty($phone) || !empty($payment_method)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "cse370_project";
    //Connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errSno().')'. mysqli_connect_error());
    } else {
        $SELECT = "SELECT email From order_payment Where email = ? Limit 1";
        $INSERT = "INSERT Into order_payment (customer_name, email, customer_address, phone, payment_method) values(?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssis", $customer_name, $email, $customer_address, $phone, $payment_method);
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