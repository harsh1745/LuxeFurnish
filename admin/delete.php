<?php
    include('connection.php');
    // PRODUCT DELETE QUERY 
    if (isset($_GET['proid'])){
        extract($_GET);
        $sql ="delete from product where proid=$proid";
        mysqli_query($con, $sql);
        if (mysqli_errno($con)){
            $_SESSION['err'] = "Opps... some error occurrerd when deleting the product";
            header("Location: product.php");
        }
        else{
            $_SESSION['msg'] = "Product deleted successfully";
            header("Location: product.php");
        }
        echo "<script>alert('Delete Successfully.');window.location.href='delete.php'</script>";
    }

    // REGISTER DELETE QUERY
    if (isset($_GET['uid'])){
        extract($_GET);
        $sql ="delete from register where userid=$uid";
        mysqli_query($con, $sql);
        if (mysqli_errno($con)){
            $_SESSION['err'] = "Opps... some error occurrerd when deleting the User";
            header("Location: user.php");
        }
        else{
            $_SESSION['msg'] = "user deleted successfully";
            header("Location: user.php");
        }
        echo "<script>alert('Delete Successfully.');window.location.href='delete.php'</script>";
    }

    // FEEDBACK DELETE QUERY 
    if (isset($_GET['fid'])){
        extract($_GET);
        $sql ="delete from feedback where fid=$fid";
        mysqli_query($con, $sql);
        if (mysqli_errno($con)){
            $_SESSION['err'] = "Opps... some error occurrerd when deleting the feedback";
            header("Location: feedback.php");
        }
        else{
            $_SESSION['msg'] = "feedback deleted successfully";
            header("Location: feedback.php");
        }
        echo "<script>alert('Delete Successfully.');window.location.href='delete.php'</script>";
    }

    // CONTACT DELETE QUERY 
    if (isset($_GET['c_id'])){
        extract($_GET);
        $sql ="delete from contact where c_id=$c_id";
        mysqli_query($con, $sql);
        if (mysqli_errno($con)){
            $_SESSION['err'] = "Opps... some error occurrerd when deleting the contact";
            header("Location: admin_contact.php");
        }
        else{
            $_SESSION['msg'] = "contact deleted successfully";
            header("Location: admin_contact.php");
        }
        echo "<script>alert('Delete Successfully.');window.location.href='delete.php'</script>";
    }

    // BOOKING DELETE QUERY 
    if (isset($_GET['orderid'])){
        extract($_GET);
        $sql ="delete from booking where orderid=$orderid";
        mysqli_query($con, $sql);
        if (mysqli_errno($con)){
            $_SESSION['err'] = "Opps... some error occurrerd when deleting the order";
            header("Location: orders.php");
        }
        else{
            $_SESSION['msg'] = "contact deleted successfully";
            header("Location: orders.php");
        }
        echo "<script>alert('Delete Successfully.');window.location.href='delete.php'</script>";
    }
?>