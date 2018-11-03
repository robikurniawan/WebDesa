<style media="screen">
.zoom {
  transition: transform .2s; /* Animation */
  z-index: 9999;

}
.zoom:hover {
  transform: scale(2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
  z-index: 9999;
}
</style>
<section class="content-header">
      <h1>
       Galeri
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Galeri</li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
		<div class="col-md-12">
          <!-- general form elements -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <div class="row" style="margin-bottom:20px;">
                        <div class="col-md-6">
                            <h3 class="box-title">Galeri Desa </h3>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">

                            </div>
                        </div>
                    </div>
                    <div class="body">
                          <div class="row">

                            <?php foreach ($galeri as $key => $value): ?>

                              <div class="col-md-3">
                                <center>
                                  <img src="<?= base_url()?>assets/image/galeri/<?= $value->gambar ?>" alt="" class="zoom img-responsive" style="z-index: 999; border-radius:10px; width:100%; height:200px;">
                                  <b><?= $value->judul ?></b>
                                </center>
                              </div>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
