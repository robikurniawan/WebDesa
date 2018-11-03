
<section class="content-header">
  <h1> Artikel </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Daftar Artikel </li>
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
                            <h3 class="box-title">Data Artikel</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#add_sarana"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                    <table id="table5" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th style="width:200px;">Gambar</th>
                                <th style="width:125px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1; 
                            foreach ($get as $key => $value) {

                            ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $value->judul ?></td>
                                <td><?= $value->tanggal ?></td>
                                <td><img src="<?= base_url()?>assets/image/artikel/<?= $value->gambar ?>" alt="" width="100%"> </td>
                                

                                <td>
                                    <a href="" title="Edit" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_pengurus-<?= $value->id_artikel ?>"><i class="fa fa-edit"></i>  </a>
                                    <a href="" title="Hapus" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_pengurus-<?= $value->id_artikel ?>"><i class="fa fa-trash"></i>  </a>
                                </td>
                                    <!-- Bootstrap modal  add pengurus -->
                                    <div class="modal fade" id="edit_pengurus-<?= $value->id_artikel ?>" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h3 class="modal-title">Edit Pengurus</h3>
                                                </div>
                                                <div class="modal-body form">
                                                    <form action="<?= base_url()?>artikel/update" id="form" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="id" value="<?= $value->id_artikel ?>">
                                                    <input name="tanggal" class="form-control" value="<?= date('Y-m-d') ?>" type="hidden" autocomplete="off">
                                                        <div class="form-group">
                                                            <label class="control-label">Judul : </label>
                                                            <input name="judul" value="<?= $value->judul ?>" class="form-control" type="text" autocomplete="off">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Deskripsi : </label>
                                                            <textarea name="deskripsi" id="editor1" class="form-control"><?= $value->deskripsi ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label"> Gambar  : </label><br>
                                                            <img src="<?= base_url()?>assets/image/artikel/<?= $value->gambar ?>" alt="" width="20%"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Update Gambar / Dokumentasi  : </label>
                                                            <input name="gambar" class="form-control" type="file" autocomplete="off">
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
                                    <div class="modal fade" id="hapus_pengurus-<?= $value->id_artikel ?>" role="dialog">
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
                                                    <a href="<?= base_url()?>artikel/delete/<?= $value->id_artikel ?>/" class="btn btn-danger">Hapus</a>
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
<div class="modal fade" id="add_sarana" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Tambah Artikel </h3>
            </div>
            <div class="modal-body form">
                <form action="<?= base_url()?>artikel/add" id="form" method="POST" enctype="multipart/form-data">
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
