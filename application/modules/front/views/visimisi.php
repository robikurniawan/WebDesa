<section class="content">
    <div class="row">

        <div class="col-md-12">
            <div class="box box-success" >
                <div class="box-header with-border">
                    <h3 class="box-title">Visi Misi</h3>
                </div>
                <div class="box-body">
                        <div class="row">

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <img src="<?= base_url() ?>assets/image/foto/<?= $profil->foto ?>" alt="" class="img-responsive" style="border-radius:10px;">
                            </div>

                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

                                <p style="text-align:justify;">
                                  <b>Visi : </b> <br>
                                  <?= $profil->visimisi ?>
                                </p>
                                <p style="text-align:justify;">
                                  <b>Misi : </b> <br>
                                  <?= $profil->misi ?>
                                </p>

                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
