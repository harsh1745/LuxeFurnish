<?php 
    session_start();
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){  
    header("Location: /LuxeFurnish/client/login.php");
    exit();
    }
    session_destroy();
    echo "<script>alert('Logout Successfully');window.location.href='/LuxeFurnish/client/login.php/'</script>";
?>

