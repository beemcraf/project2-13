<!doctype html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <style>
    .form-signin {
      width: 100%;
      max-width: 500px;
      padding: 15px;
      margin: auto;
    }
  </style>
  <title>บันทึกข้อมูลพนักงาน</title>
</head>

<body>
  <div class="container">
    <?php 
    ?>
    <h2 class="text-center">บันทึกข้อมูลพนักงาน</h2>
    <hr>
    <form action="insertdata.php" method="POST" class="form-signin">
      <div class="form-group">
        <label for="emp_title">คำนำหน้า :</label>
        <select name="emp_title" class="form-control" required>
          <option value="นาย">นาย</option>
          <option value="นาง">นาง</option>
          <option value="นางสาว">นางสาว</option>
        </select>
      </div>
      <div class="form-group">
        <label for="emp_name">ชื่อ :</label>
        <input type="text" name="emp_name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_surname">นามสกุล :</label>
        <input type="text" name="emp_surname" class="form-control">
      </div>
      <div class="form-group">
        <label for="emp_birthday">วันเดือนปีเกิด :</label>
        <input type="date" name="emp_birthday" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_adr">ที่อยู่ :</label>
        <textarea name="emp_adr" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="emp_skill">ทักษะพิเศษ :</label>
        <textarea name="emp_skill" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="emp_tel">เบอร์โทรศัพท์</label>
        <input type="tel" name="emp_tel" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_user">ชื่อเข้าระบบ</label>
        <input type="tel" name="emp_user" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_pass">รหัสผ่าน</label>
        <input type="password" name="emp_pass" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_level">ระดับผู้ใช้งาน <i class='bx bxs-user-pin'></i></label>
        <select name="emp_level" class="form-control" required>
          <option value="">--เลือกระดับผู้ใช้งาน--</option>
          <option value="a">ผู้ดูแลระบบ</option>
          <option value="u">ผู้ใช้งาน</option>
        </select>
      </div>
      <div class="my-3">
        <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
        <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
        <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
      </div>
    </form>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  
</body>

</html>