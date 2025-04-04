<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/style.css">

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
						<h4>Create an account</h4>
					</div>
					<form action="" method="POST" onsubmit="return validateRegisterForm();">
						<div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="text" name="name" placeholder="Full Name" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-envelope"></i></span>
							<input type="email" name="email" placeholder="Email Address" required>
						</div>
						<div class="form-input">
							<span><i class="fa-solid fa-phone"></i></span>
							<input type="text" name="phoneno" placeholder="Mobile No." required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="password" placeholder="Password" required>
						</div>
						<div class="text-left mb-3">
							<button type="submit" class="btn">Register</button>
						</div>
						<div style="color: #777">Already have an account
							<a href="login.php" class="login-link">Login here</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php  
		error_reporting(0);
		include("connection.php");
		if(isset($_POST['email'])){  
			$e =$_POST['email'];  
			$p =$_POST['password'];  
			$sql ="select * from register where useremail='$e' and userpassword='$p'";  
			$result =mysqli_query($con, $sql); 
			$d =mysqli_fetch_assoc($result); 
			if ($d) {  
				echo "<script>window.location.href='register.php'</script>";  
			}
			else{  
				$username = $_POST['name'];  
				$useremail = $_POST['email'];  
				$usermobile = $_POST['phoneno'];  
				$userpassword = $_POST['password'];  
				$sql="insert into register(username,useremail,usermobile,userpassword)values('$username','$useremail',$usermobile,'$userpassword')";  
				$result=mysqli_query($con,$sql);  
				echo "<script>alert('Register Successfully');window.location.href='login.php'</script>";  
			}  
		}  
	?>

	<script>
		function validateRegisterForm() {
    		const password = document.querySelector('input[name="password"]').value;
    		const phone = document.querySelector('input[name="phoneno"]').value;
    		const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
    		const phoneRegex = /^\d{10}$/;

    		if (!passwordRegex.test(password)) {
        		alert('Password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, one number, and one special character.');
        		return false;
    		}
    
    		if (!phoneRegex.test(phone)) {
        		alert('Phone number must be exactly 10 digits.');
        		return false;
    		}
    
    		return true;
		}		
	</script>
</body>
</html>