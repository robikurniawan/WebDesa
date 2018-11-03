
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
    <h1>Regulasi </h1>
  </div>
</div>
<!-- /page_banner end-->


<div class="container" style="margin-top:50px; margin-bottom:50px;">
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="row">
            <?php
            foreach ($kat_reg as $key => $value) {
            ?>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
              <div class="box-button">
                <a href="<?= base_url()?>front/detailregulasi/<?= $value->id_kategori_regulasi ?>">
                  <div class="caption-profile">
                    <img src="<?= base_url()?>assets/front/auction.svg" style="width:40%;"><br><br>
                    <?= $value->nama_kategori_regulasi ?>
                  </div>
                </a>
              </div>
            </div>
            <?php
              }
            ?>
          </div>
      </div>


  </div>
</div>
