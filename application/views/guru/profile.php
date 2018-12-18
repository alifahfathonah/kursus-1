<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <?php include './application/views/header.php'; ?> 
</head>
<body>
<?php foreach ($member as $key) {

    $id = $key['id_member'];
    $nama = $key['user_name'];
    $email = $key['email'];
    $prof = $key['profil'];
} 


foreach ($profil as $d) {
    $alamat = $d['alamat'];
    $jenis_kelamin = $d['jenis_kelamin'];
    $tgl_lahir = $d['tanggal_lahir'];
    $tgl_join= $d['tanggal_join'];
    $telp = $d['nomer_telp'];
    $pendidikan = $d['pendidikan'];
    $foto = $d['link_foto'];
    $desk = $d['deskripsi'];
}
if ($foto == NULL) {
    $foto = base_url().'assets/img/user.png';
   
} else {
    $foto = base_url().'assets/img/profile/'.$foto;
}
?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="row">
                    <div class="col-sm">
                    <?php //echo $error;?>

                        <?php //echo form_open_multipart('member/upload_foto');?>
                        <form enctype="multipart/form-data" accept-charset="utf-8" name="form_foto" id="form_foto"  method="post" action="">
                        <div class="form-group row">
                        <i ><img src="<?php echo $foto; ?>" alt="" class="profil-photo"></i>
                        <input type="file" class="form-control-file" id="foto_member" name="foto_member">
                        </div>

                       

                        </form>
                    
                    
                       
                        <form action="" id="profile_form">
                        <div class="form-group row">
                            <label for="nama_member" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_member" value="<?php echo $nama; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email_member" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-6">
                            <input type="email" class="form-control" id="email_member" value="<?php echo $email; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password_member" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                            <button type="button" class="btn btn-warning tombol btn-sm" id="btn_password" data-toggle="modal" data-target="#modal_password">Ganti</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat_member" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" id="alamat_member" rows="2"required><?php echo $alamat; ?></textarea>
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label for="telp_member" class="col-sm-2 col-form-label">Telepon</label>
                            <div class="col-sm-6">
                            <input type="text" class="form-control" id="telp_member" value="<?php echo $telp; ?>">
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label for="pend_member" class="col-sm-2 col-form-label">Pendidikan</label>
                            <div class="col-sm-6">
                            <input type="text" class="form-control" id="pend_member" value="<?php echo $pendidikan; ?>">
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="deskripsi_member" class="col-sm-2 col-form-label">Tentang Anda</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" id="deskripsi_member" name="deskripsi_member" rows="3"><?php echo $desk; ?></textarea>
                            </div>
                        </div>    
                        <div class="row">
                
                            <div class="col-sm-2 offset-sm-2">
                            <a href="<?php echo base_url(); ?>" class="btn btn-secondary tombol">Cancel</a>
                            </div>
                            <div class="col-sm-2 offset-sm-2">
                            <button type="submit" name="submit" class="btn btn-success tombol" id="btn_update">Update</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--modal password-->
<div class="modal fade" id="modal_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form data-toggle="validator">
            <div class="form-group">
                <label for="pass_lama">Password Lama</label>
                <input type="password" class="form-control" id="pass_lama" placeholder="Password Lama" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label for="pass_baru">Password Baru</label>
                <input type="password" class="form-control" id="pass_baru" placeholder="Password Baru" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label for="pass_konfirm">Konfirm Password</label>
                <input type="password" class="form-control" id="pass_konfirm" placeholder="Password Baru" data-match="#pass_baru" data-match-error="Password tidak sama!" required>
                <div class="help-block with-errors"></div>
            </div>
            <div id="error_ganti"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary tombol" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary tombol" id="ganti_pass">Ganti</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>
</body>
<?php include './application/views/footer.php' ?>
</html>
<script type="text/javascript">
 $(document).ready(function(){
       
       $('#ganti_pass').click(function(){
       
       
        ganti_password();
       
       
       
       });

       $('#btn_update').click(function(e){

          update_profile();
          
            e.preventDefault();
       });

       $('#foto_member').change(function(){
        if ($('#foto_member').val()!='') {
               
              upload_foto();
           }
       });

    function ganti_password() {
        
        var pass_lama = $('#pass_lama').val();
        var pass_baru = $('#pass_konfirm').val(); 
        var id = '<?php echo $id; ?>';
        var email = $('#email_member').val();


        var link = 'update_pass';
     
    
       $.ajax({
           type: "POST",
           url: link,
           data: 'pass_lama='+pass_lama+'&pass_baru='+pass_baru+'&id='+id+'&email='+email,
                    
           success: function(response){
              if(response== "success")
               {
                
                alert('Password Berhasil dirubah');
                window.location = 'profile';
                  
               }
               else
               {
                   alert(response);
                   
               }
              
           } 
       });
     }

     function update_profile() {
        var nama = $('#nama_member').val();
        var alamat = $('#alamat_member').val(); 
        var id = '<?php echo $id; ?>';
        var telp = $('#telp_member').val();
        var pend = $('#pend_member').val();
        var desk = $('#deskripsi_member').val();
        
        var link = 'update_profile';
     
    
       $.ajax({
           type: "POST",
           url: link,
           data: 'nama='+nama+'&alamat='+alamat+'&id='+id+'&telp='+telp+'&pend='+pend+'&desk='+desk,
                    
           success: function(response){
              if(response== "success")
               {
                
                alert('Update Data Berhasil');
                window.location = 'profile';
                  
               }
               else
               {
                   alert(response);
                   //$("#error_ganti").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp;Penggantian Password Gagal!</div>');
               }
               //alert(response);
           } 
       });
     }

     function upload_foto() {
         var file = $('#upload_foto').val();
        
         var formData = new FormData( $("#form_foto")[0] );
         var link = 'upload_foto';
        
         $.ajax({
           type: "POST",
           url: link,
           //secureuri: false,
           //fileElementId: 'upload_foto',
           async: false,
           cache: false,
           data	: formData, 
           contentType : false,
            processData : false,      
           success: function(response){
          if(response== "success")
              {
                
              // alert(response);
                window.location = 'profile';
                  
             }
            else
               {
                   alert(response);
            //        //$("#error_ganti").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp;Penggantian Password Gagal!</div>');
              }
              
           } 
       });
     }
   });
</script>