<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeFurnish.</title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="/LuxeFUrnsih/css/admin.css">
    <link rel="stylesheet" type="text/css" href="/LuxeFUrnsih/css/MediaQuery.css">
    <!-- FAVICON ICON -->
    <link rel="icon" type="image/x-icon" href="/LuxeFurnish/img/background/LuxeFurnish..png">
</head>
<body>
    <?php
        include ('adminnavbar.php');
        include("connection.php");
        $sql ="select * from product";
        $result =mysqli_query($con, $sql);
    ?>
    <table class="glass" style="border:none;">
        <h1 class="product-title" style="margin-top:80px;">Products</h1>
        <tr style="background-color:#2e4b4d;color:#ffdd57;">
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Product Quantity</th>					
            <th>Product Price</th>
            <th>Image</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
            while ($row= mysqli_fetch_assoc($result)){
        ?>
        <tr id="hover-product-name">
            <td><?php echo $row['proid'];?></td>
            <td><?php echo $row['proname'];?></td>
            <td><?php echo $row['prodesc'];?></td>
            <td><?php echo $row['category'];?></td>
            <td><?php echo $row['proqty'];?></td>
            <td><?php echo $row['price'];?></td>				
            <td><?php echo $row['proimage'];?></td>
            <td>
                <a href="delete.php?proid=<?php echo($row['proid']);?>" name="delete" id="product-dlt-btn">Delete</a>
            </td>
            <td>
                <a href="update.php?proid=<?php echo($row['proid']);?>" name="update" id="product-dlt-btn">Update</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>