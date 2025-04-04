<?php 
include('connection.php');
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){  
    header("Location: login.php");
    exit();
}
if (isset($_GET['proid'])){
    $proid = $_GET['proid'];
    $sql = "SELECT * FROM product WHERE proid = $proid";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0){
        $product = mysqli_fetch_assoc($result);
    } else {
        echo "Product not found!";
        exit;
    }
    } else {
        echo "Product ID is missing!";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeFurnish</title>
    <!-- CSS LINK  -->
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/style.css">
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/MediaQuery.css">
    <!-- Font Awesome Icons Link-->
    <link href="/LuxeFurnish/fontawesome/css/all.css" rel="stylesheet">
    <!-- FAVICON ICON -->
    <link rel="icon" type="image/x-icon" href="/LuxeFurnish/img/background/LuxeFurnish..png">
</head>
<body bgcolor="#708871">
    <!-- INCLUDE NAVBAR  -->
    <?php include 'navbar.php'; ?>
    <div class="booking-container">
        <div class="product-side">
            <img src="/LuxeFurnish/img/<?php echo strtolower($product['category']) . '/' . $product['proimage']; ?>"
                alt="<?php echo $product['proname']; ?>">
            <h2>
                <strong>Name:</strong>
                <?php echo $product['proname']; ?>
            </h2>
            <p>
                <strong>Price:</strong>
                <?php echo $product['price']; ?>
            </p>
        </div>
        <div class="form-side">
            <form action="" method="POST">
                <input type="hidden" name="proid" value="<?php echo $product['proid']; ?>">
                <label for="cname">Customer Name:</label>
                <input type="text" id="cname" name="cname" required>
                <label for="phoneno">Phone Number:</label>
                <input type="tel" id="phoneno" name="phoneno" minlength="10" maxlength="10" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="address">Address:</label>
                <textarea id="address" name="add" required></textarea>
                <label for="cardno">Card Number:</label>
                <input type="text" id="cardno" name="card" required minlength="12" maxlength="12">
                <label for="cvvno">CVV Number:</label>
                <input type="text" id="cvvno" name="cvv" required minlength="3" maxlength="3">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="qty" value="1" min="1" max="<?php echo $product['proqty']; ?>" required>
                <button type="submit" id="product-dlt-btn" name="confirm">Confirm Booking</button>
            </form>
        </div>
    </div>
    <?php
        if (isset($_POST['confirm'])) {
            $qua = $_POST['qty'];
            $cn = $_POST['cname'];
            $pno = $_POST['phoneno'];
            $email = $_POST['email'];
            $add = $_POST['add'];
            $card = $_POST['card'];
            $cvv = $_POST['cvv'];
            $price = $product['price'];
            $total = $price * $qua;
            $select = "SELECT proqty FROM product WHERE proid = $proid";
            $result = mysqli_query($con, $select);
            $row = mysqli_fetch_assoc($result);
            $proqty = $row['proqty'];
            if ($proqty >= $qua) {
                $sql = "UPDATE product SET proqty = proqty - $qua WHERE proid = $proid";
                mysqli_query($con, $sql);
                $insert = "INSERT INTO `booking` (`orderid`, `proid`, `qty`, `cname`, `phoneno`, `email`, `address`, `date`, `cardno`, `cvvno`, `total`) VALUES (NULL, '$proid', '$qua', '$cn', '$pno', '$email', '$add', CURRENT_DATE(), '$card','$cvv','$total')";
                if (mysqli_query($con, $insert)) {
                    echo "<script>alert('Booking Successfully'); window.location.href = 'invoice.php?proid=$proid';</script>";
                }
            }
            else {
                echo "<script>alert('Out of Stock'); window.location.href = 'allproducts.php';</script>";
            }
        }
    ?>
    <!-- INCLUDE NAVBAR  -->
    <?php include 'footer.php'; ?>
    <!-- JavaScript File Link -->
    <script src="/LuxeFurnish/js/script.js"></script>
</body>

</html>