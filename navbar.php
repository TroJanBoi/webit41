<?php
  require_once 'config.php';
  $session_id = $_SESSION['emp_id'];
  $old_data=mysqli_fetch_array($con->query("SELECT * FROM employee WHERE emp_id = '$session_id'"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ระบบจัดการร้านค้าออนไลน์</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="employee.php">การจัดการพนักงาน</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="product.php">การจัดการสินค้า</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link"><?php echo $old_data['emp_name'] ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-success " href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>