<form action="<?= base_url('profil/update_sambutan')?>" method="POST">
   <div class="form-group">
     <label for="">Sambutan Kepala Desa  :  </label>
     <textarea class="form-control" id="editor1"  name="sambutan" id="" rows="3"><?= $get->sambutan ?></textarea>
   </div>

   <button type="submit"  class="btn btn-primary">Submit</button>
</form>
