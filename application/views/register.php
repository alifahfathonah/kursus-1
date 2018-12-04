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
    <div class="col-lg-6 offset-md-4">
    <div class="card">
        <div class="card-header" align="center">
            Registrasi
        </div>
        <div class="card-body">
        <form>
            <div class="form-group row">
                <label for="reg_nama" class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="reg_nama" placeholder="Nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="reg_email" class="col-sm-4 col-form-label">email</label>
                <div class="col-sm-8">
                <input type="email" class="form-control" id="reg_email" placeholder="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="reg_password" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                <input type="password" class="form-control" id="reg_password" placeholder="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="reg_confirm" class="col-sm-4 col-form-label">Confirm Password</label>
                <div class="col-sm-8">
                <input type="password" class="form-control" id="reg_confirm" placeholder="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="reg_profesi" class="col-sm-4 col-form-label">Daftar Sebagai</label>
                <div class="col-sm-8">
                    <select class="custon-select" id="reg_profesi">
                        <option value="guru">Guru</option>
                        <option value="siswa">Siswa</option>
                    </select>
                </div>
            </div>
            <div class="row">
                
                <div class="col-sm-2 offset-sm-4">
                <button type="button" class="btn btn-secondary">Cancel</button>
                </div>
                <div class="col-sm-2 offset-sm-2">
                <button type="button" class="btn btn-success">Submit</button>
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