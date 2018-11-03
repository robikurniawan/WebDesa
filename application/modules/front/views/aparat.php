
<section class="content-header">

    <div class="row">
        <div class="col-md-6">
            <h3 class="box-title">Aparat Desa </h3>
        </div>
        <div class="col-md-6">
            <div class="pull-right">

            </div>
        </div>
    </div>

</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">

        <?php
            foreach ($aparat as $key => $value) {
              if ($value->foto == "") {
                $foto = "aparat.png";
              } else {
                $foto = $value->foto;
              }
        ?>

		     <div class="col-md-2">
          <!-- general form elements -->
            <div class="box box-success">
                <div class="box-header with-border ">
                  <center>
                    <img src="<?= base_url()?>assets/image/aparat/<?= $foto ?>" alt="" width="100%" style="border-radius:15px; ">
                    <hr>
                    <?= $value->nip ?><br>
                    <b><?= $value->nama ?></b><br>
                    <?= $value->jabatan ?>
                  </center>

                </div>
            </div>
        </div>


        <?php
            }
        ?>


    </div>
</section>
