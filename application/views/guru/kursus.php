<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php include './application/views/header.php'; ?> 
<body>

    <div class="container">
        <div class="row">
            <div class="col-8">
            <form class="form-inline">
                
            <div class="input-group mb-3">
           
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari" >
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" id="button-addon2">Cari</button>
                </div>
            </div>
            </form>
            </div>
        </div>
        <div class="row">
            <div class="scroll-menu">
                <?php 
                foreach ($kursus as $k) {
                    $guru = $k['id_guru'];

                   $img = $this->system_model->get_where('tb_profile','id_member',$guru);
                   foreach ($img as $key) {
                      $foto = $key['link_foto'];

                      if ($foto == NULL) {
                        $foto = base_url().'assets/img/user.png';
                       
                    } else {
                        $foto = base_url().'assets/img/profile/'.$foto;
                    }
                   }
                ?>
                <div class="media list-kursus">
                
                <img class="mr-3 rounded-circle profil-photo" src="<?= $foto; ?>" alt="Generic placeholder image">
               
                    <div class="media-body">
                        
                        <h5 class="mt-0"><?= $k['judul_kursus']; ?></h5>
                        <?= $k['deskripsi_kursus']; ?>
                    </div>
                </div>
                <?php
                }
                ?>
            
            </div>
        </div>
    </div>
    
</body>
<?php include './application/views/footer.php' ?>
</html>