<?php
session_start();
require("dbconnect.php");
if ($_SESSION['emp_level'] != "a") {
  echo "<center>หน้าสำหรับผู้ดูแลระบบ <a href=login.php>กรุณาเข้าสู่ระบบก่อน</a></center>";
  exit();
}
if (!$_SESSION["emp_id"]) {
  header("location:login.php");
} else {

  $sqllogin = "SELECT * FROM employee WHERE emp_id='" . $_SESSION["emp_id"] . "'";
  $result = mysqli_query($con, $sqllogin);
  $row = mysqli_fetch_assoc($result);

?>
  <!doctype html>
  <html lang="en">

  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Member</title>
  </head>

  <body>
    <div class="container">
      <h2>ยินดีต้อนรับผู้ดูแลระบบ</h2>
      <p><i class='bx bx-user-voice'></i> สวัสดีคุณ <?php echo $row["emp_title"];
                                                    echo $row["emp_name"];
                                                    echo "&nbsp";
                                                    echo $row["emp_surname"]; ?> <a href="logout.php" class="bth btn-danger btn-sm"><i class='bx bx-lock-open bx-flashing'></i> Log Out</a></p>
      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th>คำนำหน้า</th>
            <th>ชื่อ</th>
            <th>สกุล</th>
            <th>วันเกิด</th>
            <th>ที่อยู่ปัจจุบัน</th>
            <th>ทักษะความสามารถ</th>
            <th>เบอร์โทรศัพท์</th>
            <th>แก้ไข</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $row["emp_title"]; ?></td>
            <td><?php echo $row["emp_name"]; ?></td>
            <td><?php echo $row["emp_surname"]; ?></td>
            <td><?php echo $row["emp_birthday"]; ?></td>
            <td><?php echo $row["emp_adr"]; ?></td>
            <td><?php echo $row["emp_skill"]; ?></td>
            <td><?php echo $row["emp_tel"]; ?></td>
            <!--แก้ไขข้อมูล-->
            <td><a href="editformdata.php?emp_id=<?php echo $row["emp_id"] ?>" class="btn btn-success">แก้ไข</a></td>
          </tr>
        </tbody>
      </table>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
<?php  } ?>

  </html>