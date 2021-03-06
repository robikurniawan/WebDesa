
<?php
 $persentasex = $re['persentase'];
 $sisax = 100 - $persentasex;

 if ($persentasex == "" ) {
     $persentase = 0;
     $sisa = 100;
 } else {
     $persentase = $persentasex;
     $sisa = $sisax;
 }

?>
<section class="content-header">

    <div class="row">
        <div class="col-md-6">
            <h3 class="box-title">Detail Realisasi</h3>
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

    	<div class="col-md-12">
          <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border ">
                    <h3 class="box-title"><?= $kegiatan->nama_kegiatan ?></h3>
                </div>
            <div class="body">

                <div class="container">

                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <table class="table">
                        <tr>
                            <td>Bidang Penanggung Jawab  </td>
                            <td>:</td>
                            <td><?= $kegiatan->nama_bidang ?></td>
                        </tr>
                        <tr>
                            <td>Nama Kegiatan </td>
                            <td>:</td>
                            <td><?= $kegiatan->nama_kegiatan ?></td>
                        </tr>
                        <tr>
                            <td>Lokasi </td>
                            <td>:</td>
                            <td><?= $kegiatan->lokasi ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kegiatan </td>
                            <td>:</td>
                            <td><?= $kegiatan->jenis_kegiatan ?></td>
                        </tr>
                        <tr>
                            <td>Manfaat </td>
                            <td>:</td>
                            <td><?= $kegiatan->manfaat ?></td>
                        </tr>
                        <tr>
                            <td>Sasaran </td>
                            <td>:</td>
                            <td><?= $kegiatan->sasaran ?></td>
                        </tr>
                        <tr>
                            <td>Prakiraan Biaya </td>
                            <td>:</td>
                            <td>Rp. <?= format_rupiah($kegiatan->biaya) ?></td>
                        </tr>
                        <tr>
                            <td>Tahun Direalisasikan </td>
                            <td>:</td>
                            <td><?= $kegiatan->tahun ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Ditetapkan </td>
                            <td>:</td>
                            <td><?= tgl_indo($kegiatan->tgl_ditetapkan) ?></td>
                        </tr>
                        </table>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div id="grafik" style=" height: 300px; width: ; margin: 0 auto"></div>
                        <div class="row ">
                        <?php

                        $persentasi=round($dana['total']/$kegiatan->biaya * 100);
                        $sisax = 100 - $persentasi;


                        ?>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <!-- <span class="text-success">Terealisasi : <?= $persentase ?> % </span><br> -->
                            <span class="text-success">Dana Digunakan  :
                                Rp. <?= format_rupiah($dana['total']) ?>
                            </span>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                            <!-- <span class="text-danger">Belum Terealisasi :  <?= $sisa ?> %</span><br> -->
                            <span class="text-danger">Prakiraan Biaya :  Rp. <?= format_rupiah($kegiatan->biaya) ?> </span>
                        </div>
                    </div>
                    </div>
                </div>




            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="box-header with-border ">

                            <h3 class="box-title"><b>Proses Realisasi Kegiatan </b></h3><br>
                            <a data-toggle="modal" href='#modal-id' class="btn btn-success pull-left">Tambah Realisasi </a>

                </div>
                <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tr style="background-color:#89b3f0a1;">
                        <th width="2%">No.</th>
                        <th width="10%">Uraian Kegiatan</th>
                        <th width="10%">PJ</th>
                        <th width="10%">Tanggal</th>
                        <th width="10%">Dana Digunakan</th>
                        <th width="5%">Progress </th>
                        <th width="10%">Dokumentasi</th>
                        <th  width="10%">Action</th>
                    </tr>
                    <?php
                        $no = 1;
                        foreach ($realisasi as $key => $value) {
                          $id_realisasi = $value->id_realisasi;
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value->judul ?></td>
                              <td><?= $value->pj ?></td>
                            <td><?= tgl_indo($value->tanggal)?></td>
                            <td>Rp. <?= format_rupiah($value->dana_digunakan) ?></td>
                            <td><?= $value->persentase ?> % </td>
                            <td>
                                <!-- <img src="<?= base_url()?>assets/image/realisasi/<?= $value->gambar ?>" class="img-responsive" alt=""> -->
                                <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#dok-<?= $value->kode ?>" >Lihat Dokumentasi </a>
                            </td>
                            <td>
                              <a href="" title="Hapus" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_realisasi-<?= $value->id_realisasi ?>"><i class="fa fa-trash"></i>  </a>
                              <!-- Bootstrap modal  add pengurus -->
                              <div class="modal fade" id="hapus_realisasi-<?= $value->id_realisasi ?>" role="dialog">
                                  <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                          <div class="modal-header  bg-red">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              <h3 class="modal-title">Hapus Data ? </h3>
                                          </div>
                                          <div class="modal-body form">

                                             <p><i class="fa fa-info"></i> Yakin Ingin Menghapus Data ? </p>

                                          </div>
                                          <div class="modal-footer">
                                              <a href="<?= base_url()?>realisasi/delete/<?= $value->id_realisasi ?>/<?= $value->id_kegiatan ?>" class="btn btn-danger">Hapus</a>
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                          </div>
                                          </form>
                                      </div><!-- /.modal-content -->
                                  </div><!-- /.modal-dialog -->
                              </div><!-- /.modal -->
                                  <!-- End Bootstrap modal -->

                                  <div class="modal fade" id="dok-<?= $value->kode ?>" role="dialog">
                                      <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                              <div class="modal-header  bg-red">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                  <h3 class="modal-title">Dokumentasi Kegiatan :  <?= $value->judul ?> </h3>
                                              </div>
                                              <div class="modal-body form">
                                                  <?php
                                                  $kode = $value->kode;
                                                  $get_dok = $this->db->query("SELECT * FROM tbl_dok WHERE kode_realisasi = '$kode' ")->result();
                                                  foreach ($get_dok as $key => $value_dok) {
                                                  ?>
                                                      <img src="<?= base_url()?>assets/image/tes/<?= $value_dok->gambar?>" class="img-responsive" alt="">
                                                  <?php
                                                  }
                                                  ?>


                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                              </div>
                                              </form>
                                          </div><!-- /.modal-content -->
                                      </div><!-- /.modal-dialog -->
                                  </div><!-- /.modal -->
                                      <!-- End Bootstrap modal -->



                            </td>
                        </tr>
                    <?php
                        $no++;
                        }
                    ?>

                </table>
                </div>




            </div>

            </div>
        </div>
        </div>
    </div>
