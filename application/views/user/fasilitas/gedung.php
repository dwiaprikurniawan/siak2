<div
      class="hero page-inner overlay"
      style="background-image: url('<?= base_url() ?>assets/user/images/hero_bg_1.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up"><?= $fasi['nama_fasilitas'] ?></h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              
            </nav>
          </div>
        </div>
      </div>
    </div>
    

    <div class="section section-properties">
      <div class="container">
        <div class="row">
          <?php foreach ($data as $img): ?>             
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
              <a href="property-single.html" class="img">
                <img src="<?= base_url() ?>assets/backend/upload/<?= $img['nama_gambar'] ?>" alt="Image" class="img-fluid"  />
              </a>

              <!--  -->
            </div>
            <!-- .item -->
          </div>
          <?php endforeach ?>
        </div>
        <?php if ($jum>20): ?>
          
        <div class="row align-items-center py-5">
          <div class="col-lg-3">Pagination (1 of 10)</div>
          <div class="col-lg-6 text-center">
            <div class="custom-pagination">
              <a href="#">1</a>
              <a href="#" class="active">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
            </div>
          </div>
        </div>
        <?php endif ?>
      </div>
    </div>