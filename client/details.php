<?php 
    include('connection.php');
    session_start();
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){  
        header("Location: login.php");
        exit();
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
    <div class="product-details-container">
    <?php
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
        }
        else {
            echo "Product ID is missing!";
            exit;
        }
    ?>
    <?php
        $category = strtolower($product['category']);
        $imagePath = "/LuxeFurnish/img/" . $category . "/" . $product['proimage'];
    ?>
        <div class="product-image">
            <img src="<?php echo $imagePath; ?>" alt="<?php echo $product['proname']; ?>">
        </div>
        <div class="product-info">
            <table>
                <tr>
                    <td><strong>Name:</strong></td>
                    <td><?php echo $product['proname']; ?></td>
                </tr>
                <tr>
                    <td><strong>Description:</strong></td>
                    <td><?php echo $product['prodesc']; ?></td>
                </tr>
                <tr>
                    <td><strong>Category:</strong></td>
                    <td><?php echo $product['category']; ?></td>
                </tr>
                <tr>
                    <td><strong>Price:</strong></td>
                    <td><?php echo $product['price']; ?></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="checkout.php?proid=<?php echo $product['proid']; ?>" id="product-dlt-btn">Buy Now</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- INCLUDE FOOTER  -->
    <?php include 'footer.php'; ?>
    <!-- JavaScript File Link -->
    <script src="/LuxeFurnish/js/script.js"></script>
</body>
</html>
