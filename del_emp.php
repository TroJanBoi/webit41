<?php
    require_once 'config.php';
    $selected_id = $_GET['emp_id'];
    $del_data = $con->query("DELETE FROM employee WHERE emp_id = '$selected_id'");
    if(!$del_data){
        echo "<script>alert('ERROR : ไม่สามารถเพิ่มข้อมูลได้ กรุณาตรวจสอบข้อผิดพลาด');window.history.back();</script>";   
    }else{
        echo "<script>window.location.href='employee.php';</script>";
    }
?>