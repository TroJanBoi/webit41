<?php
    session_start();
    if(@!$_SESSION['emp_id']){
        echo "<script>alert('กรุณาล็อกอิน');window.location.href='login.php';</script>";
    }else{
    include 'navbar.php';
    }
?>