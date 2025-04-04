<?php
    session_start();
    include('connection.php');
    if (!isset($_SESSION['e'])) {
        header("Location: adminlogin.php");
        exit(); 
    }
    $totalQuery = "SELECT SUM(total) AS total_amount FROM booking";
    $result = mysqli_query($con, $totalQuery);

    $productQuery = "SELECT COUNT(*) AS total_products FROM product";
    $productResult = mysqli_query($con, $productQuery);
    $productData = mysqli_fetch_assoc($productResult);

    $userQuery = "SELECT COUNT(*) AS total_users FROM register";
    $userResult = mysqli_query($con, $userQuery);
    $userData = mysqli_fetch_assoc($userResult);

    $orderQuery="SELECT COUNT(*) AS total_order FROM booking";
    $orderResult=mysqli_query($con,$orderQuery);
    $orderData=mysqli_fetch_assoc($orderResult);

    $feedbackQuery="SELECT COUNT(*) AS total_feedback FROM feedback";
    $feedbackResult=mysqli_query($con,$feedbackQuery);
    $feedbackData=mysqli_fetch_assoc($feedbackResult);

    $contactQuery="SELECT COUNT(*) AS total_contact FROM contact";
    $contactResult=mysqli_query($con,$contactQuery);
    $contactData=mysqli_fetch_assoc($contactResult);

    $totalAmount = 0;
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $totalAmount = $row['total_amount'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeFurnish.</title>
    <!-- CSS Link  -->
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/admin.css">
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/MediaQuery.css">
    <!-- Font Awesome Icons Link-->
    <link href="/LuxeFurnish/fontawesome/css/all.css" rel="stylesheet">
    <!-- FAVICON ICON -->
    <link rel="icon" type="image/x-icon" href="/LuxeFurnish/img/background/LuxeFurnish..png">
</head>
<body>
    <?php
        include('adminnavbar.php');
    ?>
    <div class="dashboard-container">
        <div class="dashboard-box">
            <h2><i class="fa-solid fa-user"></i> <?php echo $userData['total_users']; ?></h2>
            <p>Total Users</p>
        </div>
        <div class="dashboard-box">
            <h2><i class="fa-solid fa-box"></i> <?php echo $productData['total_products']; ?></h2>
            <p>Total Products</p>
        </div>
        <div class="dashboard-box">
            <h2><i class="fa-solid fa-dolly"></i> <?php echo $orderData['total_order']; ?></h2>
            <p>Total Orders</p>
        </div>
        <div class="dashboard-box">
            <h2><i class="fa-solid fa-comment"></i> <?php echo $feedbackData['total_feedback']; ?></h2>
            <p>Total Feedback</p>
        </div>
        <div class="dashboard-box">
            <h2><i class="fa-solid fa-square-phone"></i> <?php echo $contactData['total_contact']; ?></h2>
            <p>Total Contact</p>
        </div>
        <div class="dashboard-box">
            <h2><i class="fa-solid fa-hand-holding-dollar"></i> <?php echo number_format($totalAmount, 2); ?></h2>
            <p>Total Sales Amount</p>
        </div>
    </div>
</body>
</html>