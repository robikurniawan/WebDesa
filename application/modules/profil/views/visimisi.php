<form action="<?= base_url('profil/update_visimisi')?>" method="POST">
   <div class="form-group">
     <label for="">Visi  :  </label>
     <textarea class="form-control" id="editor1x"  name="visi"  rows="3"><?= $get->visimisi ?></textarea>
   </div>
   <div class="form-group">
     <label for="">Misi  :  </label>
     <textarea class="form-control" id="editor2x"  name="misi" rows="3"><?= $get->misi ?></textarea>
   </div>

   <button type="submit"  class="btn btn-primary">Submit</button>
</form>
