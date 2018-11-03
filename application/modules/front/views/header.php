<center style="padding-top:20px; background-image:url('<?= base_url()?>assets/image/bgkembang.png');">
            <img src="<?= base_url()?>assets/front/x.png" alt="" style="width:100px;">
            <p>
               <b>DESA KABUBU <br>
               KECAMATAN TOPOYO, KABUPATEN MAMUJU TENGAH</b>
            </p>
         </center>
         <header class="main-header" style="margin-top:-9px;">
            <nav class="navbar navbar-static-top" style="box-shadow:1px 2px 12px 0px #7d7676;">
               <div class="container">
                  <div class="navbar-header">
                     <!-- <a href="#" class="navbar-brand"> -->
                     <!-- </a> -->
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                     <i class="fa fa-bars"></i>
                     </button>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                     <ul class="nav navbar-nav">
                     <li><a href="<?= base_url('front/index')?>">Beranda</a></li>
                     <!-- <li><a href="<?= base_url('front/profil')?>">Profil</a></li> -->
                     <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <span class="caret"></span></a>
                       <ul class="dropdown-menu" role="menu">
                         <li><a href="<?= base_url()?>front/sambutan">Sambutan Kepala Desa  </a></li>
                         <li><a href="<?= base_url()?>front/visimisi">Visi Misi </a></li>
                         <li><a href="<?= base_url()?>front/struktur">Struktur Organisasi</a></li>
                         <li><a href="<?= base_url()?>front/tupoksi">Tupoksi</a></li>
                         <li><a href="<?= base_url()?>front/aparat">Aparat Desa</a></li>
                       </ul>
                     </li>
                     <li><a href="<?= base_url('front/berita')?>">Berita</a></li>
                    <li><a href="<?= base_url('front/perencanaan')?>">Perencanaan</a></li>
                     <li><a href="<?= base_url('front/kegiatan')?>">Kegiatan</a></li>
                      <li><a href="<?= base_url('front/realisasi')?>">Realisasi</a></li>
                      <li><a href="<?= base_url('front/laporan')?>">Laporan</a></li>
                     <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Regulasi <span class="caret"></span></a>
                       <ul class="dropdown-menu" role="menu">
                         <?php
                          $reg =  $this->kategori_regulasi->get_all();
                          foreach ($reg as $key => $value) {
                         ?>
                         <li><a href="<?= base_url()?>front/detailregulasi/<?= $value->id_kategori_regulasi ?>"><?= $value->nama_kategori_regulasi ?></a></li>
                         <?php
                            }
                         ?>
                       </ul>
                     </li>

                     <!-- <li><a href="<?= base_url('front/pengumuman')?>">Pengumuman</a></li> -->
                     <li><a href="<?= base_url('front/galeri')?>">Galeri</a></li>

                  </div>
                  <!-- /.navbar-custom-menu -->
                  <!-- Navbar Right Menu -->
                  <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="<?= base_url()?>login" >
                <!-- The user image in the navbar-->
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Masuk <i class="fa fa-sign-in"></i> </span>
              </a>

            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
                  <!-- /.navbar-custom-menu -->
               </div>
               <!-- /.container-fluid -->
            </nav>
         </header>
