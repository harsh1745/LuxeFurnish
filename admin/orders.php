<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeFurnish.</title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link rel="stylesheet" type="text/css" href="../css/MediaQuery.css">
    <!-- FAVICON ICON -->
    <link rel="icon" type="image/x-icon" href="/LuxeFurnish/img/background/LuxeFurnish..png">
</head>
<body>
    <?php
        include 'adminnavbar.php';
        include 'connection.php';   
    ?>
    <?php
        $sql ="select p.proid,p.proname,p.price,b.orderid,b.qty,b.cname,b.phoneno,b.email,b.address,b.date,b.cardno,b.total from product as p join booking as b on p.proid=b.proid";
		$result =mysqli_query($con, $sql);
    ?>
    <table class="glass" style="border:none;">
        <h1 class="product-title" style="margin-top:80px;">Orders</h1>
        <tr style="background-color:#2e4b4d;color:#ffdd57;">
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Phone No</th>
            <th>Email</th>
            <th>Address</th>
            <th>Product Name</th>
            <th>Product Quantity</th>
            <th>Price(Without Tax)</th>
            <th>Date</th>
            <th>Card No</th>
            <th>Action</th>
        </tr>
        <?php
            while ($row= mysqli_fetch_assoc($result)){
        ?>
        <tr id="hover-product-name">
            <td><?php echo $row['orderid'];?></td>														
		    <td><?php echo $row['cname'];?></td>
		    <td><?php echo $row['phoneno'];?></td>
		    <td><?php echo $row['email'];?></td>
		    <td><?php echo $row['address'];?></td>
		    <td><?php echo $row['proname'];?></td>
		    <td><?php echo $row['qty'];?></td>
		    <td><?php echo $row['total'];?></td>
		    <td><?php echo $row['date'];?></td> 							
		    <td><?php echo $row['cardno'];?></td>
		    <td><a href="delete.php?orderid=<?php echo($row['orderid']);?>" name="delete" id="product-dlt-btn">Delete</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
    <?php include 'adminnavbar.php'; ?> 
</body>
</html>