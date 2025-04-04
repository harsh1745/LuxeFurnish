<?php
    include('connection.php');
    session_start();
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){  
        header("Location: login.php");
        exit();
    }  
    $sql="select * from product where category='BOOKCASE'";
    $all_products=$con->query($sql);
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

    <!-- AOS CSS -->
    <link rel="stylesheet" href="/LuxeFurnish/aos-master/dist/aos.css">
    <!-- FAVICON ICON -->
    <link rel="icon" type="image/x-icon" href="/LuxeFurnish/img/background/LuxeFurnish..png">
</head>
<body style="background: linear-gradient(135deg, #e0f7fa 0%, #b9fbc0 100%);">
    <!-- INCLUDE NAVBAR  -->
    <?php include 'navbar.php'; ?>
    <main>
        <?php
            while($row=mysqli_fetch_assoc($all_products)){
        ?>
        <?php
            // Fetch the category from the database
            $category = strtolower($row['category']);  // Converts category to lowercase for consistency
            $imagePath = "/LuxeFurnish/img/" . $category . "/" . $row['proimage'];
        ?>
        <div class="product-card" data-aos="fade-in" data-aos-duration="1500">
            <img src="<?php echo $imagePath; ?>" alt="<?php echo $row['proname']; ?>">
            <h4><?php echo $row['proname'];?></h4>
            <div>
                <span>Price: <?php echo $row['price'];?>₹</span>
                <a href="details.php?proid=<?php echo ($row['proid']);?>">+</a>
            </div>
        </div>

        <?php
            }
        ?>
    </main>
    <!-- INCLUDE NAVBAR  -->
    <?php include 'footer.php'; ?>

    <!-- JavaScript File Link -->
    <script src="/LuxeFurnish/js/script.js"></script>

    <!-- AOS JS -->
   <script src="/LuxeFurnish/aos-master/dist/aos.js"></script>
    <!-- Initialize AOS -->
    <script>
        AOS.init();
    </script>
</body>
</html>
