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
        background: radial-gradient(circle, #fce4ec, #e0f7fa); /* ไล่โทนสีวงกลม */
        font-family: 'Verdana', sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }

    .card {
        width: 90%;
        max-width: 500px;
        background: #ffffff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transform: scale(1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        background: linear-gradient(90deg, #f48fb1, #81d4fa);
        padding: 20px;
        text-align: center;
        color: white;
        font-size: 1.5rem;
        font-weight: bold;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    }

    .form {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
        color: #37474f;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        font-size: 1rem;
        border: 2px solid #eceff1;
        border-radius: 10px;
        background-color: #f9f9f9;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: #f48fb1;
        box-shadow: 0 0 5px rgba(244, 143, 177, 0.5);
    }

    .btn {
        width: 100%;
        padding: 12px;
        font-size: 1rem;
        font-weight: bold;
        border: none;
        border-radius: 10px;
        color: white;
        text-align: center;
        cursor: pointer;
        margin-bottom: 10px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-submit {
        background: linear-gradient(90deg, #f48fb1, #81d4fa);
    }

    .btn-submit:hover {
        background: linear-gradient(90deg, #ec407a, #29b6f6);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .btn-reset {
        background: #b0bec5;
    }

    .btn-reset:hover {
        background: #90a4ae;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .btn-back {
        display: block;
        text-align: center;
        background: #f48fb1;
        color: white;
        text-decoration: none;
        padding: 12px;
        border-radius: 10px;
    }

    .btn-back:hover {
        background: #ec407a;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .divider {
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, #f48fb1, #81d4fa);
        margin: 20px 0;
        border: none;
    }
</style>

<div class="card">
    <div class="card-header">
        แก้ไขข้อมูลพนักงาน
    </div>
    <div class="form">
        <form action="updatedata.php" method="POST">
            <input type="hidden" value="<?php echo $row['emp_id']; ?>" name="emp_id">

            <div class="form-group">
                <label for="emp_title">คำนำหน้า :</label>
                <select name="emp_title" class="form-control" required>
                    <option value="นาย" <?php if ($row['emp_title'] == 'นาย') echo 'SELECTED'; ?>>นาย</option>
                    <option value="นาง" <?php if ($row['emp_title'] == 'นาง') echo 'SELECTED'; ?>>นาง</option>
                    <option value="นางสาว" <?php if ($row['emp_title'] == 'นางสาว') echo 'SELECTED'; ?>>นางสาว</option>
                </select>
            </div>

            <div class="form-group">
                <label for="emp_name">ชื่อ :</label>
                <input type="text" name="emp_name" class="form-control" value="<?php echo $row['emp_name']; ?>" required>
            </div>

            <div class="form-group">
                <label for="emp_surname">นามสกุล :</label>
                <input type="text" name="emp_surname" class="form-control" value="<?php echo $row['emp_surname']; ?>" required>
            </div>

            <div class="form-group">
                <label for="emp_birthday">วันเดือนปีเกิด :</label>
                <input type="date" name="emp_birthday" class="form-control" value="<?php echo $row['emp_birthday']; ?>" required>
            </div>

            <div class="form-group">
                <label for="emp_adr">ที่อยู่ปัจจุบัน :</label>
                <textarea name="emp_adr" class="form-control" required><?php echo $row['emp_adr']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="emp_skill">ทักษะความสามารถ :</label>
                <textarea name="emp_skill" class="form-control" required><?php echo $row['emp_skill']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="emp_tel">เบอร์โทรศัพท์ :</label>
                <input type="tel" name="emp_tel" class="form-control" value="<?php echo $row['emp_tel']; ?>" required>
            </div>

            <div class="form-group">
                <label for="emp_user">ชื่อเข้าระบบ :</label>
                <input type="text" name="emp_user" class="form-control" value="<?php echo $row['emp_user']; ?>" required>
            </div>

            <div class="form-group">
                <label for="emp_pass">รหัสผ่าน :</label>
                <input type="password" name="emp_pass" class="form-control" value="<?php echo $row['emp_pass']; ?>" required>
            </div>

            <div class="form-group">
                <label for="emp_level">ระดับผู้ใช้งาน :</label>
                <select name="emp_level" class="form-control" required>
                    <option value="a" <?php if ($row['emp_level'] == 'a') echo 'SELECTED'; ?>>ผู้ดูแลระบบ</option>
                    <option value="u" <?php if ($row['emp_level'] == 'u') echo 'SELECTED'; ?>>ผู้ใช้งาน</option>
                </select>
            </div>

            <button type="submit" class="btn btn-submit">แก้ไขข้อมูล</button>
            <button type="reset" class="btn btn-reset">ล้างข้อมูล</button>
            <a href="index.php" class="btn-back">กลับหน้าแรก</a>
        </form>
    </div>
</div>



 
