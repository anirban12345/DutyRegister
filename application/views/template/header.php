<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" href="<?php echo base_url().'assets/images/'; ?>kplogo.png" type="image/gif" sizes="16x16">
  <title><?=$this->title?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css" rel="stylesheet" />
  <!-- lightbox -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/lightbox/dist/css/lightbox.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- Plyr JS -->
  <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />

  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet">

  <!-- //////////////////// script start //////////////////////-->

<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- overlayScrollbars -->
<script src="<?=base_url()?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- DataTables -->
<script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/moment/moment.min.js"></script>
<script src="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Select2 -->
<script src="<?=base_url()?>assets/plugins/select2/js/select2.full.min.js"></script>

<!-- lightbox -->
<script src="<?=base_url()?>assets/plugins/lightbox/dist/js/lightbox.min.js"></script>

<!-- Plyr JS -->
<script src="https://cdn.plyr.io/3.6.2/plyr.polyfilled.js"></script>

<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?=base_url()?>assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?=base_url()?>assets/plugins/raphael/raphael.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url()?>assets/plugins/chart.js/Chart.min.js"></script>

<!-- Sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?=base_url()?>assets/dist/js/pages/dashboard2.js"></script>

  <!-- script end-->
<style>
  .dt-buttons
  {
    float:left;
  }
  div.dataTables_wrapper div.dataTables_filter
  {
    float:right;
  }
   .damion{
        font-family: 'Damion', cursive;
      }
  </style>




</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <img src="<?=base_url()?>assets/images/2.jpg" class="img-circle img-thumbnail" alt="User Image" width=35>
           <?=$this->session->userdata('userdtls')[0]->u_title?> 
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="<?=base_url('Users/myprofile')?>" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">              
              <div class="media-body">                
              <i class="fas fa-user"></i>
              My Profile
              </div>
            </div>
            <!-- Message End -->
          </a>          
          <a href="<?=base_url('Login/logout')?>" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">              
              <div class="media-body">                
              <i class="fas fa-sign-out-alt"></i>
              Log Out
              </div>
            </div>
            <!-- Message End -->
          </a>          
          
        </div>
      </li>          
    </ul>
  </nav>
  <!-- /.navbar -->