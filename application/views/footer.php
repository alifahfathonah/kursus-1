<footer class="page-footer bg-light">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">kursus.com</h5>
        <p class="grey-text text-lighten-4">Deskripsi singkat tentang situs...<a class="modal-trigger" href="#modal1">Read More</a></p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Follow us</h5>
        <ul>
            <li><a class="grey-text text-lighten-3 valign-wrapper" href="https://www.facebook.com"><img src="https://png.icons8.com/facebook/color/30/ffffff">&nbsp; Facebook</a></li>
            <li><a class="grey-text text-lighten-3 valign-wrapper" href="https://www.twitter.com"><img src="https://png.icons8.com/twitter-squared/color/30/ffffff">&nbsp; Twitter</a></li>
            <li><a class="grey-text text-lighten-3 valign-wrapper" href="https://plus.google.com/?hl=en"><img src="https://png.icons8.com/google-plus-squared/color/30/ffffff">&nbsp; Google+</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright red darken-1">
    <div class="container">
    © 2018 kursus.com
    </div>
  </div>
</footer>
<script src="<?php echo base_url(); ?>assets/library/jquery/jquery-1.10.2.js"></script>
<script src="<?php echo base_url(); ?>assets/library/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/library/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/library/jquery/validator.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#login_modal').on('click', '#btn_login', function(e) {
           
            var email = $('#email_login').val();
            var pass = $('#password_login').val();

            $.ajax({
            type: "POST",
            url: "auth/login",
            data: 'email='+email+'&password='+pass,
                      
            success: function(response){
               if(response== "success")
                {
                    window.location = '<?php echo base_url(); ?>';
                    
                   
                }
                else
                {
                    //alert(response);
                    $("#error").html('<div class="alert alert-danger alert-dismissible" role="alert"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Login Gagal !</div>');
                }
               
            } 
        });
            
            e.preventDefault();
        });
    });
</script>