<form action="<?= base_url('profil/update_struktur')?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="">Update Srtuktur Organisasi: </label><br>
    <input type="file" name="struktur" id="" class="form-control" placeholder="" aria-describedby="helpId">
  </div>
  <button type="submit"  class="btn btn-primary">Submit</button>
 </form>
   <div class="form-group">
     <label for="">Srtuktur Organisasi  :  </label>
    <img src="<?= base_url()?>assets/image/foto/<?= $get->struktur ?>" alt="" class="img-responsive">
   </div>
