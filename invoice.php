<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>invoice page - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div id="invoice">
                    <hr>
                </div>
                <div class="invoice overflow-auto">
                    <div style="min-width: 600px">
                        <header>
                            <div class="row">
                                <div class="col">
                                    <a href="javascript:;">
    												<img src="assets/images/logo-icon.png" width="80" alt="">
												</a>
                                </div>
                                <div class="col company-details">
                                    <h2 class="name">
                                        <a target="_blank" href="javascript:;">
									MediSearch
									</a>
                                    </h2>
                                    <div>Mohakhali</div>
                                    <div>(123) 456-789</div>
                                    <div>medisearch@example.com</div>
                                </div>
                            </div>
                        </header>
                        <main>
                            <div class="row contacts">
                                <div class="col invoice-to">
                                    <div class="text-gray-light">INVOICE TO:</div>
                                    <table>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Payment Method</th>
                                        </tr>
                                    <hr>
                                    <tbody>
                                    </div>
                                    </div>
                                    <?php
                                    $conn = mysqli_connect("localhost", "root", "", "cse370_project");
                                    if ($conn-> connect_error) {
                                        die("Connection falied:". $conn-> connect_error);
                                    }
                                    $sql = "SELECT customer_name, email, customer_address, payment_method from order_payment WHERE order_no=7";
                                    $result = $conn-> query($sql);

                                    if ($result-> num_rows > 0) {
                                        while ($row = $result-> fetch_assoc()) {
                                            echo "<tr><td>". $row["customer_name"]. "</td><td>". $row["email"]."</td><td>". $row["customer_address"]."</td><td>". $row["payment_method"]."</td></tr>";
                                        }
                                        echo "</table>";
                                    }
                                    else{
                                        echo "o result";
                                    }
                                    $conn-> close();
                                    ?>
                                    <!-- <h2 class="to">John Doe</h2>
                                    <div class="address">796 Silver Harbour, TX 79273, US</div>
                                    <div class="email"><a href="mailto:john@example.com">john@example.com</a>
                                    </div>
                                </div> -->
                                <div class="col invoice-details">
                                    <h1 class="invoice-id">INVOICE</h1>
                                    
                                </div>
                            </div>
                            <table>
                                <tr>
                                    <th>Cart</th>
                                    <th>Quantity</th>
                                    <th>Price</th>

                                </tr>
                                <hr>
                                <!-- <td>Discount</td>
                                    <p>Total <span class="price" style="color:black"><b>30 TK</b></span></p> -->
                                <tbody>
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
                                <table>
                                    <tr>
                                        <td>Discount</td>
                                        <td>Total</td>
                                    </tr>
                                    <?php
                                    $conn = mysqli_connect("localhost", "root", "", "cse370_project");
                                    if ($conn-> connect_error) {
                                        die("Connection falied:". $conn-> connect_error);
                                    }
                                    $sql = "SELECT discount, grand_total from payment_table WHERE order_no=0";
                                    $result = $conn-> query($sql);

                                    if ($result-> num_rows > 0) {
                                        while ($row = $result-> fetch_assoc()) {
                                            echo "<tr><td>". $row["discount"]. "</td><td>". $row["grand_total"]. "</td></tr>";
                                        }
                                        echo "</table>";
                                    }
                                    else{
                                        echo "o result";
                                    }
                                    $conn-> close();
                                    ?>
                                </table>
                            </table>
                            <div class="thanks">Thank you!</div>
                            <p><a href="Hemlo.php">Proceed to Delivery</a></p>
                        </main>
                        <footer>Invoice was created on a computer and is valid without the signature and seal.</footer>
                    </div>
                    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
body{margin-top:20px;
background-color: #f7f7ff;
}
#invoice {
    padding: 0px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #0d6efd
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #0d6efd
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: 100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #0d6efd;
    background: #e7f2ff;
    padding: 10px;
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,
.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #0d6efd;
    font-size: 1.2em
}

.invoice table .qty,
.invoice table .total,
.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #0d6efd
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #0d6efd;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid rgba(0, 0, 0, 0);
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}

.invoice table tfoot tr:last-child td {
    color: #0d6efd;
    font-size: 1.4em;
    border-top: 1px solid #0d6efd
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px !important;
        overflow: hidden !important
    }
    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }
    .invoice>div:last-child {
        page-break-before: always
    }
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #0d6efd;
    background: #e7f2ff;
    padding: 10px;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>