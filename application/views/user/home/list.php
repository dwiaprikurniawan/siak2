<div class="hero">
      <div class="hero-slide">
        <?php foreach ($slider as $k): ?>
          
        <div class="img overlay"style="background-image: url('<?php echo base_url() ?>assets/backend/upload/<?= $k['gambar'] ?>')"></div>
        <?php endforeach ?>
      </div>

      <!-- <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center">
            <h1 class="heading" data-aos="fade-up">
              Easiest way to find your dream home
            </h1>
            <form
              action="#"
              class="narrow-w form-search d-flex align-items-stretch mb-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <input
                type="text"
                class="form-control px-4"
                placeholder="Your ZIP code or City. e.g. New York"
              />
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>
        </div>
      </div> -->
    </div>

    <div class="section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6">
            <h2 class="font-weight-bold text-primary heading">
              Berita
            </h2>
          </div>
          <div class="col-lg-6 text-lg-end">
            <p>
              <a
                href="<?= base_url() ?>berita"
                class="btn btn-primary text-white py-3 px-4"
                >Tampilkan semua berita</a
              >
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="property-slider-wrap">
              <div class="property-slider">
                
                <!-- .item -->

                
                <!-- .item -->

                
                <!-- .item -->

                
                <!-- .item -->

                
                <!-- .item -->

                
                <!-- .item -->

                
                <!-- .item -->

                
                <!-- .item -->

                <?php foreach ($berita as $data): ?>
                  <?php 
                    $split   = explode(' ', $data['created_at']);
                    $tglpost = $split[0];

                    $judul = substr($data['judul'],10);
              
                  ?>
                  <div class="property-item">
                  <a href="<?= base_url() ?>berita/detail/<?= $data['id'] ?>" class="img">
                    <img src="<?= base_url() ?>/assets/backend/upload/<?= $data['img_cover'] ?>" alt="Image" class="img-fluid" />
                  </a>

                  <div class="property-content">
                    
                    <div>
                      <span class="d-block mb-2 text-black-50"
                        ><?= date_indo($tglpost) ?></span
                      >
                      <span class="city d-block mb-3"><?= $judul ?></span>

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
                        href="<?= base_url() ?>berita/detail/<?= $data['id'] ?>"
                        class="btn btn-primary py-2 px-3"
                        >See details</a
                      >
                    </div>
                  </div>
                </div>
                <?php endforeach ?>
                <!-- .item -->
              </div>

              <div
                id="property-nav"
                class="controls"
                tabindex="0"
                aria-label="Carousel Navigation"
              >
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="property"
                  tabindex="-1"
                  >Prev</span
                >
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="property"
                  tabindex="-1"
                  >Next</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>