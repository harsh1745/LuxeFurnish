<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeFurnish.</title>
    <link rel="stylesheet" type="text/css" href="/LuxeFurnish/css/style.css">
    <!-- FONTAWESOME FILE LINK  -->
	<link href="/LuxeFurnish/fontawesome/css/all.css" rel="stylesheet">
    <!-- BOOTSTRAP FILE LINK  -->
    <link rel="stylesheet" type="text/css" href="\LuxeFurnish\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/javascript" href="\LuxeFurnish\bootstrap\js\bootstrap.js">
    <!-- FAVICON ICON -->
    <link rel="icon" type="image/x-icon" href="/LuxeFurnish/img/background/LuxeFurnish..png">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>

            <div class="col-lg-6 col-md-6 form-container">
                <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                    <div class="logo-login mb-3">
                        <h1>LuxeFurnish.</h1>
                    </div>
                    <div class="heading mb-4">
                        <h4>Admin Login into your account</h4>
                    </div>
                    <form action="#" method="POST">
                        <div class="form-input">
                            <span><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="form-input">
                            <span><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="text-left mb-3">
                            <button type="submit" class="btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        session_start();
        error_reporting(0);
        include("connection.php");
        if (isset($_POST['email'])) 
        {
            $e =mysqli_real_escape_string($con, $_POST['email']);
            $p =mysqli_real_escape_string($con, $_POST['password']);
            $sql ="select * from admin where email='$e' and pass='$p'";
            $result =mysqli_query($con, $sql);
            $d =mysqli_fetch_assoc($result);
            if ($d)
            {
                $_SESSION['e']=$d['email'];
                $_SESSION['p']=$d['password'];
                echo "<script>alert('Welcome LuxeFurnish Admin');window.location.href='/LuxeFurnish/admin/index.php'</script>";
            }
            else
            {
                echo "<script>alert('Email and Password does not match.');window.location.href='adminlogin.php'</script>";
            }
        } 
    ?>

</body>

</html>