<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "luxefurnish";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $successMessage = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $mobile = $conn->real_escape_string($_POST['mobile']);
        $message = $conn->real_escape_string($_POST['message']);

        $sql = "INSERT INTO contact (c_name,c_email,c_mobile,c_message) VALUES ('$name', '$email', '$mobile', '$message')";

        if ($conn->query($sql) === TRUE) {
            $successMessage = "Thank you for contacting us!";
        } else {
            $successMessage = "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeFurnish</title>

    <!-- CSS LINK  -->
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/contact.css">
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/MediaQuery.css">
    <!-- Font Awesome Icons Link-->
    <link href="/LuxeFurnish/fontawesome/css/all.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="/LuxeFurnish/aos-master/dist/aos.css">
    <!-- FAVICON ICON -->
    <link rel="icon" type="image/x-icon" href="/LuxeFurnish/img/background/LuxeFurnish..png">
</head>
<body>
    <!-- INCLUDE NAVBAR  -->
    <?php include 'navbar.php'; ?>
    <div class="container" data-aos="zoom-out" data-aos-duration="1500">
        <h2>Contact Us</h2>
        <form action="" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <label for="mobile">Your Mobile Number</label>
            <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" pattern="[0-9]{10,15}" title="Please enter a valid mobile number (10-15 digits)" required>
            <label for="message">Your Message</label>
            <textarea id="message" name="message" placeholder="Enter your message..." required></textarea>
            <input type="submit" value="Send Message">
        </form>
    </div>
    <!-- INCLUDE NAVBAR  -->
    <?php include 'footer.php'; ?>
    <!-- JavaScript File Link -->
    <script src="/LuxeFurnish/js/script.js"></script>
    <script>
        window.onload = function() {
            var successMessage = "<?php echo addslashes($successMessage); ?>";
            if (successMessage.trim() !== "") {
                alert(successMessage);
            }
        };
    </script>
    <!-- AOS JS -->
    <script src="/LuxeFurnish/aos-master/dist/aos.js"></script>
    <!-- Initialize AOS -->
    <script>
        AOS.init();
    </script>
</body>
</html>
