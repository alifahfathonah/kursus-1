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
   $desk = $key['deskripsi'];
}
if ($foto == NULL) {
    $foto = base_url().'assets/img/user.png';
} else {
    $foto = base_url().'assets/img/profile/'.$foto;
}



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
                <?php if ($desk == NULL) {
                   echo " <p>-</p>";
                } else {
                    echo "<p>".$desk."</p>";
                }?>
                
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
                      <?php 
                        foreach ($jadwal as $x) {?>
                        
                        <div class="alert alert-danger" role="alert">
                           <div class="row">
                           <div class="col-md-2">
                            <?= $x['judul_kursus']; ?>
                           </div>
                           <div class="col-md-2">
                           <?= $x['tanggal']; ?>
                           </div>
                           <div class="col-md-2">
                           <?= $x['jam']; ?>
                           </div>
                           <div class="col-md-2">
                           <?= $x['user_name']; ?>
                           </div>
                            </div>
                        </div>
                        <?php
                        }
                      ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-sm-3">
                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#newkursus_modal">Buat Kursus</button>
                        </div>
                    </div>
                    <div class="scroll-menu">
                    <?php foreach ($kursus as $y) { ?>
                    <div class="row">
                    <div class="card col-lg list-kursus"  >
                        <div class="card-header">
                            <div class="row">
                                <div class="col-4">
                                <?php echo $y['kategori_kursus'];?>
                                </div>
                            <div class="col-lg ml-auto">Rp <?= number_format($y['harga_kursus'],2,",","."); ?></div>
                            <?php  echo $y['tgl_dibuat']; ?>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php  echo $y['judul_kursus']; ?></h5>
                            <p class="card-text"><?php  echo $y['deskripsi_kursus']; ?></p>
                            <a href="member/edit_kursus?id=<?php echo $y['id_kursus'] ?>" >Edit</a>
                            
                        </div>
                       
                    </div>
                    </div>
                <?php
                }
                ?>
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
        <form data-toggle="validator" id="buat_kursus">
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
                <label for="biaya_kursus" class="col-sm-4 col-form-label">Biaya / pertemuan</label>
                <div class="col-sm-6 my-1">
                <label class="sr-only" for="biaya_kursus"></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">Rp</div>
                    </div>
                    <input type="number" class="form-control" id="biaya_kursus" name="biaya_kursus" placeholder="0">
                </div>
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
                
                </div>
                <label for="jumlah_kursus" class="">Kali</label>
            </div>
            <div class="form-group row">
                <label for="point_kursus" class="col-sm-4 col-form-label">Point Kelulusan</label>
                <div class="col-sm-4">
                <input type="number" class="form-control" id="point_kursus" name="point_kursus" placeholder="" required>
                
                </div>
                <label for="jumlah_kursus" class="">point</label>
            </div>
            <div class="form-group row">
                <label for="deskripsi_kursus" class="col-sm-2 col-form-label">Deskripsi Kursus</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="deskripsi_kursus" name="deskripsi_kursus" rows="3"required></textarea>
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

<script type="text/javascript">
//  function reply_click(clicked_id)
// {
//     alert(clicked_id);
// }

$(document).ready(function(){

    $('#create_kursus').click(function(e) {
        
        var formdata = new FormData( $("#buat_kursus")[0] );
        var link = 'member/new_kursus';
        
         $.ajax({
           type: "POST",
           url: link,
           data	: formdata, 
           contentType : false,
            processData : false,      
           success: function(response){
          if(response== "success")
              {
                
               alert('Data berhasil diinput');
                 window.location = '<?php echo base_url(); ?>';
                  
             }
            else
               {
                    alert(response);
                //$("#error_ganti").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp;Penggantian Password Gagal!</div>');
               }
              
           } 
       });
            

        e.preventDevault();
    });

    // $('.list-kursus').click(function(){
    //     var x = document.getElementsByClassName("list-kursus")[0].id;
    //     alert(x);
    // });

   


});

</script>