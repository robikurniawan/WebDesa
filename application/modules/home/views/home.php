<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>:: Administrator ::</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.3.11/bootstrap/css/bootstrap.min.css');?>">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
  <!-- Ionicons -->

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.3.11/dist/css/AdminLTE.min.css');?>">

  <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">

  <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">


  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.3.11/dist/css/skins/_all-skins.min.css');?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/iCheck/flat/blue.css');?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/morris/morris.css');?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/jvectormap/jquery-jvectormap-1.2.2.css');?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/datepicker/datepicker3.css');?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/daterangepicker/daterangepicker.css');?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">

  <style media="screen">
  .modal-header {
    border-bottom-color: #2196F3;
    color: #ffffff;
    background: #2196f3;
    border-radius: 10px 10px 0px 0px;
  }
  /* @media (min-width: 768px) */
  .modal-content {
    -webkit-box-shadow: #a5a5a5c4;
    box-shadow: -1px 1px 20px 5px #a5a5a5c4;
    border-radius: 10px;
    margin-top: 70px;
  }

  .modal{
    background: rgba(6, 6, 6, 0.63);
  }

  .modal-body{
    padding:20px 50px;
  }
  h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{
    font-family: Helvetica Neue, Segoe UI, Helvetica, Arial, sans-serif;
    font-weight: 400;
  }

  .skin-blue-light .sidebar-menu>li>a{
    font-weight: 500;
  }

  .form-control{
    border-radius: 5px;
  }

  .skin-blue-light .sidebar-menu>li:hover>a, .skin-blue-light .sidebar-menu>li.active>a{
      border-left: 4px solid #3096f3;
  }

  table th{
    text-align:center;
  }
  table thead{
    background-color:#3097f345;
  }
  </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


<script>
function scroll(){

	var box = document.getElementById('scrollChat');
	box.scrollTop = box.scrollHeight;

}
</script>

 <script src="<?= base_url()?>assets/js/grafik/highcharts.js"></script>
      <script src="<?= base_url()?>assets/js/grafik/exporting.js"></script>
      <script src="<?= base_url()?>assets/js/grafik/export-data.js"></script>


</head>
<body class="hold-transition skin-blue-light sidebar-mini" onload="scroll();" style="font-family:Helvetica Neue, Segoe UI, Helvetica, Arial, sans-serif;">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('index.php/home');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>MT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>DESA</b>KABUBU</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->

          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"> -->
              <!-- <img src="<?php echo base_url('assets/image/avatar.svg');?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION["username"]; ?></span> -->
               <a href="<?php echo base_url('index.php/auth/logout');?>" class="dropdown-toggle">Keluar</a>

            <!-- </a> -->

          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/image/avatar.svg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["username"]; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li><a href="<?= base_url('home/index')?>"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>

        <li><a href="<?= base_url()?>profil"><i class="fa fa-link"></i> <span>Profil</span>  </a></li>
        <li><a href="<?= base_url()?>kegiatan/perencanaan"><i class="fa fa-link"></i> <span>Perencanaan </span>  </a></li>
        <li><a href="<?= base_url()?>kegiatan"><i class="fa fa-link"></i> <span>Kegiatan </span>  </a></li>
        <li><a href="<?= base_url()?>realisasi"><i class="fa fa-link"></i> <span>Realisasi </span>  </a></li>
        <li><a href="<?= base_url()?>aparat"><i class="fa fa-link"></i> <span>Aparat</span>  </a></li>

        <li><a href="<?= base_url()?>artikel"><i class="fa fa-link"></i> <span>Berita </span>  </a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>Regulasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url()?>regulasi"><i class="fa fa-circle-o"></i> Daftar Regulasi </a></li>
            <li><a href="<?= base_url()?>kategori_regulasi"><i class="fa fa-circle-o"></i> Kategori Regulasi</a></li>
          </ul>
        </li>
        <!-- <li><a href="<?= base_url()?>pengumuman"><i class="fa fa-link"></i> <span>Pengumuman </span>  </a></li> -->
        <li><a href="<?= base_url()?>galeri"><i class="fa fa-link"></i> <span>Galeri </span>  </a></li>
        <li><a href="<?= base_url()?>laporan"><i class="fa fa-link"></i> <span>Laporan </span>  </a></li>




        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url()?>bidang"><i class="fa fa-link"></i> <span>Bidang </span>  </a></li>
          </ul>
        </li>














    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper" id="contentLTE"> -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container">

      <div class="row">
        <div style="margin-top:10px;">
        <?php
        $notifikasi = $this->session->flashdata('notifikasi');
        echo notifikasi($notifikasi);
      ?>
        </div>

      </div>

    </div>

      <?php echo $contents ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2017-2019 <a href="https://robikurniawan.com">Desa Kabubu</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/jQuery/jquery-2.2.3.min.js');?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/js/jquery-ui.min.js');?>"></script>

<script src="<?php echo base_url('assets/DataTables-1.10.15/media/js/jquery.dataTables.js');?>"></script>
<script src="<?php echo base_url('assets/DataTables-1.10.15/media/js/dataTables.bootstrap.min.js');?>"></script>

<link rel="stylesheet" href="<?php echo base_url('assets/DataTables-1.10.15/media/css/dataTables.bootstrap.min.css');?>">
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- <script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script> -->
<!-- <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script> -->
<!-- <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script> -->
<!-- <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script> -->
<!-- <script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script> -->



<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/AdminLTE-2.3.11/bootstrap/js/bootstrap.min.js');?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/js/raphael-min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/sparkline/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/knob/jquery.knob.js');?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/js/moment.min.js');?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/daterangepicker/daterangepicker.js');?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/datepicker/bootstrap-datepicker.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/AdminLTE-2.3.11/plugins/fastclick/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/AdminLTE-2.3.11/dist/js/app.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.3.11/dist/js/demo.js');?>"></script>
<script src="<?php echo base_url('assets/js/nng/chat.js');?>"></script>
<script src="<?php echo base_url('assets/js/nng/functions.js');?>"></script>


<script type="text/javascript">
  $('#table').DataTable();

  $('#table1').DataTable();

  $('#table2').DataTable();

  $('#table3').DataTable();

  $('#table4').DataTable();

  $('#table5').DataTable();
</script>


 <script src="https://adminlte.io/themes/AdminLTE/bower_components/ckeditor/ckeditor.js"></script>
<!-- <script src="https://adminlte.io/themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    CKEDITOR.replace('addberita')
    CKEDITOR.replace('editor2')
    CKEDITOR.replace('editor5')

    CKEDITOR.replace('editor1x')
    CKEDITOR.replace('editor2x')
    CKEDITOR.replace('editor3x')
    CKEDITOR.replace('editor4x')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>


</body>
</html>
