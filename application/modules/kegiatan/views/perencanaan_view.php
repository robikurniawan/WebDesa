<section class="content-header">
  <h1> Perencanaan Desa  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Daftar Perencanaan Desa  </li>
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
                            <h3 class="box-title">Data Perencanaan Desa </h3>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#add_kegiatan"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
                            </div>
                        </div>
                    </div>
                    <div  style="overflow-y: auto">
                    <table id="table5" class="table table-striped table-bordered" cellspacing="0" style="width:auto">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th>Bidang </th>
                                <th>Nama Kegiatan</th>
                                <th>Lokasi</th>
                                <th  width="13%">Prakiraan Biaya</th>
                                <th>Tahun </th>
                                <th>Detail</th>
                                <th width="17%">Status</th>
                                <th style="width:70px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($get as $key => $value) {
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
                                <td><?= $value->tahun ?></td>
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
                                                   <hr>
                                                   Status : <br>
                                                   <?php
                                                     if($value->status == "n"){
                                                   ?>
                                                    <h3 class="text-danger">Perencanaan Belum Dilaksanakan</h3>

                                                   <?php
                                                     }else{
                                                   ?>
                                                   <h3 class="text-success">
                                                      Tanggal Mulai Dilaksanakan : <?= tgl_indo($value->tgl_mulai_kegiatan) ?>
                                                   </h3>

                                                   <?php
                                                    }
                                                   ?>


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
                                <td>
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-<?= $color ?>"><?= $title ?></button>
                                    <button type="button" class="btn btn-<?= $color ?> dropdown-toggle" data-toggle="dropdown">
                                      <span class="caret"></span>
                                      <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                      <?php
                                        if($value->status == "n"){
                                      ?>
                                        <li><a href="#" data-toggle="modal" data-target="#proses-<?= $value->id_kegiatan ?>"> Lanjutkan Perencanaan </a></li>

                                      <?php
                                        }else{
                                      ?>
                                        <li><a href="#">Tanggal Perencanaan Dilaksanakan : <br> <b><?= tgl_indo($value->tgl_mulai_kegiatan) ?></b> </a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?= base_url()?>kegiatan/cancel/<?= $value->id_kegiatan ?>"> <i class=" fa fa-close"></i>   Batalkan Kegiatan </a></li>
                                      <?php
                                        }
                                      ?>
                                      <!-- <li class="divider"></li> -->

                                    </ul>
                                  </div>

                                    <div class="modal fade" id="proses-<?= $value->id_kegiatan ?>" role="dialog">
                                          <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h3 class="modal-title">Proses Perencanaan </h3>
                                                </div>
                                                <form action="<?= base_url()?>kegiatan/update_perencanaan" method="POST" class="form">
                                                <input type="hidden" name="id" value="<?= $value->id_kegiatan?>">
                                                <div class="modal-body">
                                                      Kegiatan : <?= $value->nama_kegiatan ?>
                                                      <hr>
                                                      <div class="form-group">
                                                          <label for="">Tanggal Mulai Kegiatan : </label><br>
                                                          <input type="date" name="tgl" class="form-control" id="" placeholder="" required>
                                                      </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Proses</a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                </div>
                                                </form>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <!-- End Bootstrap modal -->
                                </td>
                                <td>
                                    <a href="" title="Edit" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_kegiatan-<?= $value->id_kegiatan ?>"><i class="fa fa-edit"></i>  </a>
                                    <a href="" title="Hapus" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_kegiatan-<?= $value->id_kegiatan ?>"><i class="fa fa-trash"></i>  </a>
                                </td>
                                    <!-- Bootstrap modal  add pengurus -->
                                    <div class="modal fade" id="edit_kegiatan-<?= $value->id_kegiatan ?>" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h3 class="modal-title">Edit Kegiatan</h3>
                                                </div>
                                                <div class="modal-body form">
                                                    <form action="<?= base_url()?>kegiatan/update" id="form" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="id" value="<?= $value->id_kegiatan ?>">


                                                    <div class="form-group">
                                                        <label class="control-label">Bidang Penanggnung Jawab  : </label>
                                                        <select name="id_bidang" class="form-control" required id="">
                                                            <option value="">Pilih</option>
                                                            <?php
                                                                foreach ($bidang as $key => $valuex) {
                                                                    if ($valuex->id_bidang == $value->id_bidang) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }

                                                            ?>
                                                                <option value="<?= $valuex->id_bidang ?>" <?= $select ?>> <?= $valuex->nama_bidang ?> </option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Nama Kegiatan : </label>
                                                        <textarea name="nama_kegiatan" class="form-control"><?= $value->nama_kegiatan ?></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Lokasi  : </label>
                                                        <input name="lokasi" class="form-control" type="text" autocomplete="off" value="<?= $value->lokasi ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Jenis Kegiatan : </label>
                                                        <select name="jenis_kegiatan" id="" class="form-control">
                                                            <option value="">Pilih</option>
                                                            <option value="Pembangunan" <?php if($value->jenis_kegiatan == "Pembangunan"){ echo "selected"; } ?>  >Pembangunan</option>
                                                            <option value="Pemberdayaan" <?php if($value->jenis_kegiatan == "Pemberdayaan"){ echo "selected"; } ?> >Pemberdayaan</option>
                                                            <option value="Pengadaan" <?php if($value->jenis_kegiatan == "Pengadaan"){ echo "selected"; } ?>  >Pengadaan</option>
                                                            <option value="Pembinaan" <?php if($value->jenis_kegiatan == "Pembinaan"){ echo "selected"; } ?>  >Pembinaan</option>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Manfaat  : </label>
                                                        <textarea name="manfaat"  class="form-control" id=""><?= $value->manfaat ?></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Sasaran  : </label>
                                                        <textarea name="sasaran"  class="form-control" id=""><?= $value->sasaran ?></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Prakiraan Biaya  : </label>
                                                        <input name="biaya" class="form-control" type="number" value="<?= $value->biaya ?>" autocomplete="off">
                                                    </div>

                                                    <input type="hidden" name="sumber" value="ADD">


                                                    <div class="form-group">
                                                        <label class="control-label">Tahun Direalisasikan  : </label>
                                                        <select name="tahun" id="" class="form-control">
                                                            <option value="">Pilih</option>
                                                            <?php
                                                                for ($i=2000; $i < 2025; $i++) {
                                                                    if ($i == $value->tahun) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }

                                                            ?>
                                                                <option value="<?= $i ?>" <?= $select ?>  ><?= $i ?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Tanggal Ditetapkan  : </label>
                                                        <input name="tgl_ditetapkan" value="<?= $value->tgl_ditetapkan ?>" class="form-control" type="date" autocomplete="off">
                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                </div>
                                                </form>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <!-- End Bootstrap modal -->
                                    <!-- Bootstrap modal  add pengurus -->
                                    <div class="modal fade" id="hapus_kegiatan-<?= $value->id_kegiatan ?>" role="dialog">
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
                                                    <a href="<?= base_url()?>kegiatan/delete/<?= $value->id_kegiatan ?>/" class="btn btn-danger">Hapus</a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                </div>
                                                </form>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                        <!-- End Bootstrap modal -->
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
                        <label class="control-label">Bidang Penanggung Jawab  : </label>
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
                            <option value="Pengadaan">Pengadaan</option>
                            <option value="Pembinaan">Pembinaan</option>
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

                    <input type="hidden" name="sumber" value="ADD">


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