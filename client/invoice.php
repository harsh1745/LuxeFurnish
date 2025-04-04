<?php
    include('connection.php');
    session_start();

    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){  
    header("Location: login.php");
    exit();
}
$orderQuery = "SELECT * FROM booking ORDER BY orderid DESC LIMIT 1";
$result = mysqli_query($con, $orderQuery);
if(mysqli_num_rows($result) > 0) {
    $order = mysqli_fetch_assoc($result);
    $productQuery = "SELECT * FROM product WHERE proid = " . $order['proid'];
    $productResult = mysqli_query($con, $productQuery);
    $product = mysqli_fetch_assoc($productResult);
} else {
    echo "No order found!";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeFurnish Invoice</title>
    <!-- CSS LINK  -->
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/Invoicstyle.css">
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/MediaQuery.css">
    <!-- Font Awesome Icons Link-->
    <link href="/LuxeFurnish/fontawesome/css/all.css" rel="stylesheet">
    <!-- FAVICON ICON -->
    <link rel="icon" type="image/x-icon" href="/LuxeFurnish/img/background/LuxeFurnish..png">
</head>
<body>
<div class="invoice-container">
    <h1>Invoice</h1>
    <table>
        <tr>
            <th colspan="2">Customer Details</th>
        </tr>
        <tr>
            <td><strong>Name:</strong></td>
            <td><?php echo $order['cname']; ?></td>
        </tr>
        <tr>
            <td><strong>Phone:</strong></td>
            <td><?php echo $order['phoneno']; ?></td>
        </tr>
        <tr>
            <td><strong>Email:</strong></td>
            <td><?php echo $order['email']; ?></td>
        </tr>
        <tr>
            <td><strong>Address:</strong></td>
            <td><?php echo $order['address']; ?></td>
        </tr>
    </table>
    <table>
        <tr>
            <th colspan="2">Product Details</th>
        </tr>
        <tr>
            <td><strong>Product Name:</strong></td>
            <td><?php echo $product['proname']; ?></td>
        </tr>
        <tr>
            <td><strong>Price:</strong></td>
            <td>$<?php echo $product['price']; ?></td>
        </tr>
        <tr>
            <td><strong>Quantity:</strong></td>
            <td><?php echo $order['qty']; ?></td>
        </tr>
    </table>
    <div class="total-amount">
        <p><strong>Subtotal:</strong> $<?php echo $order['total']; ?></p>
    </div>
    <button onclick="window.print()">Print Invoice</button>
    <button><a href="index.php" class="back-to-shop">Back to shop</a></button>
</div>
<!-- JavaScript File Link -->
<script src="/LuxeFurnish/js/script.js"></script>
</body>
</html>
