<section class="content-header">
  <h1> Laporan Kegiatan </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Laporan Kegiatan</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
          <div class="box box-success">
                <div class="box-header with-border">
                  <div class="container">
                    <div class="row">
                      <form action="" method="GET">

                      <div class="col-md-3">
                            <div class="form-group">
                              <label for="">Dari Tanggal : </label>
                              <input type="date" name="tanggal_dari" class="form-control" id="" placeholder="">
                            </div>
                      </div>
                      <div class="col-md-3">
                            <div class="form-group">
                              <label for="">Sampai Tanggal :</label>
                              <input type="date" name="tanggal_sampai" class="form-control" id="" placeholder="">
                            </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <br>
                          <button style="margin-top:5px;" type="submit" class="btn btn-primary" > <i class="fa fa-search"></i>    Cari </button>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <br>
                            <?php
                              if (isset($_GET['tanggal_dari'])) {
                            ?>
                            <a target="blank" href="<?= base_url()?>laporan/cetak_kegiatan?tanggal_dari=<?= $_GET['tanggal_dari'] ?>&tanggal_sampai=<?= $_GET['tanggal_sampai'] ?> " style="margin-top:5px;" class="btn btn-success">  <i class="fa fa-print"></i>    Cetak </a>
                            <?php
                              }else{
                            ?>

                            <a target="blank" href="<?= base_url()?>laporan/cetak_kegiatan " style="margin-top:5px;" class="btn btn-success">  <i class="fa fa-print"></i>    Cetak </a>


                            <?php
                              }
                            ?>
                        </div>
                      </div>

                    </form>
                    </div>
                  </div>
                  <hr>
                  <table  class="table table-striped table-bordered" cellspacing="0" style="width:auto">
                      <thead>
                          <tr>
                              <th width="5%">No.</th>
                              <th>Bidang </th>
                              <th>Nama Kegiatan</th>
                              <th>Lokasi</th>
                              <th  width="13%">Prakiraan Biaya</th>
                              <th>Tanggal </th>
                              <!-- <th>Detail</th> -->
                              <!-- <th width="17%">Status</th> -->
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          $no = 1;
                          if (isset($_GET['tanggal_dari'])) {

                            $dari = $this->input->get('tanggal_dari');
                            $sampai = $this->input->get('tanggal_sampai');
                            $getx = $this->db->query("SELECT a.* , b.* FROM tbl_kegiatan a INNER JOIN tbl_bidang b ON a.id_bidang = b.id_bidang WHERE a.tgl_ditetapkan  BETWEEN  '$dari' AND '$sampai'  ORDER BY a.id_kegiatan DESC")->result();
                            $get_ = $getx;

                          } else {

                            $get_ = $get;

                          }

                          foreach ($get_ as $key => $value) {


                            if ($value->status == "n" ) {
                              $color  = "danger";
                              $title  = "Belum Dilaksanakan";
                            } else {
                              $color  = "success";
                              $title  = "Proses Pelaksanaan";
                            }


                          ?>
                          <tr>
                              <td><?= $no ?></td>
                              <td><?= $value->nama_bidang ?></td>
                              <td><?= $value->nama_kegiatan ?></td>
                              <td><?= $value->lokasi ?></td>
                              <td>Rp. <?= format_rupiah($value->biaya) ?></td>
                              <td><?= tgl_indo($value->tgl_ditetapkan) ?></td>


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
    </div>
</section>
