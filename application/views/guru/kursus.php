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
            <div class="card col-lg">
                <div class="card-header" style="height:60px">
                    <div class="col-8">
                        <form class="form-inline">
                            
                        <div class="input-group mb-3">
                    
                        <select id="kond-cari" class="form-control">
                            <option value="0" selected>Choose...</option>
                            <option value="judul_kursus">Judul</option>
                            <option value="deskripsi_kursus">Deskripsi Kursus</option>
                            <option value="user_name">Nama Guru</option>
                        </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="input-cari" placeholder="Cari" >
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" id="button-cari">Cari</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="scroll-menu">
                        <div class="tampil-kursus" id="list_kursus">
                           
                           
               
                           
                        </div>
                     </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div id="pagination">

                        </div>
                        <div class="ml-auto">
                                <label for="">Halaman</label>
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
 
 $('#pagination').on('click','a',function(e){
   e.preventDefault(); 
   var pageno = $(this).attr('data-ci-pagination-page');
   var pencarian = $('#kond-cari').val();
    var cari = $('#input-cari').val();
   loadPagination(pageno,pencarian,cari);
 });

 $('#button-cari').click(function(){
    var pencarian = $('#kond-cari').val();
    var cari = $('#input-cari').val();
    var pageno = 0;
    //alert(pencarian);
    loadPagination(pageno,pencarian,cari);
 });

 loadPagination(0);

 function loadPagination(pagno,kond,cari){
     var data_cari = 'per_page='+pagno;
     if (kond != '0') {
      var data_cari = 'per_page='+pagno+'&kond='+kond+'&cari='+cari;
     }
   $.ajax({
     url: 'page_kursus',
     type: 'get',
     data: data_cari,
     dataType: 'json',
     success: function(response){
        $('#pagination').html(response.pagination);
        createTable(response.result,response.row);
     }
   });
 }

 function createTable(result,sno){
   sno = Number(sno);
   $('#list_kursus').empty();
   for(index in result){
      var id = result[index].id_kursus;
      var judul = result[index].judul_kursus;
      var harga = result[index].harga_kursus;
      var nama = result[index].user_name;
      var durasi = result[index].durasi_kursus;
    var foto = result[index].link_foto;

    if (foto == null) {
        foto = "<?=base_url()?>assets/img/user.png";
    } else {
        foto = "<?=base_url()?>assets/img/profile/"+foto;
    }
      sno+=1;

      var data_kursus = "<div class='media list-kursus'>";
      data_kursus += "<img class='align-self-start mr-3 rounded-circle profil-photo' src="+foto+" alt='Generic placeholder image'>";
      data_kursus += " <div class='media-body'>";
      data_kursus += "<a href='detail_kursus?id="+id+"'>";
      data_kursus += "<h5 class='mt-0'>"+judul+"</h5></a>";
      data_kursus += "<div class='row'>";
      data_kursus += "<div class='col-4'>"+nama+"</div>";
      data_kursus += "<div class='col-2'>"+durasi+" X Pertemuan</div>";  
      data_kursus += "<div class='col-2'>"+harga+"/ Pertemuan</div>";
      data_kursus += "</div></div></div>";

        $('#list_kursus').append(data_kursus);

    }
  }
   
});
</script>