<?php
    session_start();
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){  
        header('Location: /LuxeFurnish/client/login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeFurnish.</title>

    <!-- CSS Link  -->
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/style.css">
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/MediaQuery.css">

    <!-- Font Awesome Icons Link-->
    <link href="/LuxeFurnish/fontawesome/css/all.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="/LuxeFurnish/aos-master/dist/aos.css">

    <link rel="icon" type="image/x-icon" href="/LuxeFurnish/img/background/LuxeFurnish..png">

</head>

<body onload="load()">

    <!-- loading bar -->
    <div id="loading"></div>

    <!-- include file  -->
    <?php include 'navbar.php'; ?>
    <div class="home-container">
        <div class="home-img">
            <div class="left-con-section">
            <h1 id="des-home-con">Discover<br>
                Customizable<br>
                Furniture</h1>
            <p id="des-home-con-1">Our furniture
                blends contemporary aesthetics with timeless
                elegance, ensuring your
                space looks chic and
                sophisticated.</p>
        </div>
    </div>
    <div class="pro-category">
        <h2 class="cate-name">Shop by category</h2>
        <div class="hl"></div>
        <div class="all-products" data-aos="fade-up">
            <div class="gallery">
                <a href="/LuxeFurnish/client/sofas.php">
                    <img src="/LuxeFurnish/img/sofas/sofa_1.png" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Sofas</div>
            </div>
        </div>
        <div class="all-products" data-aos="fade-up" data-aos-duration="1000">
            <div class="gallery">
                <a href="/LuxeFurnish/client/tables.php">
                    <img src="/LuxeFurnish/img/tables/table_46.png" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Tables</div>
            </div>
        </div>
        <div class="all-products" data-aos="fade-up" data-aos-duration="1200">
            <div class="gallery">
                <a href="/LuxeFurnish/client/chair.php">
                    <img src="/LuxeFurnish/img/chairs/chair_6.png" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Chair</div>
            </div>
        </div>
        <div class="all-products" data-aos="fade-up" data-aos-duration="1400">
            <div class="gallery">
                <a href="/LuxeFurnish/client/beds.php">
                    <img src="/LuxeFurnish/img/beds/beds.png" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Beds</div>
            </div>
        </div>
        <div class="all-products" data-aos="fade-up" data-aos-duration="1600">
            <div class="gallery">
                <a href="/LuxeFurnish/client/lamps.php">
                    <img src="/LuxeFurnish/img/lamps/lamp_49.png" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Lamps</div>
            </div>
        </div>
        <div class="all-products" data-aos="fade-up" data-aos-duration="1800">
            <div class="gallery">
                <a href="/LuxeFurnish/client/bookcase.php">
                    <img src="/LuxeFurnish/img/bookcase/bookcase.png" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Bookcase</div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="featured-collection">
        <div class="feature-name-wrapper">
            <h2 class="feature-name-coll">Featured Collection</h2>
        </div>
        <div class="product" data-aos="fade-up">
            <a href="tables.php">
                <img src="/LuxeFurnish/img/tables/table_49.jpeg" alt="Coffee Table">
            </a>
            <p id="pro-name">Coffee Table</p>
            <p>899 ₹</p>
        </div>
        <div class="product" data-aos="fade-up" data-aos-duration="1000">
            <a href="lamps.php">
                <img src="/LuxeFurnish/img/lamps/lamp_32.jpeg" alt="Clock">
            </a>
            <p id="pro-name">Lamps</p>
            <p>1299 ₹</p>
        </div>
        <div class="product" data-aos="fade-up" data-aos-duration="1500">
            <a href="bookcase.php">
                <img src="/LuxeFurnish/img/bookcase/bookcase_42.jpeg" alt="Floor Lamp">
            </a>
            <p id="pro-name">Bookcase</p>
            <p>2999 ₹</p>
        </div>
        <div class="product" data-aos="fade-up">
            <a href="tables.php">
                <img src="/LuxeFurnish/img/tables/table_44.jpeg" alt="Coffee Table">
            </a>
            <p id="pro-name">Nesting Tables</p>
            <p>999 ₹</p>
        </div>
        <div class="product" data-aos="fade-up" data-aos-duration="1000">
            <a href="chair.php">
                <img src="/LuxeFurnish/img/chairs/chair_11.jpeg" alt="Clock">
            </a>
            <p id="pro-name">Cushioned Seat Stool</p>
            <p>499 ₹</p>
        </div>
        <div class="product" data-aos="fade-up" data-aos-duration="1500">
            <a href="tables.php">
                <img src="/LuxeFurnish/img/tables/table_48.jpeg" alt="Floor Lamp">
            </a>
            <p id="pro-name">Vintage Industrial Desk Set</p>
            <p>1199 ₹</p>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="about-wrap">
        <div class="about-left" data-aos="zoom-in" data-aos-duration="1000">
            <img src="/LuxeFurnish/img/background/group-about.png" alt="">
        </div>
        <div class="about-right">
            <h3 class="about-title" data-aos="flip-down" data-aos-duration="1000">
                Creating your perfect living space
            </h3>
            <p class="about-text" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="300">
            Welcome to Luxefurnish, where we bring your dream living spaces to life. Whether you're looking to refresh a room or completely redesign your home, our collection of stylish and modern furniture is crafted to turn your vision into reality. We believe that every detail matters, and our mission is to create spaces that are not just beautiful but also reflect your unique personality and lifestyle. Explore our range of carefully curated pieces and let us help you create a space that you’ll love to come home to every day
            </p>
            <button class="btn-About" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="300"><a href="about.php">About</a></button>
        </div>
    </div>
    <div class="feature-section">
        <div class="w-container feature-container w-layout-container">
            <div class="feature-wrap">
                <div class="feature-block" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100">
                    <div class="feature-image">
                        <img src="/LuxeFurnish/img/svg/Sustainable.svg" alt="" class="feature-icon">
                    </div>
                    <div class="feature-info">
                        <div class="feature-number">01</div>
                        <div class="feature-name">Sustainable Materials</div>
                        <p>Aenean facilisis ut aliquet tincidunt elit montes blandit quis id urna amet.</p>
                    </div>
                </div>
                <div class="feature-block" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300">
                    <div class="feature-image">
                        <img src="/LuxeFurnish/img/svg/Warranty.svg" alt="" class="feature-icon">
                    </div>
                    <div class="feature-info">
                        <div class="feature-number">02</div>
                        <div class="feature-name">Warranty Included</div>
                        <p>Elit pharetra tempus nisi faucibus in mattis nibh urna maecenas.</p>
                    </div>
                </div>
                <div class="feature-block" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="500">
                    <div class="feature-image">
                        <img src="/LuxeFurnish/img/svg/Delivery.svg" alt="" class="feature-icon">
                    </div>
                    <div class="feature-info">
                        <div class="feature-number">03</div>
                        <div class="feature-name">Delivery & Shipping</div>
                        <p>Sagittis nullam risus orci nunc sit. Sed amet varius nec enim donec.</p>
                    </div>
                </div>
                <div class="feature-block" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="700">
                    <div class="feature-image">
                        <img src="/LuxeFurnish/img/svg/Eco-Friendly.svg" alt="" class="feature-icon">
                    </div>
                    <div class="feature-info">
                        <div class="feature-number">04</div>
                        <div class="feature-name">Eco-Friendly Fabrics</div>
                        <p>Nunc curabitur tortor non ridiculus massa sed.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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