<?php
require('dbconnect.php');

$sql = "SELECT department.d_name,employee.emp_title,employee.emp_name,employee.emp_surname,employee.emp_id, employee.emp_tel FROM department INNER JOIN employee ON department.d_id = employee.d_id";

$result = mysqli_query($con, $sql); 

$count = mysqli_num_rows($result); 
$order = 1; 
?>

<!doctype html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>รายชื่อพนักงานทั้งหมด</title>
</head>

<body>
  <div class="container">
    <?php
    require("nav.php");
    ?>
    <h1 class="text-center mt-3">รายชื่อพนักงานทั้งหมด</h1>
    <form action="searchdata1.php" class="form-group my-3" method="POST">
      <div class="row">
        <div class="col-6">
          <input type="text" placeholder="กรอกชื่อหรือนามสกุลที่ต้องการค้น" class="form-control" name="emp_data" required>
        </div>
        <div class="col-6">
          <input type="submit" value="ค้นหาข้อมูลพนักงาน" class="btn btn-info">
        </div>
      </div>

    </form>
    <table class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>คำนำหน้า</th>
          <th>ชื่อ</th>
          <th>สกุล</th>
          <th>เบอร์โทรศัพท์</th>
          <th>แผนก</th>


        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $order++; ?></td>
            <td><?php echo $row["emp_title"]; ?></td>
            <td><?php echo $row["emp_name"]; ?></td>
            <td><?php echo $row["emp_surname"]; ?></td>
            <td><?php echo $row["emp_tel"]; ?></td>
            <td><?php echo $row["d_name"]; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <a href="insertform.php" class="btn btn-success">กรอกข้อมูลพนักงาน</a>

  </div>


  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  
</body>

</html>