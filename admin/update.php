<?php
    include('connection.php');
    session_start();
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){  
        header("Location: login.php");
        exit();
    }

    // Get the product ID from the URL
    if (isset($_GET['proid'])) {
        $proid = $_GET['proid'];
        $sql = "SELECT * FROM product WHERE proid = $proid";
        $result = mysqli_query($con, $sql);
        $product = mysqli_fetch_assoc($result);
    }
    if (isset($_POST['update'])) {
        $proname = $_POST['pname'];
        $prodesc = $_POST['pdesc'];
        $category = $_POST['ctgry'];
        $proqty = $_POST['pqty'];
        $price = $_POST['price'];
        if ($_FILES['pimg']['name']) {
            $proimage = $_FILES['pimg']['name'];
        } else {
            $proimage = $product['proimage'];
        }
        $update_sql = "UPDATE product SET 
                        proname = '$proname',
                        prodesc = '$prodesc',
                        category = '$category',
                        proqty = '$proqty',
                        price = '$price',
                        proimage = '$proimage' 
                        WHERE proid = $proid";
        $update_result = mysqli_query($con, $update_sql);
        echo "<script>alert('Product updated successfully.');window.location.href='product.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeFurnish.</title>
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/admin.css">
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/MediaQuery.css">
    <!-- FAVICON ICON -->
    <link rel="icon" type="image/x-icon" href="/LuxeFurnish/img/background/LuxeFurnish..png">
</head>
<body>
    <?php include('adminnavbar.php'); ?>
    <div class="form-container glass">
        <h1>Update Product</h1>
        <form method="POST" enctype="multipart/form-data">
            <label>Product Name:</label>
            <input type="text" name="pname" value="<?php echo $product['proname']; ?>" required>
            <label>Product Description:</label>
            <textarea name="pdesc" rows="4" required><?php echo $product['prodesc']; ?></textarea>
            <label>Product Category:</label>
            <select name="ctgry">
                <option <?php if($product['category'] == 'SOFAS') echo 'selected'; ?>>SOFAS</option>
                <option <?php if($product['category'] == 'TABLES') echo 'selected'; ?>>TABLES</option>
                <option <?php if($product['category'] == 'CHAIRS') echo 'selected'; ?>>CHAIRS</option>
                <option <?php if($product['category'] == 'BEDS') echo 'selected'; ?>>BEDS</option>
                <option <?php if($product['category'] == 'LAMPS') echo 'selected'; ?>>LAMPS</option>
                <option <?php if($product['category'] == 'BOOKCASE') echo 'selected'; ?>>BOOKCASE</option>
                <option <?php if($product['category'] == 'BEDS') echo 'selected'; ?>>WARDROBES</option>
                <option <?php if($product['category'] == 'LAMPS') echo 'selected'; ?>>GARDEN TABLE</option>
                <option <?php if($product['category'] == 'BOOKCASE') echo 'selected'; ?>>SHOE RACKS</option>
            </select>
            <label>Product Price:</label>
            <input type="text" name="price" value="<?php echo $product['price']; ?>" required>
            <label>Product Quantity:</label>
            <input type="number" name="pqty" value="<?php echo $product['proqty']; ?>" required>
            <label>Product Image:</label>
            <input type="file" name="pimg">
            <div class="btn-add-product">
                <input type="submit" name="update" value="Update">
                <input type="reset" value="Clear">
            </div>
        </form>
    </div>
</body>
</html>