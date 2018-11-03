

 


<section class="content">
    <div class="row">

        <div class="col-md-6">
            <div class="box box-success"  >
                <div class="box-header with-border">
                    <h3 class="box-title">Berita Terkini</h3>
                </div>
                    <div class="box-body" >
                        <?php
                        foreach ($artikel as $key => $value) {
                          $judul = substr($value->judul,0,50);
                          $tgl = substr($value->tanggal,8,2);
                          $bulan = substr(getBulan(substr($value->tanggal,5,2)),0,4);
                          $string = str_replace(' ', '-', $value->judul); // Replaces all spaces with hyphens.
                          $slug =  preg_replace('/[^A-Za-z0-9\-]/', '', $string)
                        ?>
                        <div class="row" style="margin-bottom:10px; ">
                            <div class="col-md-3">
                              <img src="<?= base_url()?>assets/image/artikel/<?= $value->gambar ?>" alt="Los Angeles" class="img-responsive" style="border-radius:5px; box-shadow:2px 4px 7px grey; margin-top:10px;">
                            </div>
                            <div class="col-md-9">
                              <h4 class="box-title"><a href="<?= base_url()?>front/detailberita/<?= $value->id_artikel ?>" class="link"><?= $judul ?></a></h4>
                              <small><i class="fa fa-user"></i>   Admin , <?= tgl_indo($value->tanggal)?></small>
                              <p>
                                <?= substr($value->deskripsi,0,135); ?>...
                              </p>
                            </div>
                        </div>
                        <hr>
                        <?php
                          }
                        ?>

                    </div>
                </div>
        </div>
        <div class="col-md-6" >
            <div class="box box-success" >
                <div class="box-header with-border">
                    <h3 class="box-title">Sambutan Kepala Desa </h3>
                </div>
                    <div class="box-body" style="height:500px;">
                       
                       <div class="row">
                            

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div style="float:left; width:30%; margin-right:20px;">
                                    <img src="<?= base_url() ?>assets/image/foto/<?= $profil->foto ?>" alt="" class="img-responsive" style="border-radius:10px;">
                                </div>
                                <p style="text-align:justify;"><?= $profil->sambutan ?></p>
                                <br>
                                <p class="text-right"><b><?= $profil->nama ?><br> Kepala Desa Kabubu </b><br> Kecamatan Topoyo. Kab Mamuju Tengah</p>

                            </div>
                        </div>
                     

                    </div>
                </div>
            </div>
        </div>

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


   
 







        

        

    </div>
</section>
