
<section class="content-header">
  <h1> Profil </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Profil</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs" style="width:100%; text-align: center; font-weight: bold; ">
                    <li class="active" style="width:18%;"><a href="#tab_1" data-toggle="tab"> Kepala Desa</a></li>
                    <li  style="width:18%;"><a href="#tab_2" data-toggle="tab"> Sambutan </a></li>
                    <li  style="width:18%;"><a href="#tab_3" data-toggle="tab"> Visi Dan Misi </a></li>
                    <li  style="width:18%;"><a href="#tab_4" data-toggle="tab"> Struktur Organisasi </a></li>
                    <li  style="width:18%;"><a href="#tab_5" data-toggle="tab"> Tupoksi </a></li>
                </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <?php require_once('biodata.php'); ?>
                </div>
                <div class="tab-pane " id="tab_2">
                    <?php require_once('sambutan.php'); ?>
                </div>
                <div class="tab-pane " id="tab_3">
                    <?php require_once('visimisi.php'); ?>
                </div>
                <div class="tab-pane " id="tab_4">
                    <?php require_once('struktur.php'); ?>
                </div>
                <div class="tab-pane " id="tab_5">
                    <?php require_once('tupoksi.php'); ?>
                </div>

            </div>
        </div>
    </div>
</section>
