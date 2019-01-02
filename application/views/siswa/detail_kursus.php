<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Kursus</title>
</head>
<?php include './application/views/header.php'; ?> 
<body>

<?php 
foreach ($kursus as $k) {
    $kategori = $k['kategori_kursus'];
    $judul = $k['judul_kursus'];
    $harga = $k['harga_kursus'];
    $level = $k['level_kursus'];
    $point = $k['point_kelulusan'];
    $durasi = $k['durasi_kursus'];
    $desk = $k['deskripsi_kursus'];
    $id_kursus = $k['id_kursus'];
    $nama = $k['user_name'];
    $telp = $k['nomer_telp'];
    $foto = $k['link_foto'];
    $alamat = $k['alamat'];
}

if ($foto == NULL) {
    $foto = base_url()."assets/img/user.png";
} else {
    $foto = base_url()."assets/img/profile/".$foto;
}
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card">
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                        <p>By :</p>
                        </div>
                        <div class="col-4" align="center">
                        <img class="align-self-start mr-3 rounded-circle profil-photo" src="<?= $foto; ?>" alt="Generic placeholder image">
                            
                           
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <h4><?= $nama; ?></h4>
                    </div>
                    <div class="row justify-content-center">
                        <p>Contact : <?= $telp; ?></p>
                       
                    </div>
                    <div class="row justify-content-center">
                    <i>Jl. ikan paus no. 38, kersikan, bangil</i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    <h4 align="center"><?=$judul;?></h4>
                </div>
                <div class="card-body">
                    <form  id="">
                    <div class="form-group row">
                            <label for="kategori_kursus" class="col-sm-4 col-form-label">Kategori</label>
                            <div class="col-sm-8">
                                <p><?=$kategori; ?></p>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="level_kursus" class="col-sm-4 col-form-label">Level Kursus</label>
                            <div class="col-sm-8">
                                <p><?=$level; ?></p>
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
                                <input type="text" class="form-control" id="biaya_kursus" name="biaya_kursus" readonly value="<?= number_format($harga,2,",","."); ?>">
                            </div>
                            </div>
                        </div>

                    
                        <div class="form-group row">
                            <label for="jumlah_kursus" class="col-sm-4 col-form-label">Jumlah Pertemuan</label>
                            <div class="col-sm-4">
                        <p><?=$durasi; ?></p>
                            
                            </div>
                            <label for="jumlah_kursus" class="">Kali</label>
                        </div>
                        <div class="form-group row">
                            <label for="point_kursus" class="col-sm-4 col-form-label">Point Kelulusan</label>
                            <div class="col-sm-4">
                            <p id="point"><?=$point; ?></p>
                            </div>
                            <label for="jumlah_kursus" class="">point</label>
                        </div>
                        <div class="form-group row">
                        
                            <label for="deskripsi_kursus" class="col-sm-4 col-form-label">Deskripsi Kursus</label>
                        
                            <div class="col-sm-8">
                            <p><?= $desk; ?></p>
                            </div>
                        </div>  

                    
                        </div>
                        <div class="card-footer">
                            <div class="row justify-content-center">
                            
                                    <div class="col-4">
                                <a href="<?php echo base_url(); ?>member/kursus" class="btn btn-secondary tombol">Cancel</a>
                                </div>
                                <div class="col-4">
                                <button type="button" class="btn btn-primary tombol" data-toggle="modal" data-target="#modal_ikuti" id="update_kursus">Ikuti</button>
                            
                                </div>
                            </div>
                        </div>
                        </form>
            </div>
        </div>
        
    </div>
   
</div> 


<!-- Modal Hapus -->
<div class="modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_ikuti">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Konfirmasi Kursus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        
        </form>
      </div>
      <div class="modal-footer">
          <div class="row justify-content-center">
              <div class="col align-self-start">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                <div class="col align-self-end">
                 <button type="button" class="btn btn-success" id="acc_kursus">Yes</button>
                 </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
<?php include './application/views/footer.php' ?>
</html>

<script type="text/javascript">
$(document).ready(function(){
    $('#acc_kursus').click(function(){
        var point = $('#biaya_kursus').val();
        alert(point);
    });
});
</script>