<div
      class="hero page-inner overlay"
      style="background-image: url('<?= base_url() ?>assets/image/aa.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Berita</h1>

            <!-- <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  Properties
                </li>
              </ol>
            </nav> -->
          </div>
        </div>
      </div>
    </div>
    <br><br><br>

    <div class="section section-properties">
      <div class="container">
        <div class="row">  
          <?php foreach ($data as $berita ): ?>
            <?php 
              $split   = explode(' ', $berita['created_at']);
              $tglpost = $split[0];

              $judul = substr($berita['judul'], 0, );
            ?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30" >
              <a href="<?= base_url()?>berita/detail/<?= $berita['id'] ?>" class="img">
                <img src="<?= base_url() ?>/assets/backend/upload/<?= $berita['img_cover'] ?>" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content" style="height: 250px;">
                
                <div>
                  <span class="city d-block mb-3"><?= $judul ?></span>
                  <span class="d-block mb-2 text-black-50"
                    ><?= date_indo($tglpost) ?></span
                  >

                  <!-- <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="icon-bed me-2"></span>
                      <span class="caption">2 beds</span>
                    </span>
                    <span class="d-block d-flex align-items-center">
                      <span class="icon-bath me-2"></span>
                      <span class="caption">2 baths</span>
                    </span>
                  </div> -->

                  <a
                    href="<?= base_url() ?>berita/detail/<?= $berita['id'] ?>"
                    class="btn btn-primary py-2 px-3"
                    >Selengkapnya</a
                  >
                </div>
              </div>
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