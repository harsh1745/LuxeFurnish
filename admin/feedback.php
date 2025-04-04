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
	    $sql= "select * from feedback";
	    $result= mysqli_query($con, $sql);
	?>
    <table class="glass" style="border:none;">
        <h1 class="user-title" style="margin-top:80px;">Feedbacks</h1>
        <tr style="background-color:#2e4b4d;color:#ffdd57;">
            <th>Feedback Id</th>
		    <th>Name</th>
		    <th>Email</th>
		    <th>Message</th>
            <th>Current Time</th>					
		    <th>Action</th>
        </tr>
        <?php
            while ($row= mysqli_fetch_assoc($result)){
        ?>
        <tr id="hover-product-name">
            <td><?php echo $row['fid'];?></td>
			<td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['message'];?></td>
            <td><?php echo $row['current_time'];?></td>
            <td><a href="delete.php?fid=<?php echo($row['fid']);?>" name="delete" id="product-dlt-btn">Delete</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>