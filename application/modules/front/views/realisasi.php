
<section class="content-header">

    <div class="row">
        <div class="col-md-6">
            <h3 class="box-title">Realisasi Kegiatan</h3>
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
            foreach ($kegiatan as $key => $value) {
                $id = $value->id_kegiatan;
                $re = $this->realisasi->get_all_by_kegiatan_last($id);
                $dana = $this->realisasi->total_dana_digunakan($id);



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

		<div class="col-md-4">
          <!-- general form elements -->
            <div class="box box-success">
                <div class="box-header with-border ">
                    <div style="height:400px; overflow:scroll">
                    <center>
                    <div id="grafik<?= $value->id_kegiatan ?>" style=" height: 200px; width: 100%; margin: 0 auto"></div>
                    
                    <p><b><a href="<?= base_url()?>front/detail_realisasi/<?= $value->id_kegiatan ?>"><?= $value->nama_kegiatan ?></a> </b></p> 
                    </center>
                    <div class="row ">
                        
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <span class="text-success">Terealisasi : <?= $persentase ?> % </span><br>
                            <span class="text-success">Dana Digunakan  : <br>
                                Rp. <?= format_rupiah($dana['total']) ?>  
                            </span>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                            <span class="text-danger">Belum Terealisasi :  <?= $sisa ?> %</span>
                            <span class="text-danger">Prakiraan Biaya : <br> Rp. <?= format_rupiah($value->biaya) ?> </span>
                        </div>
                    </div>
                    <br>
                    <p>
                        <small> Catatan Progres Terakhir : <br>
                        <i><?= $re['judul'] ?></i></small> 
                     </p>
                    </div>
                    <!-- <center>
                    <a href="<?= base_url()?>realisasi/detail/<?= $value->id_kegiatan ?>" class="btn btn-success"><i class="fa fa-eye"></i>   Detail </a>
                    </center> -->
                </div>
            </div>
        </div>

        <script>

                Highcharts.chart('grafik<?= $value->id_kegiatan ?>', {
                chart: {
                    plotBackgroundColor: false,
                    plotBorderWidth: false,
                    plotShadow: false
                },
                title: {
                    text: '',
                    align: 'center',
                    verticalAlign: 'middle',
                    y: 40
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
                    ['Terealisasi', <?= $persentase ?>],
                    ['Belum Terealisasi', <?= $sisa ?>]
                    ]
                }]
                });


                </script>

        <?php 
            }
        ?>


    </div>
</section>


   
 




<!-- Bootstrap modal  add sarana -->
<div class="modal fade" id="add_sarana" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Tambah realisasi </h3>
            </div>
            <div class="modal-body form">
                <form action="<?= base_url()?>realisasi/add" id="form" method="POST" enctype="multipart/form-data">
                <input name="tanggal" class="form-control" value="<?= date('Y-m-d') ?>" type="hidden" autocomplete="off">

                    <div class="form-group">
                        <label class="control-label">Judul   : </label>
                        <input name="judul" class="form-control" type="text" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Deskripsi : </label>
                        <textarea name="deskripsi" id="addberita"  class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Gambar  : </label>
                        <input name="gambar" class="form-control" type="file" autocomplete="off">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" name="save_sarana" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->


