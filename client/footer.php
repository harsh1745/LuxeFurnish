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


    <!-- FAVICON ICON -->
    <link rel="icon" type="image/x-icon" href="/LuxeFurnish/img/background/LuxeFurnish..png">

    <!-- AOS Animation CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <footer>
        <div>
            <span class="logo">LuxeFurnish.</span>
        </div>

        <div class="row">
            <div class="col-3">
                <div class="link-cat" onclick="footerToggle(this)">
                    <span class="footer-toggle"></span>
                    <span class="footer-cat">Menus</span>
                </div>
                <ul class="footer-cat-links">
                    <li><a href="index.php"><span>Home</span></a></li>
                    <li><a href="about.php"><span>About Us</span></a></li>
                    <li><a href="service.php"><span>Service</span></a></li>
                    <li><a href="contact.php"><span>Contact Us</span></a></li>
                </ul>
            </div>
            <div class="col-3">
                <div class="link-cat" onclick="footerToggle(this)">
                    <span class="footer-toggle"></span>
                    <span class="footer-cat">Shops</span>
                </div>
                <ul class="footer-cat-links">
                    <li><a href="sofas.php"><span>Sofas</span></a></li>
                    <li><a href="tables.php"><span>Tables</span></a></li>
                    <li><a href="chairs.php"><span>Chair</span></a></li>
                    <li><a href="beds.php"><span>Beds</span></a></li>
                    <li><a href="lamps.php"><span>Lamps</span></a></li>
                    <li><a href="bookcase.php"><span>Bookcase</span></a></li>
                    <li><a href="wardrobes.php">Wardrobes</a></li>
                    <li><a href="gardentable.php">Garden Tables</a></li>
                    <li><a href="shoeracks.php">Shoe Racks</a></li>
                </ul>
            </div>
            <div class="col-3" id="newsletter">

                <div id="address">
                    <span>Office Location</span>
                    <ul>
                        <li>
                            <i class="fa-regular fa-building"></i>
                            <div>Mumbai<br />
                            Plot No. 123, Sector 10,Near Central Park,Panvel, Navi Mumbai,Maharashtra, 410206, India</div>
                        </li><br>
                        <li>
                            <i class="fa-regular fa-building"></i>
                            <div>Jamnagar<br />
                            Patel Colony Road No. 4,Near joggers Park,Patel Colony,Jamnagar, Gujarat, 361008, India</div>
                        </li>
                    </ul>
                </div>
                <div class="footer-pic">
                    <img src="/LuxeFurnish/img/background/footer-chair.png" alt="footer-chair">
                </div>

            </div>
        </div>
        <div id="copyright">
            &copy; All Rights Reserved 2023-2024
        </div>
    </footer>
    <script src="/LuxeFurnish/jquery/jquery.min.js"></script>
    <script src="/LuxeFurnish/js/script.js"></script>
</body>

</html>