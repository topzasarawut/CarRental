<?php 
  include_once('php/connect.php');
  session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Rental Office By Neverdie ๘ Studio</title>
    <!-- ติดตั้งการใช้งาน CSS ต่างๆ -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <style>body,section{font-family: 'Prompt', sans-serif;}</style>
    
</head>
<body>
    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>
    

<!-- Page Content -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <br>
          <!-- <h3 class="card-title d-inline-block">ระบบยืนยันการเพื่อยืนยันการเข้าใช้งานห้องสมุด <br> สำนักวิทยบริการและเทคโนโลยีสารสนเทศ มหาวิทยาลัยราชภัฏชัยภูมิ</h3>           -->
        </div>
            <br><br>
      </div>            
        <!-- </section> -->

        <?php
          $sql = "SELECT * FROM `cars`";
          $result = $conn->query($sql);
        ?>

      <!-- /.card-header -->
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-striped">
            <thead>
            <h5 class="card-title">รถยนต์</h5>
            <tr>
                <th scope="col">ทะเบียนรถ</th>
                <th scope="col">หมวดหมู่รถ</th>
                <th scope="col">ยี่ห้อ</th>
                <th scope="col">รุ่น</th>
            </tr>
            </thead>

            <tbody>
            <?php 
            $num = 0;
            while ($row = $result->fetch_assoc()) {
              $num++;
              ?>
              <tr>
                  <td><?php echo $row['carreg']; ?></td>
                  <td><?php echo $row['category']; ?></td>
                  <td><?php echo $row['brand']; ?></td>
                  <td><?php echo $row['gen']; ?></td>
                <!-- <td>
                  <a href="form-create.php" class="btn btn-sm btn-warning text-white">
                    <i class="fas fa-edit"></i> ยืนยัน
                  </a> 
                </td> -->
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


    <!-- Section Footer -->
    <?php include_once('includes/footer.php') ?>


    <!-- ติดตั้งการใช้งาน Javascript ต่างๆ -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</body>
</html>
