<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kursus</title>
</head>
<?php include './application/views/header.php'; ?> 
<body>

    <div class="kontain">
    
    <div class="row align-items-end">
    <div class="col-lg-6 offset-md-3">
    <div class="card">
        <div class="card-header" align="center">
            Registrasi
        </div>
        <div class="card-body">
        <form id="reg_form">
            <div class="form-group row">
                <label for="reg_nama" class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="reg_nama" name="reg_nama" placeholder="Nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="reg_email" class="col-sm-4 col-form-label">email</label>
                <div class="col-sm-8">
                <input type="email" class="form-control" id="reg_email" name="reg_email" placeholder="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="reg_password" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                <input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="reg_confirm" class="col-sm-4 col-form-label">Confirm Password</label>
                <div class="col-sm-8">
                <input type="password" class="form-control" id="reg_confirm" placeholder="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="reg_alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                <textarea class="form-control" id="reg_alamat" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="reg_profesi" class="col-sm-4 col-form-label">Daftar Sebagai</label>
                <div class="col-sm-8">
                    <select class="custon-select" id="reg_profesi" name="reg_profesi">
                        <option value="guru">Guru</option>
                        <option value="siswa">Siswa</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="reg_tanggallahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-8">
                <input type="date" class="form-control" id="reg_tanggallahir">
                </div>
            </div>
            <div class="form-group row">
            <label for="reg_tanggallahir" class="col-sm-4 col-form-label">Jenis kelamin</label>
            <div class="col-sm-8">
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="reg_gender" id="reg_gender_l" value="laki-laki" >
            <label class="form-check-label" for="inlineRadio2">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="reg_gender" id="reg_gender_p" value="perempuan" checked>
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
            </div>
            </div>
            </div>
            <div class="row">
                
                <div class="col-sm-2 offset-sm-2">
                <a href="<?php echo base_url(); ?>" class="btn btn-secondary">Cancel</a>
                </div>
                <div class="col-sm-2 offset-sm-4">
                <button type="submit" name="submit" class="btn btn-success" id="btn_submit">Submit</button>
                </div>
            </div>
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
       
        $('#btn_submit').click(function(e){
     var nama = $('#reg_nama').val();
        var email = $('#reg_email').val(); 
        var pass = $('#reg_password').val(); 
        var profesi = $('#reg_profesi').val();
        var alamat = $('#reg_alamat').val();
        //var tgl_lahir= new Date (form.reg_tanggallahir.value);
        var tanggal = $('#reg_tanggallahir').val();
        
        var gender = $("input[name='reg_gender']:checked").val();
        var link = 'register/reg_member';
       //var data = $('#reg_form').serialized();
        
        $.ajax({
            type: "POST",
            url: link,
            data: 'reg_nama='+nama+'&reg_email='+email+'&reg_password='+pass+'&reg_profesi='+profesi+'&reg_alamat='+alamat+'&reg_tanggallahir='+tanggal+'&reg_gender='+gender,
             //data:  data,             
            success: function(response){
               /*if(response== "success")
                {
                    
                    window.location = '';
                }
                else
                {
                    
                    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Login Gagal !</div>');
                }*/
                alert(response);
            } 
        });
        e.preventDefault();
        });
    });
</script>
