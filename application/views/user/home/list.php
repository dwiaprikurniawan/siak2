<div class="hero">
      <div class="hero-slide">
        <?php foreach ($slider as $k): ?>
          
        <div class="img overlay"style="background-image: url('<?php echo base_url() ?>assets/backend/upload/<?= $k['gambar'] ?>')"></div>
        <?php endforeach ?>
      </div>

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

    <div class="section" style="margin-top: -150px;">
      <div class="container">
        <div class="row" style="">
          <div class="col-lg-12 " style="padding: 20px;  margin-top:">
            <center>                
                <h1>AKADEMI KEPOLISIAN</h1> <br>
                  <h5> Akademi Kepolisian atau sering disingkat Akpol adalah sebuah lembaga pendidikan untuk mencetak Perwira Polri. Akpol adalah unsur pelaksana pendidikan pembentukan Perwira Polri yang berada di bawah Lemdiklat Polri (Lembaga Pendidikan dan Latihan Polri). <br><br>

                Berdasarkan Peraturan Kapolri Nomor 21 Tahun 2010, Akpol bertujuan menyelenggarakan pendidikan pembentukan Perwira Polri tingkat Akademi dan lama pendidikan adalah 4 tahun (8 Semester) dengan output pangkat Inspektur Polisi Dua (Ipda). Pendekatan pendidikan melalui metode pembelajaran, pelatihan dan pengasuhan. Akpol tergabung sebagai anggota INTERPA (International Association of Police Academies) dari 36 negara anggota lainnya.</h5>
                <hr style="height: 3px;  border-top: 1px dotted red;">
            </center>
          </div>
        </div>
      </div>
    </div>

    <div class="section" style="margin-top: -150px;">
      <div class="container">
        <div class="row" style="  border: 1px solid; padding: 5px;box-shadow: 5px 5px 5px 2px #888888;border-radius: 10px;">
          <div class="col-lg-12 " style="padding: 150px;  margin-top:">
            <center>
              <strong><h1 style=" font-weight: 100px; font-family: arial;">SURVEI PELAYANAN <br> AKADEMI KEPOLISIAN T.A. 2021</h1></strong>
              <a
                href="https://akpol.ac.id/wp-content/uploads/2021/06/Hasil-Laporan-survei-layanan-di-Akpol.pdf"
                class="btn btn-primary text-white py-3 px-4"
                >Klik Disini</a
              >
            </center>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-5 bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-6 mb-5">
            <!-- <h2 class="font-weight-bold heading text-primary mb-4">
              Our Agents
            </h2>
            <p class="text-black-50">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
              enim pariatur similique debitis vel nisi qui reprehenderit totam?
              Quod maiores.
            </p> -->
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <img
                src="<?= base_url() ?>assets/image/hall.png"
                alt="Image"
                class="img-fluid"
              />

              <div class="person-contents">
                <h2 class="mb-0"><a href="https://akpol.ac.id/zona-integritas/">ZONA INTREGITAS</a></h2>
               
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <img
                src="<?= base_url() ?>assets/image/graduate-cap.png"
                alt="Image"
                class="img-fluid"
              />

              <div class="person-contents">
                <h2 class="mb-0"><a href="https://journal.akademikepolisian.com/">JURNAL AKPOL</a></h2>
            
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <img
                src="<?= base_url() ?>assets/image/budget.png"
                alt="Image"
                class="img-fluid"
              />

              <div class="person-contents">
                <h2 class="mb-0"><a href="https://akpol.ac.id/anggaran/">PERACANAAN ANGGARAN</a></h2>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="row justify-content-center footer-cta" data-aos="fade-up">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4">Siap menjadi taruna Akademi Kepolisian ?</h2>
          <p>
            <a
              href="https://penerimaan.polri.go.id/"
              target="_blank"
              class="btn btn-primary text-white py-3 px-4"
              >Daftar Sekarang</a
            >
          </p>
        </div>
        <!-- /.col-lg-7 -->
      </div>
      <!-- /.row -->
    </div>
    <br> 





