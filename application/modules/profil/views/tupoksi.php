<form action="<?= base_url('profil/update_tupoksi')?>" method="POST">
   <div class="form-group">
     <label for="">Tupoksi Desa  :  </label>
     <textarea class="form-control" id="editor1"  name="tupoksi" id="" rows="3"><?= $get->tupoksi ?></textarea>
   </div>

   <button type="submit"  class="btn btn-primary">Submit</button>
</form>
