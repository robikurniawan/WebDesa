
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
            <div class="box box-success">
                <div class="box-header with-border ">
                    <h3 class="box-title"><?= $kegiatan->nama_kegiatan ?></h3>
                </div>
            <div class="body">
                
                <!-- <div class="container"> -->
                
                <div class="row">
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <table class="table">
                        <tr>
                            <td>Bidang </td>
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
                        <div id="grafik" style=" height: 300px; width: 100%; margin: 0 auto"></div>
                        <div class="row ">
                        
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <span class="text-success">Terealisasi : <?= $persentase ?> % </span><br>
                            <span class="text-success">Dana Digunakan  : 
                                Rp. <?= format_rupiah($dana['total']) ?>  
                            </span>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                            <span class="text-danger">Belum Terealisasi :  <?= $sisa ?> %</span><br>
                            <span class="text-danger">Prakiraan Biaya :  Rp. <?= format_rupiah($kegiatan->biaya) ?> </span>
                        </div>
                    </div>
                    </div>
                </div>
                
                
           
                
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="box-header with-border ">
                    
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <h3 class="box-title"><b>Proses Realisasi Kegiatan </b></h3>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        </div>
                                                
                    </div>
                </div>
                <table class="table table-striped table-bordered">
                    <tr style="background-color:#40ab66a1;">
                        <th>No.</th>
                        <th>Uraian Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Dana Digunakan</th>
                        <th>Progress Kegiatan</th>
                        <th width="20%">Dokumentasi</th>
                    </tr>
                    <?php 
                        $no = 1;
                        foreach ($realisasi as $key => $value) {
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value->judul ?></td>
                            <td><?= tgl_indo($value->tanggal)?></td>
                            <td>Rp. <?= format_rupiah($value->dana_digunakan) ?></td>
                            <td><?= $value->persentase ?> % </td>
                            <td>
                                <img src="<?= base_url()?>assets/image/realisasi/<?= $value->gambar ?>" class="img-responsive" alt="">
                            </td>
                        </tr>
                    <?php 
                        $no++;
                        }
                    ?>

                </table>




            </div>
        
            </div>
        <!-- </div> -->
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
    ['Terealisasi',<?= $persentase ?> ],
    ['Belum Terealisasi',<?= $sisa ?>  ]
    ]
}]
});


</script>




