<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing</title>
    <?php include './application/views/header.php'; ?> 
</head>
<body>
  <!-- jumbotron -->

<div class="jumbotron jumbotron-fluid landing-jumbotron">
  <div class="container">
    <h1 class="display-4">Tingkatkan <span>skill</span> anda<br>dengan <span>guru</span> yang tepat</h1>
    <a href="<?php echo base_url(); ?>register" class="btn btn-primary tombol" role="button">Daftar</a>
  </div>
</div>

<!-- end jumbotron-->

<!-- container -->
<div class="container">

<!-- Info panel -->

    <div class="row justify-content-center">
        <div class="col-10 info-panel">
            <div class="row">
                <div class="col-lg">
                    <img src="<?php echo base_url(); ?>/assets/img/bg/employee.png" class="float-left" alt="employee">
                    <h4>24 Hours</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-lg">
                    <img src="<?php echo base_url(); ?>/assets/img/bg/hires.png" class="float-left" alt="hires">
                    <h4>High-Res</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-lg">
                    <img src="<?php echo base_url(); ?>/assets/img/bg/security.png" class="float-left" alt="security">
                    <h4>Security</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>

        </div>
    </div>

<!-- end info panel-->

<!-- working space-->
<div class="row workingspace">
    <div class="col-lg-6">
        <img src="<?php echo base_url(); ?>/assets/img/bg/workingspace.png" alt="workingspace" class="img-fluid">
    </div>
    <div class="col-lg-5">
        <h3>Temukan <span>kursus</span> yang sesuai dengan <span>anda</span></h3>
        <p>Terhubung dengan jutaan guru yang siap membimbing anda</p>
        <a href="#" class="btn btn-primary tombol">Gallery</a>
    </div>
</div>

<!-- end working space-->

</div>

<!-- end container-->

</body>
</html>
<?php include './application/views/footer.php' ?>