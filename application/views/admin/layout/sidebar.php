<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="<?= base_url(); ?>admin/dashboard/"
        >
          <div class="sidebar-brand-text mx-3">SIAK</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url(); ?>admin/dashboard/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>DASHBOARD</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />
        <?php 
          $id_user = $this->session->userdata('id');
          $gett = $this->db->query("SELECT * FROM user WHERE id='$id_user'")->row_array();
          if($gett['level'] ==1){         
        ?>
        <!-- Heading -->
        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseUtilities"
            aria-expanded="true"
            aria-controls="collapseUtilities"
          >
            <i class="fas fa-fw fa-wrench"></i>
            <span>Beranda</span>
          </a>
          <div
            id="collapseUtilities"
            class="collapse"
            aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Custom Beranda:</h6>
              <a class="collapse-item" href="<?= base_url(); ?>admin/dashboard/setting_jumbotron">Slider</a>
            </div>
          </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />
        <?php } ?>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapsePages"
            aria-expanded="true"
            aria-controls="collapsePages"
          >
            <i class="fas fa-fw fa-folder"></i>
            <span>Profil</span>
          </a>
          <div
            id="collapsePages"
            class="collapse"
            aria-labelledby="headingPages"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Custom Profil</h6>
              <?php 
                $id_user = $this->session->userdata('id');
                $gett = $this->db->query("SELECT * FROM user WHERE id='$id_user'")->row_array();
                if($gett['level'] ==1){         
              ?>
              <a class="collapse-item" href="<?= base_url(); ?>admin/profile/ubah_visi_misi">Visi Misi</a>
              <?php } ?>
              <a class="collapse-item" href="<?= base_url(); ?>admin/prestasi_akpol/in_daftar_prestasi">Prestasi</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Charts -->
        <?php 
            $id_user = $this->session->userdata('id');
            $gett = $this->db->query("SELECT * FROM user WHERE id='$id_user'")->row_array();
            if($gett['level'] ==1){         
        ?>
        <!-- Nav Item - Tables -->
        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseFasilitas"
            aria-expanded="true"
            aria-controls="collapseFasilitas"
          >
            <i class="fas fa-fw fa-folder"></i>
            <span>Fasilitas</span>
          </a>
          <div
            id="collapseFasilitas"
            class="collapse"
            aria-labelledby="headingPages"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Fasilitas</h6>
              <a class="collapse-item" href="<?= base_url(); ?>admin/fasilitas/in_fasilitas">Fasilitas</a>
              <a class="collapse-item" href="<?= base_url(); ?>admin/fasilitas/in_daftar_fasilitas">Daftar Fasilitas</a
              >
            </div>
          </div>
        </li>
        <?php } ?>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>admin/berita/in_daftar_berita">
            <i class="fas fa-fw fa-table"></i>
            <span>Berita</span></a
          >
        </li>
        <?php 
          $id_user = $this->session->userdata('id');
          $gett = $this->db->query("SELECT * FROM user WHERE id='$id_user'")->row_array();
          if($gett['level'] ==1){         
        ?>
        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>admin/profile/in_hubungi_kami">
            <i class="fas fa-fw fa-table"></i>
            <span>Hubungi Kami</span></a
          >
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>admin/user">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span></a
          >
        </li>
        <?php } ?>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown"
                >
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control bg-light border-0 small"
                        placeholder="Search for..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Alerts -->

              <!-- Nav Item - Messages -->

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    ><?= $this->session->userdata('username'); ?></span
                  > 
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>

                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->