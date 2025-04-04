<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeFurnish</title>
    <!-- CSS LINK  -->
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/about.css">
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/MediaQuery.css">

    <!-- Font Awesome iconnns Link-->
    <link href="/LuxeFurnish/fontawesome/css/all.css" rel="stylesheet">
    <!-- FAVICON ICON -->
    <link rel="icon" type="image/x-icon" href="/LuxeFurnish/img/background/LuxeFurnish..png">
        <!-- AOS CSS -->
        <link rel="stylesheet" href="/LuxeFurnish/aos-master/dist/aos.css">
</head>
<bodyz>
    <!-- INCLUDE NAVBAR  -->
    <?php include 'navbar.php'; ?>

    <section class="hero">
        <div class="hero-content" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100">
            <h1>About Luxefurnish</h1>
            <p>Elevating Spaces with Style</p>
        </div>
    </section>
    <!-- Company Overview -->
    <section class="company-overview">
        <div class="container">
            <div class="overview-content">
                <div class="overview-icon">
                    <i class="fas fa-couch" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="300"></i> 
                </div>
                <div class="overview-text">
                    <h2 data-aos="flip-down" data-aos-duration="1000" data-aos-delay="100">Who We Are</h2>
                    <p data-aos="flip-down" data-aos-duration="1000" data-aos-delay="300">At Luxefurnish, we provide high-quality furniture that combines elegance and comfort. Our pieces are designed to enhance your living spaces with style and sophistication. Our team is dedicated to curating a collection that reflects the latest trends and timeless classics, ensuring that every piece you choose is not just furniture, but a statement.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Mission and Vision -->
    <section class="mission-vision">
        <div class="container">
            <div class="mission" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                <div class="iconnn">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h2>Our Mission</h2>
                <p>To offer luxury furniture that transforms your home into a haven of comfort and style.</p>
            </div>
            <div class="vision" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                <div class="iconnn">
                    <i class="fas fa-eye"></i>
                </div>
                <h2>Our Vision</h2>
                <p>To be a leading name in luxury furniture, known for quality, design, and innovation.</p>
            </div>
        </div>
    </section>
    <!-- Our Journey -->
    <section class="journey">
        <div class="container">
            <h2 data-aos="flip-down" data-aos-duration="1000" data-aos-delay="100">Our Journey</h2>
            <div class="timeline">
                <div class="event" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="100">
                    <div class="iconnn">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <div class="date">2020</div>
                    <div class="description">Luxefurnish was founded with a vision to redefine home decor.</div>
                </div>
                <div class="event" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="200">
                    <div class="iconnn">
                        <i class="fas fa-expand"></i>
                    </div>
                    <div class="date">2021</div>
                    <div class="description">Expanded our collection and began shipping internationally.</div>
                </div>
                <div class="event" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="300">
                    <div class="iconnn">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="date">2022</div>
                    <div class="description">Awarded for excellence in design and innovation.</div>
                </div>
            </div>
        </div>
    </section>
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

</bodyz>
</html>