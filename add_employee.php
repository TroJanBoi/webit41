<?php
    include 'navbar.php';
    require_once 'config.php';  
    if(isset($_POST['submit'])){
        $emp_id = $_POST['emp_id'];
        $emp_name = $_POST['emp_name'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        if($emp_id=='' || $emp_name=='' || $tel=='' || $email==''){
            echo "<script>alert('คุณยังไม่ได้กรอกข้อมูล');</script>";
        }else{
            $sql = "INSERT INTO employee VALUES('$emp_id','$emp_name','$tel','$email')";
            $result = $con->query($sql);
            if(!$result){
                echo "<script>alert('ERROR : ไม่สามารถเพิ่มข้อมูลได้ กรุณาตรวจสอบข้อผิดพลาด');</script>";   
            }else{
                echo "<script>window.location.href='employee.php';</script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container w-25 mt-5">
        <div class="card">
            <div class="card-header bg-dark text-white">
                เพิ่มข้อมูลพนักงาน
            </div>
            <div class="card-body">
                <form action="<?php $_SERVER['PHP_SELF']?>" method ="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">รหัสพนักงาน</label>
                        <input type="text" class="form-control" name="emp_id">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">ชื่อพนักงาน</label>
                        <input type="text" class="form-control" name="emp_name">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">เบอร์โทรศัพ</label>
                        <input type="text" class="form-control" name="tel">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">อีเมล</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"></label>
                        <input type="submit" class="btn btn-success" name="submit" value="Confirm">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>