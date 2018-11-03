<form action="<?= base_url('profil/update_sosmed')?>" method="POST">
   <div class="form-group">
     <label for=""> WhatsApp :  </label>
     <input type="text" autocomplete="off" value="<?= $get->akun_wa ?>" class="form-control" name="wa" id="">
   </div> 
   <div class="form-group">
     <label for=""> Facebook :  </label>
     <input type="text" autocomplete="off" value="<?= $get->akun_fb ?>" class="form-control" name="fb" id="">
   </div> 
   <div class="form-group">
     <label for=""> Linkedin :  </label>
     <input type="text" autocomplete="off" value="<?= $get->akun_linkedin ?>" class="form-control" name="lin" id="">
   </div> 
   <div class="form-group">
     <label for=""> Instagram :  </label>
     <input type="text" autocomplete="off" value="<?= $get->akun_instagram ?>" class="form-control" name="ig" id="">
   </div> 

   <button type="submit"  class="btn btn-primary">Submit</button>
</form>


