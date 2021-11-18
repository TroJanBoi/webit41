<?php
    require_once 'config.php';
    $selected_id = $_GET['pro_id'];
    $del_data = $con->query("DELETE FROM product WHERE pro_id = '$selected_id'");
    if(!$del_data){
        echo "<script>alert('ERROR : ไม่สามารถเพิ่มข้อมูลได้ กรุณาตรวจสอบข้อผิดพลาด');window.history.back();</script>";   
    }else{
        echo "<script>window.location.href='product.php';</script>";
    }
?>