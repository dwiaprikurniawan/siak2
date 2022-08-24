<div
      class="hero page-inner overlay"
      style="background-image: url('<?= base_url() ?>assets/user/images/hero_bg_3.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">
              <?= $data['judul'] ?>
            </h1>
    
            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">
                  <a href="properties.html">berita</a>
                </li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  <?= $data['judul'] ?>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row justify-content-between">
          <center>
            <div class="col-lg-8">
            <div class="img-property-slide-wrap">
              <div class="img-property-slide">
                <img src="<?= base_url () ?>assets/backend/upload/<?= $data['img_cover'] ?>" style="height: 400px;" alt="Image" class="img-fluid" />
              </div>
            </div>
          </div>
        </center>
          <div class="col-lg-12">
            <?php 
              $split   = explode(' ', $data['created_at']);
              $tglpost = $split[0];
            ?>
            <h2 class="heading text-primary"><?= $data['judul'] ?></h2>
            <p class="meta"><?= date_indo($tglpost) ?></p>
            <p class="text-black-0">
              <?= $data['isi'] ?>
            </p>
            <!-- <p class="text-black-50">
              Perferendis eligendi reprehenderit, assumenda molestias nisi eius
              iste reiciendis porro tenetur in, repudiandae amet libero.
              Doloremque, reprehenderit cupiditate error laudantium qui, esse
              quam debitis, eum cumque perferendis, illum harum expedita.
            </p> -->

            <!-- <div class="d-block agent-box p-5">
              <div class="img mb-4">
                <img
                  src="<?= base_url () ?>assets/user/images/person_2-min.jpg"
                  alt="Image"
                  class="img-fluid"
                />
              </div>
               <div class="text">
                <h3 class="mb-0">Alicia Huston</h3>
                <div class="meta mb-3">Real Estate</div>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Ratione laborum quo quos omnis sed magnam id ducimus saepe
                </p>
                <ul class="list-unstyled social dark-hover d-flex">
                  <li class="me-1">
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                  <li class="me-1">
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li>
                  <li class="me-1">
                    <a href="#"><span class="icon-facebook"></span></a>
                  </li>
                  <li class="me-1">
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </li>
                </ul>
              </div> 
            </div> -->
          </div>
        </div>
      </div>
    </div>