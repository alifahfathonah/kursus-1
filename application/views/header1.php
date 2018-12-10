

<link href="<?php echo base_url(); ?>assets/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/library/css/main.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/library/jquery-ui/jquery-ui.min.css" rel="stylesheet">



<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">Kursus</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-sm-0">
      <!--<input class="form-control mr-sm-2" type="search" placeholder="Search">-->
      <?php 
       if ($this->session->userdata('login_status')==false) {
         ?>
         
         <a href="<?php echo base_url(); ?>register" class="btn btn-primary my-2 my-sm-0" role="button">Register</a>
         <button class="btn btn-primary my-2 my-sm-0" type="button" data-toggle="modal" data-target="#login_modal">Login</button>
         <?php
       } else {
         ?>
          <a href="#" class="btn btn-primary my-2 my-sm-0" role="button">Profile</a>
          <a href="<?php echo base_url(); ?>auth/logout" class="btn btn-primary my-2 my-sm-0" role="button">Logout</a>
      <?php
       }
      
      ?>
      
    </form>
  </div>
</nav>
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
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btn_login">Login</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

