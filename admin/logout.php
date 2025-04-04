<?php 
    session_start();
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){  
    header("Location: /LuxeFurnish/admin/adminlogin.php");
    exit();
    }
    session_destroy();
    echo "<script>alert('Logout Successfully');window.location.href='/LuxeFurnish/admin/adminlogin.php/'</script>";
?>