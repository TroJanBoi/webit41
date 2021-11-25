<?php
    include 'navbar.php';
    require_once 'config.php';
    $sql = "SELECT * FROM product";
    $result = $con->query($sql);
?>
<div class="container w-50 mt-5">
    <div class="row d-flex justify-content-between">
        <div class="col-auto">
            <a href="add_product.php" class="btn btn-success mb-2">เพิ่มสินค้า</a>
        </div>
        <div class="col-auto">
            <form action="search_product.php" class="row" method="post">
                <div class="col-auto">
                    <input type="text" class="form-control" name="keyword" placeholder="ใส่หรัสหรือชื่อสินค้า">
                </div>
                <div class="col-auto">
                    <button type="submit" name="search" class="btn btn-success">ค้นหา</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header bg-danger text-white">
            ข้อมูลสินค้า
        </div>
        <div class="card-body">
            <table class=" table table-striped">
                <tr>
                    <td>ลำดับที่</td>
                    <td>รหัสสินค้า</td>
                    <td>ชื่อสินค้า</td>
                    <td>จำนวนสินค้า</td>
                    <td>ราคาสินค้า</td>
                    <td>การจัดการ</td>
                </tr>
                <?php
                    $i = 1;
                    while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['pro_id'];?></td>
                    <td><?php echo $row['pro_name'];?></td>
                    <td><?php echo $row['amount'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td>
                        <a href="edit_product.php?pro_id=<?php echo $row['pro_id'] ?>" class="btn btn-success" >แก้ไข</a>
                        <a href="del_product.php?pro_id=<?php echo $row['pro_id'] ?>" class="btn btn-danger" 
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