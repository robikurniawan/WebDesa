<form action="<?= base_url('profil/update')?>" method="POST" enctype="multipart/form-data">
    <div class="row">

      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <center >
        <img src="<?= base_url()?>assets/image/foto/<?= $get->foto ?> " alt="" style="width:80%; border-radius:14px; box-shadow:2px 3px 5px grey;" class="img-responsive">
        </center>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <div class="form-group">
          <label for="">Nama Kepala Desa </label>
          <input type="text" name="nama" value="<?= $get->nama ?> " id="" class="form-control" >
        </div>
        <div class="form-group">
          <label for="">Update Foto Kepala Desa </label>
          <input type="file" name="foto" id="" class="form-control" >
        </div>
        <button type="submit" name="update_misi" class="btn btn-primary">Simpan</button>
      </div>

      </div>




</form>
