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
        $feedback = $conn->real_escape_string($_POST['feedback']);
        $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$feedback')";
        if ($conn->query($sql) === TRUE) {
            $successMessage = "Thank you for your feedback!";
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
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/feedback.css">
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/MediaQuery.css">
    <!-- FAVICON ICON -->
    <link rel="icon" type="image/x-icon" href="/LuxeFurnish/img/background/LuxeFurnish..png">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="/LuxeFurnish/aos-master/dist/aos.css">

</head>
<body>
    <!-- INCLUDE NAVBAR  -->
    <?php include 'navbar.php'; ?>
    <div class="container" data-aos="zoom-out" data-aos-duration="1500">
        <h2>We Value Your Feedback</h2>
        <form action="" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <label for="feedback">Your Feedback</label>
            <textarea id="feedback" name="feedback" placeholder="Share your experience..." required></textarea>
            <input type="submit" value="Submit Feedback">
        </form>
    </div>
    <!-- INCLUDE NAVBAR  -->
    <?php include 'footer.php'; ?>

    <!-- JavaScript File Link -->
    <script src="/LuxeFurnish/js/script.js"></script>

    <script>
        window.onload = function() {
            var successMessage = "<?php echo addslashes($successMessage); ?>"; // escaping quotes
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