<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <?php include './application/views/header.php'; ?> 
</head>
<body>
<div class="container">
      <div class="row justify-content-center">
            <div class="col-lg-10">
            <div class="media">
            <img class="align-self-start mr-3 rounded-circle profil-photo" src="<?php echo base_url();?>assets/img/user.png" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0"><?php echo $this->session->userdata('nama'); ?></h5>
                <p class="sub"><?php echo $this->session->userdata('email'); ?></p>
                
                <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
            </div>
            </div>
       </div>
    <div class="row">
        <div class="col-lg-10">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Jadwal Kursus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Kursus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Siswa</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Jadwal</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-sm-3">
                        <button class="btn btn-success">Tambah Kursus</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Nilai</div>
            </div>
        </div>
    </div>
  </div>
</body>
<?php include './application/views/footer.php' ?>
</html>