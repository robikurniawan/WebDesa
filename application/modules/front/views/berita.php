<section class="content-header">
      <h1>
       Berita
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Berita</li>
      </ol>
    </section>

<section class="content">
    <div class="row">

         <?php
        	 	foreach ($artikel as $key => $value) {
                $judul = substr($value->judul,0,50);
                $tgl = substr($value->tanggal,8,2);
                $bulan = substr(getBulan(substr($value->tanggal,5,2)),0,4);
                $string = str_replace(' ', '-', $value->judul); // Replaces all spaces with hyphens.
                $slug =  preg_replace('/[^A-Za-z0-9\-]/', '', $string) 
        ?>
        <div class="col-md-3" >
            <div class="box box-success" style="height:400px; overflow:scroll;" >
                <div class="box-body">
                    <img  src="<?= base_url()?>assets/image/artikel/<?= $value->gambar ?>" alt="news-1" style="height:200px;" class="img-responsive">
                    <h4 class="box-title"><a href="<?= base_url()?>front/detailberita/<?= $value->id_artikel ?>" class="link"><?= $judul ?></a></h4>
                    <small><i class="fa fa-user"></i>   Admin , <?= tgl_indo($value->tanggal)?></small>
                    <p><?= substr($value->deskripsi,0,135); ?>...</p>
                </div>
            </div>
        </div>

        <?php 
             }
        ?>


    </div>
</section>