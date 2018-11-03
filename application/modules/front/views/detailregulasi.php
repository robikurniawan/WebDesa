

<section class="content">
    <div class="row">

        <div class="col-md-12">
            <div class="box box-success" >
                <div class="box-header with-border">
                    <h3 class="box-title"> <?= $kat->nama_kategori_regulasi ?> </h3>

                    <br><br>

                    <table id="table5" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th>Nama Regulasi</th>
                                <th style="width:125px;">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                          $no = 1;
                          foreach ($reg as $key => $value) {
                          ?>
                          <tr>
                              <td><?= $no ?></td>
                              <td><?= $value->nama_regulasi?></td>
                              <td>
                                <a href="<?= base_url()?>assets/image/regulasi/<?= $value->gambar ?>" class="btn btn-primary"><i class="fa fa-download"></i> Download </a>
                              </td>
                          </tr>
                          <?php
                            $no++;
                            }
                          ?>
                        </tbody>
                      </table>
                      




              
            </div>
        </div>
    </div>
</section>


