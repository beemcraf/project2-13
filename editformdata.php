<?php
require('dbconnect.php');

$emp_id = $_GET["emp_id"];

$sql = "SELECT * FROM employee WHERE emp_id=$emp_id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  
  <style>
    body {
        background: linear-gradient(135deg, #f8d3e1, #f9f7fc); /* โทนสีชมพูอ่อน */
        font-family: 'Arial', sans-serif;
    }

    .form-signin {
        width: 100%;
        max-width: 650px;
        padding: 30px;
        margin: auto;
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        overflow-x: hidden;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
        color: #e91e63; /* สีชมพูเข้ม */
    }

    .form-control {
        border-radius: 8px;
        padding: 12px;
        font-size: 16px;
        border: 1px solid #f1c1d1; /* สีกรอบอ่อนๆ */
    }

    .form-control:focus {
        border-color: #e91e63; /* สีชมพูเมื่อโฟกัส */
        box-shadow: 0 0 5px rgba(233, 30, 99, 0.5);
    }

    .btn-custom {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border-radius: 8px;
        background-color: #e91e63;
        color: white;
        font-weight: bold;
        border: none;
    }

    .btn-custom:hover {
        background-color: #d81b60;
    }

    .btn-reset {
        padding: 12px 20px;
        font-size: 16px;
        border-radius: 8px;
        background-color: #f44336;
        color: white;
        border: none;
    }

    .btn-reset:hover {
        background-color: #d32f2f;
    }

    .btn-back {
        padding: 12px 20px;
        font-size: 16px;
        border-radius: 8px;
        background-color: #6c757d;
        color: white;
        text-decoration: none;
    }

    .btn-back:hover {
        background-color: #5a6268;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    h2 {
        font-family: 'Arial', sans-serif;
        font-weight: bold;
        color: #e91e63; /* สีชมพู */
    }

  </style>

  <title>แก้ไขข้อมูลพนักงาน</title>
</head>

<body>
  <div class="container my-3">
    <h2 class="text-center">แก้ไขข้อมูลพนักงาน</h2>
    <hr>
    <form action="updatedata.php" method="POST" class="form-signin">
      <input type="hidden" value="<?php echo $row["emp_id"]; ?>" name="emp_id">
      
      <div class="form-group">
        <label for="emp_title">คำนำหน้า :</label>
        <select name="emp_title" class="form-control" required>
          <option value="นาย" <?php if ($row["emp_title"] == "นาย") { echo "SELECTED"; } ?>>นาย</option>
          <option value="นาง" <?php if ($row["emp_title"] == "นาง") { echo "SELECTED"; } ?>>นาง</option>
          <option value="นางสาว" <?php if ($row["emp_title"] == "นางสาว") { echo "SELECTED"; } ?>>นางสาว</option>
        </select>
      </div>

      <div class="form-group">
        <label for="emp_name">ชื่อ :</label>
        <input type="text" name="emp_name" class="form-control" value="<?php echo $row["emp_name"]; ?>" required>
      </div>

      <div class="form-group">
        <label for="emp_surname">นามสกุล :</label>
        <input type="text" name="emp_surname" class="form-control" value="<?php echo $row["emp_surname"]; ?>" required>
      </div>

      <div class="form-group">
        <label for="emp_birthday">วันเดือนปีเกิด :</label>
        <input type="date" name="emp_birthday" class="form-control" value="<?php echo $row["emp_birthday"]; ?>" required>
      </div>

      <div class="form-group">
        <label for="emp_adr">ที่อยู่ปัจจุบัน :</label>
        <textarea name="emp_adr" class="form-control" required><?php echo $row["emp_adr"]; ?></textarea>
      </div>

      <div class="form-group">
        <label for="emp_skill">ทักษะความสามารถ :</label>
        <textarea name="emp_skill" class="form-control" required><?php echo $row["emp_skill"]; ?></textarea>
      </div>

      <div class="form-group">
        <label for="emp_tel">เบอร์โทรศัพท์ :</label>
        <input type="tel" name="emp_tel" class="form-control" value="<?php echo $row["emp_tel"]; ?>" required>
      </div>

      <div class="form-group">
        <label for="emp_user">ชื่อเข้าระบบ :</label>
        <input type="text" name="emp_user" class="form-control" value="<?php echo $row["emp_user"]; ?>" required>
      </div>

      <div class="form-group">
        <label for="emp_pass">รหัสผ่าน :</label>
        <input type="password" name="emp_pass" class="form-control" value="<?php echo $row["emp_pass"]; ?>" required>
      </div>

      <div class="form-group">
        <label for="emp_level">ระดับผู้ใช้งาน <i class='bx bxs-user-pin'></i></label>
        <select name="emp_level" class="form-control" required>
          <option value="a" <?php if ($row["emp_level"] == "a") { echo "SELECTED"; } ?>>ผู้ดูแลระบบ</option>
          <option value="u" <?php if ($row["emp_level"] == "u") { echo "SELECTED"; } ?>>ผู้ใช้งาน</option>
        </select>
      </div>

      <div class="my-3">
        <input type="submit" value="แก้ไขข้อมูล" class="btn btn-custom">
        <input type="reset" value="ล้างข้อมูล" class="btn btn-reset">
        <a href="index.php" class="btn btn-back">กลับหน้าแรก</a>
      </div>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
