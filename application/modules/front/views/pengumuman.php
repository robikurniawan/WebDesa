<section class="content-header">
      <h1>
       Pengumuman
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengumuman</li>
      </ol>
    </section>


<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
		<div class="col-md-12">
          <!-- general form elements -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <div class="row" style="margin-bottom:20px;">
                        <div class="col-md-6">
                            <h3 class="box-title">Data Pengumuman </h3>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">

                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr style="background-color:#5ca650;color:#fff;">
                                <th width="5%">No.</th>
                                <th>Tentang </th>
                                <th>Deskripsi</th>
                                <th  width="15%">Lampiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($pengumuman as $key => $value) {

                            ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $value->judul ?></td>
                                <td><?= $value->deskripsi ?></td>

                                <td>
                                    <a href="<?= base_url()?>assets/image/pengumuman/<?= $value->gambar ?>" target="_blank" class="btn btn-primary" ><i class=" fa fa-eye"></i> Lampiran </a>

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
    </div>
</section>