</section>

<script>

Highcharts.chart('grafik', {
chart: {
    plotBackgroundColor: false,
    plotBorderWidth: false,
    plotShadow: false
},

credits: {
    enabled: false
},
exporting: {
   buttons: {
       contextButton: {
           enabled: false
       }
   }
},

title: {
    text: '',
    align: 'center',
    verticalAlign: 'middle',
    y: 40
},
tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.0f} %</b>'
},
plotOptions: {
    pie: {
    dataLabels: {
        enabled: true,
        distance: -50,
        style: {
        fontWeight: 'bold',
        fontSize: '10',
        color: 'white'
        }
    },
    startAngle: -90,
    endAngle: 90,
    center: ['50%', '100%'],
    size: '170%'
    }
},
series: [{
    type: 'pie',
    name: 'Persentase ',
    innerSize: '50%',
    data: [
    ['Dana Digunakan',<?= $persentasi; ?>],
    ['Prakiraan Biaya', <?= $sisax; ?>]
    ]
}]
});


</script>



<div class="modal fade" id="modal-id">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Realisasi Kegiatan</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url()?>realisasi/add" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $kegiatan->id_kegiatan ?>" name="id_kegiatan">
                    <input type="hidden" name="kode" value="<?= get_no_invoice() ?>">

                    <div class="form-group">
                        <label  for="">Uraian Kegiatan</label>
                        <textarea name="judul" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label  for="">Tanggal </label>
                        <input type="date" name="tanggal" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label  for="">Penanggung Jawab  </label>
                        <input type="text" name="pj" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label  for="">Dana Digunakan </label>
                        <input type="number" name="dana_digunakan" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label  for="">Progress Kegiatan (%) </label>
                        <input type="number" name="persentase" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label  for="">Dokumentasi Kegiatan <small>* multiple </small> </label>
                        <input type="file" name="gambar[]" multiple class="form-control" id="">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
