<section class="content-header">
      <h1>
      <?= $artikel->judul ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Berita</li>
      </ol>
    </section>

  <section class="content">
    <div class="row">

        <div class="col-md-12" >
            <div class="box box-success" >
                <div class="box-body">

                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div style="float:left; width:40%; margin-right:10px;">
                                <img  src="<?= base_url()?>assets/image/artikel/<?= $artikel->gambar ?>" alt="news-1" style="width:100%; box-shadow:2px 4px 5px grey; border-radius:10px;" class="img-responsive">
                                </div>
                                <small><i class="fa fa-user"></i>   Admin , <?= tgl_indo($artikel->tanggal)?></small>

                                <p style="text-align:justify;"><?= $artikel->deskripsi ?></p>
                                <br>

                            </div>
                </div>
            </div>
        </div>



    </div>
</section>