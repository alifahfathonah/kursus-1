<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <?php include './application/views/header.php'; ?> 
</head>
<?php 
foreach ($profil as $key ) {
   $foto = $key['link_foto'];
}
$foto = base_url().'assets/img/profile/'.$foto;
?>
<body>
<!--container-->
<div class="container">
      <div class="row justify-content-center">
            <div class="col-lg-10">
            <div class="media">
            <img class="align-self-start mr-3 rounded-circle profil-photo" src="<?php echo $foto;?>" alt="Generic placeholder image">
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
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div data-spy="scroll" data-offset="0">
                        Jadwal
                        
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-sm-3">
                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#newkursus_modal">Buat Kursus</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                Nilai
                </div>
            </div>
        </div>
    </div>
  </div>
  <!--end container-->
  <!-- Modal -->
<div class="modal fade" id="newkursus_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Kursus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        <form data-toggle="validator">
        <div class="form-group row">
                <label for="kategori_kursus" class="col-sm-4 col-form-label">Kategori</label>
                <div class="col-sm-8">
                    <select class="custon-select" id="kategori_kursus" name="kategori_kursus">
                        <option value="">--Pilih kategori--</option>
                        <option value="keterampilan">Keterampilan</option>
                        <option value="pelajaran">Mata Pelajaran</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="bidang_kursus" class="col-sm-4 col-form-label">Bidang kursus</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="bidang_kursus" name="bidang_kursus" placeholder="Bidang" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="level_kursus" class="col-sm-4 col-form-label">Level Kursus</label>
                <div class="col-sm-8">
                    <select class="custon-select" id="level_kursus" name="level_kursus">
                        <option value="">--Pilih kategori--</option>
                        <option value="sd">Dasar (SD)</option>
                        <option value="smp">Menengah (SMP)</option>
                        <option value="sma">Lanjut (SMA)</option>
                        <option value="mahir">Mahir</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="judul_kursus" class="col-sm-4 col-form-label">Judul Kursus</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="judul_kursus" name="judul_kursus" placeholder="Judul" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah_kursus" class="col-sm-4 col-form-label">Jumlah Pertemuan</label>
                <div class="col-sm-4">
                <input type="number" class="form-control" id="jumlah_kursus" name="jumlah_kursus" placeholder="" required>
                <label for="jumlah_kursus" class="">Kali</label>
                </div>
            </div>
           
            <div id="error"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary tombol" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary tombol" id="create_kursus">Submit</button>
      </div>
      </form>
      </div>
      </div>
    </div>
  </div>
</div>
</body>
<?php include './application/views/footer.php' ?>
</html>