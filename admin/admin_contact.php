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
		include('connection.php');
	    $sql= "select * from contact";
	    $result= mysqli_query($con, $sql);
	?>
    <table class="glass" style="border:none;">
        <h1 class="user-title" style="margin-top:80px;">Contacts</h1>
        <tr style="background-color:#2e4b4d;color:#ffdd57;">
            <th>Contact Id</th>
		    <th>Name</th>
		    <th>Email</th>
            <th>Mobile No.</th>
		    <th>Message</th>					
		    <th>Action</th>
        </tr>
        <?php
            while ($row= mysqli_fetch_assoc($result)){
        ?>
        <tr id="hover-product-name">
            <td><?php echo $row['c_id'];?></td>
			<td><?php echo $row['c_name'];?></td>
            <td><?php echo $row['c_email'];?></td>
            <td><?php echo $row['c_mobile'];?></td>
            <td><?php echo $row['c_message'];?></td>
            <td><a href="delete.php?c_id=<?php echo($row['c_id']);?>" name="delete" id="product-dlt-btn">Delete</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>