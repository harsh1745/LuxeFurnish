<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeFurnish.</title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/admin.css">
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/MediaQuery.css">
    <!-- FAVICON ICON -->
    <link rel="icon" type="image/x-icon" href="/LuxeFurnish/img/background/LuxeFurnish..png">
</head>
<body>
    <?php 
        include('adminnavbar.php');
    ?>
    <div class="form-container glass">
        <h1>Add New Product</h1>
        <form method="POST" enctype="multipart/form-data">
            <label>Product Name:</label>
            <input type="text" name="pname" required>
            <label>Product Description:</label>
            <textarea name="pdesc" rows="4" required></textarea>
            <label>Product Category:</label>
            <select name="ctgry">
                <option>SOFAS</option>
                <option>TABLES</option>
                <option>CHAIRS</option>
                <option>BEDS</option>
                <option>LAMPS</option>
                <option>BOOKCASE</option>
                <option>WARDROBES</option>
                <option>GARDEN TABLE</option>
                <option>SHOE RACKS</option>
            </select>
            <label>Product Price:</label>
            <input type="text" name="price" required>
            <label>Product Quantity:</label>
            <input type="number" name="pqty" required>
            <label>Product Image:</label>
            <input type="file" name="pimg" required>
            <div class="btn-add-product">
                <input type="submit" name="add" value="Insert" >
			    <input type="reset" value="Clear" >
            </div>
        </form>
    </div>
    <?php
	    error_reporting(0);
        include('connection.php');

        if (isset($_POST['add'])){
    	    $proname= $_POST['pname'];
    	    $prodesc = $_POST['pdesc'];
		    $category=$_POST['ctgry'];
		    $proqty = $_POST['pqty'];
		    $price = $_POST['price'];
		    $proimage = $_FILES['pimg']['name'];

		    $sql="INSERT INTO product(proname,prodesc,category,proqty,price,proimage) VALUES('$proname','$prodesc','$category','$proqty','$price','$proimage')";
		    $result = mysqli_query($con,$sql);
		    echo "<script>alert('Added successfully.');window.location.href='product.php'</script>";
        }
    ?>
</body>

</html>