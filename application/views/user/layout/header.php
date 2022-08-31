<div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="<?= base_url() ?>" class="logo m-0 float-start"> 
              <img src="<?php echo base_url() ?>assets/image/akpol.png" style="height: 40px;"> SIAK AKPOL</a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
            >
              <li class="<?php if($active=='Beranda'){ echo 'active'; } ?>"><a href="<?= base_url() ?>">Beranda</a></li>
              <li class="has-children <?php if($active=='profil'){ echo 'active'; } ?>">
                <a href="properties.html">Profil</a>
                <ul class="dropdown">
                  <li><a href="<?= base_url() ?>profil">Visi Misi</a></li>
                  <li><a href="<?= base_url() ?>profil/sejarah">Sejarah Singkat</a></li>
                  <!-- <li class="has-children">
                    <a href="#">Prestasi</a>
                    <ul class="dropdown">
                      <li><a href="#">DELEGASI AKPOL</a></li>
                      <li><a href="#">TARUNA</a></li>
                      <li><a href="#">SISWA SIPSS</a></li>
                    </ul>
                  </li> -->
                  <!-- <li class="has-children">
                    <a href="#">Struktur</a>
                    <ul class="dropdown">
                      <li><a href="#">GUBERNUR DAN WAKIL GUBERNUR</a></li>
                      <li><a href="#">DIT AKADEMIK</a></li>
                      <li><a href="#">DIT BINTARLAT</a></li>
                    </ul>
                  <li><a href="<?= base_url() ?>profil/akreditasi">Akreditasi</a></li>
                  </li> -->

                </ul>
              </li>
              <li class="has-children <?php if($active=='fasilitas'){ echo 'active'; } ?>">
                <a href="properties.html">Fasilitas</a>
                <ul class="dropdown">
                  <?php foreach ($fas as $x ): ?>
                  <li><a href="<?= base_url() ?>fasilitas/gedung/<?= $x['id']?>">Fasilitas <?= $x['nama_fasilitas'] ?></a></li>  
                  <?php endforeach ?>
                </ul>
              </li>
              <li class="<?php if($active=='Login'){ echo 'active'; } ?>"><a href="https://penerimaan.polri.go.id/">Info Pendaftaran</a></li>
              <li class="<?php if($active=='Berita'){ echo 'active'; } ?>"><a href="<?= base_url() ?>berita">Berita</a></li>
              <li class="<?php if($active=='hubungi'){ echo 'active'; } ?>"><a href="<?= base_url() ?>hubungi">Hubungi Kami</a></li>
            </ul>

            <a
              href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar"
            >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>