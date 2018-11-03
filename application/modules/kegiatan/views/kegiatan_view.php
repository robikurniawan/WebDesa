
<section class="content-header">
  <h1> Kegiatan </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Daftar kegiatan  </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
		<div class="col-md-12">
          <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="row" style="margin-bottom:20px;">
                        <div class="col-md-6">
                            <h3 class="box-title">Data kegiatan </h3>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                            </div>
                        </div>
                    </div>
                    <table id="table5" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th>Bidang </th>
                                <th>Nama Kegiatan</th>
                                <th>Lokasi</th>
                                <th>Prakiraan Biaya</th>
                                <th>Tahun </th>
                                <th>Tanggal Dilaksanakan </th>
                                <th style="width:125px;">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($get as $key => $value) {

                            ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $value->nama_bidang ?></td>
                                <td><?= $value->nama_kegiatan ?></td>
                                <td><?= $value->lokasi ?></td>
                                <td>Rp. <?= format_rupiah($value->biaya) ?></td>
                                <td><?= $value->tahun ?></td>
                                <td>
                                     <?= tgl_indo($value->tgl_mulai_kegiatan) ?>
                                </td>
                                <td>
                                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#detail_kegiatan-<?= $value->id_kegiatan ?>"><i class=" fa fa-eye"></i> Detail </a>


                                    <div class="modal fade" id="detail_kegiatan-<?= $value->id_kegiatan ?>" role="dialog">
                                        <div class="modal-dialog modal-lg ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h3 class="modal-title"><?= $value->nama_kegiatan ?></h3>
                                                </div>
                                                <div class="modal-body form">

                                                   <table class="table">
                                                        <tr>
                                                            <td>Bidang </td>
                                                            <td>:</td>
                                                            <td><?= $value->nama_bidang ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Kegiatan </td>
                                                            <td>:</td>
                                                            <td><?= $value->nama_kegiatan ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi </td>
                                                            <td>:</td>
                                                            <td><?= $value->lokasi ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenis Kegiatan </td>
                                                            <td>:</td>
                                                            <td><?= $value->jenis_kegiatan ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Manfaat </td>
                                                            <td>:</td>
                                                            <td><?= $value->manfaat ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sasaran </td>
                                                            <td>:</td>
                                                            <td><?= $value->sasaran ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prakiraan Biaya </td>
                                                            <td>:</td>
                                                            <td>Rp. <?= format_rupiah($value->biaya) ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tahun Direalisasikan </td>
                                                            <td>:</td>
                                                            <td><?= $value->tahun ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal Ditetapkan </td>
                                                            <td>:</td>
                                                            <td><?= tgl_indo($value->tgl_ditetapkan) ?></td>
                                                        </tr>
                                                   </table>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>








<!-- Bootstrap modal  add sarana -->
<div class="modal fade" id="add_kegiatan" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Tambah Kegiatan  </h3>
            </div>
            <div class="modal-body form">
                <form action="<?= base_url()?>kegiatan/add" id="form" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="control-label">Bidang Penanggnung Jawab  : </label>
                        <select name="id_bidang" class="form-control" required id="">
                            <option value="">Pilih</option>
                            <?php
                                foreach ($bidang as $key => $value) {
                            ?>
                                <option value="<?= $value->id_bidang ?>"> <?= $value->nama_bidang ?> </option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Nama Kegiatan : </label>
                        <textarea name="nama_kegiatan" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Lokasi  : </label>
                        <input name="lokasi" class="form-control" type="text" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Jenis Kegiatan : </label>
                        <select name="jenis_kegiatan" id="" class="form-control">
                            <option value="">Pilih</option>
                            <option value="Pembangunan">Pembangunan</option>
                            <option value="Pemberdayaan">Pemberdayaan</option>
                            <option value="Pemberdayaan">Pengadaan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Manfaat  : </label>
                        <textarea name="manfaat"  class="form-control" id=""></textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Sasaran  : </label>
                        <textarea name="sasaran"  class="form-control" id=""></textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Prakiraan Biaya  : </label>
                        <input name="biaya" class="form-control" type="number" autocomplete="off">
                    </div>

                     <div class="form-group">
                        <label class="control-label">Sumber Dana : </label>
                        <select name="sumber" id="" class="form-control">
                            <option value="">Pilih</option>
                            <option value="ADD">ADD</option>
                            <option value="BUMDES">BUMDES</option>
                            <option value="APBD">APBD</option>
                            <option value="APBN">APBN</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Tahun Direalisasikan  : </label>
                        <select name="tahun" id="" class="form-control">
                            <option value="">Pilih</option>
                            <?php
                                for ($i=2000; $i < 2025; $i++) {
                            ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Tanggal Ditetapkan  : </label>
                        <input name="tgl_ditetapkan" class="form-control" type="date" autocomplete="off">
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
