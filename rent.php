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
    <title>HOME</title>
    <!-- ติดตั้งการใช้งาน CSS ต่างๆ -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <style>body,section{font-family: 'Prompt', sans-serif;}</style>
</head>
<body>

    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>

    <section id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1553260168-69b041873e65?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&h=500&q=80" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1536617621572-1d5f1e6269a0?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&h=500&q=80" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1554744512-d6c603f27c54?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&h=500&q=80" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>
    
    <section class="jumbotron">
        <div class="container text-center">
            <h1 class="display-4">วิธีการเช่ารถ ช่องทางการชำระเงิน</h1>
            <p class="lead">

            </p>
        </div>
    </section>
    
    <!-- row 0-->
    <div class="row">        
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">รายละเอียดการเช่ารถ ช่องทางการชำระเงิน</h5>
                        <P ALIGN="LEFT"><h6>วิธีการเช่ารถ</h6>
                            1.วิธีการเช่ารถ
                            2.วิธีการเช่ารถ
                            3.วิธีการเช่ารถ
                            4.วิธีการเช่ารถ
                            5.วิธีการเช่ารถ

                            ช่องทางการชำระเงิน
                            1.เงินสด
                            2.บัตรเครดิต
                            3.QRCODE
                        </P>
                    </div>
                    </div>
                </div>   
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">รายละเอียดการเช่ารถ</h5>
                        <P ALIGN="LEFT"><h6>รายละเอียดการเช่ารถ</h6>
                        <P> 
                            ค่าเช่า 19,000.00 บาท/วัน
                            กระเป๋า: 3
                            ประตู: 4
                            โดยสาร: 4
                            หลักประกัน 10,000 บาท
                            สิ่งที่จะได้เมื่อตอนรับรถ น้ำมันเต็มถัง
                            อื่นๆ....
                        </P>
                    </div>
                    </div>
                </div>
    </div>         
        <!-- </section> -->

    <!-- Section Footer -->
    <?php include_once('includes/footer.php') ?>


    <!-- ติดตั้งการใช้งาน Javascript ต่างๆ -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>