<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <?php
        // include('register.php'); 
        session_start();
        if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){  
            header("Location: /LuxeFurnish/client/login.php");
        }
        $_SESSION['logged_in'] = true;
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>

            <div class="col-lg-6 col-md-6 form-container">
                <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                    <div class="logo-login mb-3">
                        <h1>LuxeFurnish.</h1>
                    </div>
                    <div class="heading mb-4">
                        <h4>Login into your account</h4>
                    </div>
                    <!-- onsubmit="return submitForm(this);" -->
                    <form action="#" method="POST" onsubmit="return validateLoginForm();">
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
                        <div style="color: #777">Don't have an account
                            <a href="/LuxeFurnish/client/register.php" class="register-link">Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        error_reporting(0); 
        include("connection.php"); 
        session_start();
        if(isset($_POST['email'])){  
            $e =mysqli_real_escape_string($con, $_POST['email']);
            $user =mysqli_real_escape_string($con, $_POST['username']);  
            $p =mysqli_real_escape_string($con, $_POST['password']);  
            $sql ="select * from register where useremail='$e' and userpassword='$p'";  
            $result =mysqli_query($con, $sql); 
            $d =mysqli_fetch_assoc($result);
            if($d){
                $_SESSION['logged_in'] = true;
                $_SESSION['e']=$d['useremail'];
                $_SESSION['p']=$d['password'];
                $_SESSION['user']=$d['username'];
                echo "<script>alert('Welcome to LuxeFurnish');window.location.href='/LuxeFurnish/client/index.php'</script>";  
            }
            else{  
                echo "<script>alert('email and Password does not match.');window.location.href='login.php'</script>";  
            }
        }  
    ?>

<script>
function validateLoginForm() {
    const password = document.querySelector('input[name="password"]').value;
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;

    if (!passwordRegex.test(password)) {
        alert('Password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, one number, and one special character.');
        return false;
    }
    return true;
}
</script>
</body>

</html>