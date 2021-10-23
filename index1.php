<?php
    /**
     * เปิดใช้งาน Session
     */
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
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">AppzStory Studio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
            </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                 <li class="nav-item active">
                    <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Menu <span class="sr-only">(current)</span></a>
                 </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- ตรวจสอบเงื่อนไขที่ว่า ตัวแปร $_SESSION['id'] ได้ถูกกำหนดขึ้นมาหรือไม่ -->
                    <?php if(isset($_SESSION['id'])) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     ยินดีต้อนรับ คุณ <?php echo $_SESSION['first_name']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">ออกจากระบบ</a>
                        </div>
                    </li>
                    <?php }else { ?>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="login.php">เข้าสู่ระบบ</a>
                        <a class="btn btn-warning" href="register.php">สมัครสมาชิก</a>
                    </li>
                    <?php } ?>
               </ul>
            </div>
        </div>
    </nav>

    <section id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1522202757859-7472b0973c69?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b572f100e7f9e458067066ed3171acc7&auto=format&fit=crop&w=1350&h=500&q=80" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1508690346831-ff4d6eedd23d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=eded5f9708de6103262c9b51cade5634&auto=format&fit=crop&w=1350&h=500&q=80" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1522198428577-adf2d374b05b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c8c7a9980900ca8adf70b1d9ad7487a4&auto=format&fit=crop&w=1350&h=500&q=80" alt="Third slide">
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
            <h1 class="display-4">Welcome to page</h1>
            <!-- ตรวจสอบเงื่อนไขที่ว่า ตัวแปร $_SESSION['id'] ได้ถูกกำหนดขึ้นมาหรือไม่ -->
            <?php if ( isset($_SESSION['id']) ){ ?>
            <figure class="figure">
                   <img src="uploads/<?php echo $_SESSION['picture'];?>" class="figure-img img-fluid rounded" alt="">
                   <figcaption class="figure-caption"><?php echo $_SESSION['first_name'].' '.$_SESSION['last_name'];?></figcaption>
            </figure>
            <?php } ?>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate harum accusamus placeat temporibus magnam dolorem corporis sint repellat architecto est asperiores, veritatis iste laboriosam numquam iure illum dolor, optio officiis!</p>
        </div>
    </section>

    <section class="container text-center mb-5">
        <h1 class="display-4 py-2">Playlists Video</h1>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/?listType=playlist&list=PLqJ2z9Opzq8LA5A8g5nffeus4m7uPcsze"
                frameborder="0" allowfullscreen>
            </iframe>
        </div>
    </section>

    <footer class="card bg-secondary text-white text-center p-3">
        <a href="https://line.me/R/ti/p/%40xes6269f"><img height="36" border="0" alt="เพิ่มเพื่อน" src="https://scdn.line-apps.com/n/line_add_friends/btn/en.png"></a>
        <span> COPYRIGHT © 2018 
            <a class="text-white" href="https://www.facebook.com/WebAppzStory" target="_blank">AppzStory Studio</a>
            ALL Right Reserved
        </span>
    </footer>


    <!-- ติดตั้งการใช้งาน Javascript ต่างๆ -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>