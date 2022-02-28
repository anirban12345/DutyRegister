<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?php echo base_url().'assets/images/'; ?>kplogo.png" type="image/gif" sizes="16x16">
  <title><?=$this->title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome/css/all.min.css">  
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet">
  <style>
      .login-page, .register-page {
      background-image: url("<?=base_url()?>assets/images/bg.png");
      background-size:cover;
      }
      .damion{
        font-family: 'Damion', cursive;
      }
  </style>
<script src="https://www.google.com/recaptcha/api.js?render=6LfRx6cZAAAAAC1nQadE104fLGoxZfxgOIOXErg2"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#" class="font-weight-bold"><?=$this->title?></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo site_url('Login/checklogin'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
            <i class="fas fa-user"></i>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
            <i class="fas fa-key"></i>
            </div>
          </div>
        </div>
          
        <div class="row">          
          <!-- /.col -->
          <input type="hidden" id="token" name="token" class="form-control form-control-lg" />
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" name="submit" id="submit">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        <div class="text-danger"><?=$this->session->flashdata('errmsg')?></div>
      </form>
    </div>
    <div class="card-footer text-center font-weight-bold damion">
    <h3><img src="<?=base_url()?>assets/images/kplogo.png" alt="AdminLTE Logo" class="brand-image img-circle"  width=50 />
      Scientific Wing,DD</h3>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery 
<script href="<?php echo base_url().'assets/'; ?>/plugins/jquery/jquery.min.js"></script>
-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<!-- Bootstrap 4 -->
<script href="<?php echo base_url().'assets/'; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script href="<?php echo base_url().'assets/'; ?>/dist/js/adminlte.min.js"></script>

</body>
</html>

<script>

grecaptcha.ready(function() {
        grecaptcha.execute('6LfRx6cZAAAAAC1nQadE104fLGoxZfxgOIOXErg2', {action: 'homepage'}).then(function(token) {
            // console.log(token);
            document.getElementById("token").value = token;
        });
    });

</script>