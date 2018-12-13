<link href="<?php echo base_url(); ?>assets/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/library/css/main.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/library/jquery-ui/jquery-ui.min.css" rel="stylesheet">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">Kursus</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link active" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
        
        
        <?php if ($this->session->userdata('login_status')==false) {?>
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link" href="#">Tentang Kami</a>
            <button class="btn btn-primary tombol" type="button" data-toggle="modal" data-target="#login_modal">Login</button>
            <?php
        } else { ?>
          <a class="nav-item nav-link" href="#">Profile</a>
          <a class="nav-item nav-link" href="#">Features</a>
          <a class="nav-item nav-link" href="#">Tentang Kami</a>
          <a href="<?php echo base_url(); ?>auth/logout" class="btn btn-primary tombol" role="button">Logout</a>
        <?php   
        }
        ?>
        
        </div>
    </div>
  </div>
</nav>

<!-- Nav end-->

<!-- Modal -->
<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form data-toggle="validator">
            <div class="form-group">
                <label for="inputemail">email</label>
                <input type="email" class="form-control" id="email_login" placeholder="Enter email" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label for="inputpassword">Password</label>
                <input type="password" class="form-control" id="password_login" placeholder="Password" required>
                <div class="help-block with-errors"></div>
            </div>
            <div id="error"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary tombol" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary tombol" id="btn_login">Login</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

