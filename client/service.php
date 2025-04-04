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
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/service.css">
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/MediaQuery.css">
    <!-- Font Awesome Icons Link-->
    <link href="/LuxeFurnish/fontawesome/css/all.css" rel="stylesheet">

    <!-- FAVICON ICON -->
    <link rel="icon" type="image/x-icon" href="/LuxeFurnish/img/background/LuxeFurnish..png">
        <!-- AOS CSS -->
        <link rel="stylesheet" href="/LuxeFurnish/aos-master/dist/aos.css">
</head>
<body>
    <!-- INCLUDE NAVBAR  -->
    <?php include 'navbar.php'; ?>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100">
            <h1>Our Services</h1>
            <p>Bringing Excellence to Every Space</p>
        </div>
    </section>
    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content">
                <div class="overview-icon">
                    <i class="fas fa-couch" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="300"></i>
                </div>
                <div class="overview-text-service">
                    <h2 data-aos="flip-down" data-aos-duration="1000" data-aos-delay="100">What We Offer</h2>
                    <p data-aos="flip-down" data-aos-duration="1000" data-aos-delay="300">At Luxefurnish, we offer a range of premium services to meet your furniture needs. From personalized design consultations to bespoke furniture creations, our services are designed to make your home as beautiful and functional as possible. Explore our offerings and discover how we can help transform your space.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Services -->
    <section class="services">
        <div class="container">
            <h2 data-aos="flip-down" data-aos-duration="1000" data-aos-delay="300">Our Services</h2>
            <div class="service-items">
                <div class="service-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="100">
                    <i class="fas fa-pencil-ruler"></i>
                    <h3>Custom Furniture Design</h3>
                    <p>We provide tailored furniture design services to meet your specific requirements and preferences.</p>
                </div>
                <div class="service-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="300">
                    <i class="fas fa-truck"></i>
                    <h3>Delivery & Installation</h3>
                    <p>Enjoy hassle-free delivery and professional installation of your new furniture pieces.</p>
                </div>
                <div class="service-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="500">
                    <i class="fas fa-recycle"></i>
                    <h3>Furniture Restoration</h3>
                    <p>Our experts restore and revitalize old furniture, giving it a new lease on life.</p>
                </div>
                <div class="service-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="700">
                    <i class="fas fa-thumbs-up"></i>
                    <h3>Customer Support</h3>
                    <p>We are committed to providing excellent customer service and support before, during, and after your purchase.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Benefits -->
    <section class="service-benefits">
        <div class="container">
            <h2 data-aos="flip-down" data-aos-duration="1000" data-aos-delay="300">Why Choose Us?</h2>
            <div class="benefits-list">
                <div class="benefit-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="100">
                    <i class="fas fa-star"></i>
                    <h3>High-Quality Materials</h3>
                    <p>We use only the finest materials to ensure durability and longevity.</p>
                </div>
                <div class="benefit-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="300">
                    <i class="fas fa-handshake"></i>
                    <h3>Personalized Service</h3>
                    <p>Our team offers personalized consultations to bring your vision to life.</p>
                </div>
                <div class="benefit-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="500">
                    <i class="fas fa-clock"></i>
                    <h3>Timely Delivery</h3>
                    <p>We ensure that your orders are delivered on time, every time.</p>
                </div>
                <div class="benefit-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="700">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Exceptional Warranty</h3>
                    <p>Our products come with an extensive warranty for your peace of mind.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQs -->
    <section class="faqs">
        <div class="container">
            <h2 data-aos="flip-down" data-aos-duration="1000" data-aos-delay="100">Frequently Asked Questions</h2>
            <div class="faq-items">
                <div class="faq-item" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="100">
                    <h3>What is the process for a custom furniture design?</h3>
                    <p>We start with a consultation to understand your needs and preferences, followed by design drafts and revisions. Once the design is finalized, we proceed with the production and delivery.</p>
                </div>
                <div class="faq-item" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="300">
                    <h3>How long does delivery and installation take?</h3>
                    <p>Delivery times vary based on your location and the complexity of the installation. Typically, it takes 1-2 weeks from the date of order to complete the delivery and installation.</p>
                </div>
                <div class="faq-item" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="500">
                    <h3>Do you offer a warranty on your furniture?</h3>
                    <p>Yes, all our furniture comes with a warranty covering defects in materials and workmanship. Please refer to our warranty policy for more details.</p>
                </div>
                <div class="faq-item" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="700">
                    <h3>Can I return or exchange furniture?</h3>
                    <p>We accept returns and exchanges within a specified period, subject to certain conditions. Please contact our customer support for more information on our return and exchange policy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- INCLUDE FOOTER -->
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
