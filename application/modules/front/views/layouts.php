<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>
          <?php
            if(!empty($title)){
              echo $title;
            }else{
              echo "Desa Kabubu- Kabupaten Mamuju";
            }
          ?>
        </title>

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
         /* border-bottom-color: #2196F3; */
         color: #ffffff;
         background: #f39c12;
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
         border-left: 4px solid #e69f0063;
         }
         table th{
         text-align:center;
         }
         
         

         .link{
           color:#5ca650;
         }
         a:hover, a:active, a:focus {
           color:#227215;
           font-weight: 500;
         }
      </style>
      
      <script src="<?= base_url()?>assets/js/grafik/highcharts.js"></script>
      <script src="<?= base_url()?>assets/js/grafik/exporting.js"></script>
      <script src="<?= base_url()?>assets/js/grafik/export-data.js"></script>


    

   </head>
   <body class="layout-top-nav hold-transition skin-green-light sidebar-mini" style="font-family:Helvetica Neue, Segoe UI, Helvetica, Arial, sans-serif;">
      <div class="wrapper">
         
        <?php require('header.php'); ?>
         <!-- Content Wrapper. Contains page content -->
         <!-- <div class="content-wrapper" id="contentLTE"> -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="">
                <?php echo $contents ?>
            </div>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <div class="pull-right hidden-xs">
               <b>Version</b> 2.3.8
            </div>
            <strong>Copyright &copy; 2017-2019 <a href="https://robikurniawan.com">Desa Kabubu </a>.</strong> All rights
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
           CKEDITOR.replace('editor2')
           CKEDITOR.replace('editor5')
           //bootstrap WYSIHTML5 - text editor
           $('.textarea').wysihtml5()
         })
      </script>
   </body>
</html>
