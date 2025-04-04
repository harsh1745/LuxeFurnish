<?php 
    include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeFurnish</title>
    <!-- CSS Link  -->
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/style.css">
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/MediaQuery.css">

    <!-- Font Awesome Icons Link-->
    <link href="/LuxeFurnish/fontawesome/css/all.css" rel="stylesheet">

</head>
<body>
    <div class="nav" id="navbar">
        <a href="index.php" class="logo">LuxeFurnish.</a>
        <div class="nav-links" id="nav-links">
            <a href="index.php">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Shop
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="dropdown-content" id="myDropdown">
                    <a href="/LuxeFurnish/client/sofas.php">Sofas</a>
                    <a href="tables.php">Tables</a>
                    <a href="chair.php">Chair</a>
                    <a href="beds.php">Beds</a>
                    <a href="lamps.php">Lamps</a>
                    <a href="bookcase.php">Bookcase</a>
                    <a href="wardrobes.php">Wardrobes</a>
                    <a href="gardentable.php">Garden Tables</a>
                    <a href="shoeracks.php">Shoe Racks</a>
                    <a href="all-product.php">More +</a>
                </div>
            </div>
            <a href="about.php">About Us</a>
            <a href="service.php">Service</a>
            <a href="contact.php">Contact Us</a>
            <a href="c_feedback.php">Feedback</a>
        </div>

        <div class="icons">
            <button class="openBtn" onclick="openSearch()"><i class="fa fa-search"></i></button>
            <div id="user-btn" class="fas fa-user icon"></div>
            <div class="user-box">
                <p>Username : <span><?php echo $_SESSION['user']; ?></span></p>
                <p>Email : <span><?php echo $_SESSION['e']; ?></span></p>
                <a href="logout.php" class="delete-btn">Logout</a>
            </div>
            <a href="/LuxeFurnish/client/logout.php/" class="icon"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
        
        <div id="myOverlay" class="overlay">
            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
            <div class="overlay-content">
                <form action="javascript:void(0);" onsubmit="searchKeyword()">
                    <input type="text" placeholder="Search.." name="search" id="input-box">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <div class="result-box">
                </div>
            </div>
        </div>
        <!-- side Bar -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Home</a>
            <a href="#" onclick="SidebarDrop()" class="dropbtn1">Shop <i class="fa-solid fa-chevron-down"></i></a>
            <div id="myDropdown1" class="dropdown-content1">
                <a href="sofas.php">Sofas</a>
                <a href="tables.php">Tables</a>
                <a href="chair.php">Chair</a>
                <a href="beds.php">Beds</a>
                <a href="lamps.php">Lamps</a>
                <a href="bookcase.php">Bookcase</a>
                <a href="wardrobes.php">Wardrobes</a>
                <a href="gardentable.php">Garden Tables</a>
                <a href="shoeracks.php">Shoe Racks</a>
                <a href="all-product.php">More +</a>
            </div>
            <a href="about.php">About Us</a>
            <a href="blog.php">Service</a>
            <a href="contact.php">Contact Us</a>
            <a href="c_feedback.php">Feedback</a>
            <div class="icons">
                <button class="openBtn" id="openBtn-hover" onclick="openSearch()"
                    style="display: block; margin-top: 10px;font-size: 1.5rem;"><i class="fa fa-search"></i></button>
                <!-- <a href="#" class="icon" style="margin-top: 10px;"><i class="fas fa-user"></i></a> -->
                <a href="#" class="icon" style="margin-top: 10px;"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
        <span id="menu-span" onclick="openNav()">&#9776;</span>
    </div>
    <!-- JavaScript File Link -->
    <script src="/LuxeFurnish/js/script.js"></script>
</body>
</html>