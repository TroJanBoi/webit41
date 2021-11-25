<?php
    include 'navbar.php';
    require_once 'config.php';
    $keyword = $_POST['keyword'];
    $sql="SELECT * FROM employee WHERE emp_id like'%$keyword%' or emp_name like'%$keyword%'";
    $result=$con->query($sql);
?>
<div class="container w-65 mt-5">
    <div class="row d-flex justify-content-between">
        <div class="col-auto">
            <a href="add_emp.php" class="btn btn-success mb-3">เพิ่มข้อมูล</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header bg-primary text-white">ข้อมูลพนักงาน</div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <td>ลำดับที่</td>
                    <td>รหัสพนักงาน</td>
                    <td>Username</td>
                    <td>ชื่อพนักงาน</td>
                    <td>เบอร์โทร</td>
                    <td>อีเมล</td>
                    <td>การจัดการ</td>
                </tr>
                <?php
                 $i = 1;   
                   while($row = mysqli_fetch_array($result))
                   {                
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['emp_id']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['emp_name']?></td>
                    <td><?php echo $row['tel']?></td>
                    <td><?php echo $row['email']?></td>
                    <td>
                        <a href="edit_emp.php?emp_id=<?php echo $row['emp_id']?>" class="btn btn-success">แก้ไข</a>
                        <a href="del_emp.php?emp_id=<?php echo $row['emp_id']?>" class="btn btn-danger" 
                        onclick="return confirm('ยืนยันการลบ?')">ลบ</a>
                    </td>
                </tr>
                <?php
                    $i++;
                   }
                ?>
            </table>
        </div>
    </div>
</div>