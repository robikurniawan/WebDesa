
<style>
.box-button{
  background:linear-gradient(to right, rgba(109,46,192,1) 0%, rgba(0,147,226,1) 100%);
  text-align:center;
  border-radius:10px;
  box-shadow:1px 3px 15px #837e7e;
  margin-bottom:20px;
}
.box-button:hover {
    background: linear-gradient(to right, rgb(180, 123, 255) 0%, rgb(142, 202, 234) 100%);

}

.caption-profile{
  padding:50px;
  color:#fff;
  font-size:18px;

}
</style>
<!-- /page_banner start-->
<div class="carousel-item active" style="background-image: url(<?= base_url()?>assets/front/images/about_pagebg.jpg); background-size:cover; height:200px; width:100%;">
  <div class="carousel-caption1">
    <h1>Profil</h1>
  </div>
</div>
<!-- /page_banner end-->

<div class="container" style="margin-top:50px; margin-bottom:50px;">
    <div class="row">

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="box-button">
                <a href="<?= base_url('front/profil/sambutan')?>">
                  <div class="caption-profile">
                    <i class="fa fa-bullhorn" style="font-size:30px;"></i><br>
                    Sambutan
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="box-button">
                <a href="<?= base_url('front/profil/strukturorganisasi')?>">
                  <div class="caption-profile">
                    <i class="fa fa-sitemap" style="font-size:30px;"></i><br>
                    Struktur Organisasi
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="box-button">
                <a href="<?= base_url('front/profil/visimisi')?>">
                  <div class="caption-profile">
                    <i class="fa fa-file-text" style="font-size:30px;"></i><br>
                  Visi Misi
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="box-button">
                <a href="<?= base_url('front/profil/pegawai')?>">
                  <div class="caption-profile">
                    <i class="fa fa-users" style="font-size:30px;"></i><br>
                    Pegawai
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

          <?php
            $link = $this->uri->segment(3);
            if ($link == "sambutan") {
              echo "<h3>Sambutan Kepala Dinas</h3>";
              echo $profil->sambutan;
            } elseif($link == "visimisi") {
              echo "<h3>Visi Misi </h3>";
              // echo $profil->visimisi;
            } elseif ($link == "strukturorganisasi") {
              echo "<h3>Sruktur Organisasi</h3>";
              // echo $profil->struktur;
            }elseif ($link == "pegawai") {
              echo "<h3>Daftar Pegawai </h3>";
              // echo "pegawai";
            }else{
              echo "kosong";
            }

          ?>

        </div>




    </div>
</div>
