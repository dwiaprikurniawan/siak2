<div clas="row">
          <div class="col-lg-12">

              <!--  FLASH DATA  -->
                  <?php 
                    $notif = $this->session->flashdata('msg');
                    if($notif!=""){ ?>
                      <div class="alert alert-success" role="alert" id="notifikasi">
                          <strong>Sukses!</strong> <?= $notif; ?>
                      </div>
                    <?php } ?>  
                    <!--  AKHIR FLASH DATA  -->

                    <!-- FLASH DATA -->    
                      <?php 
                      $dat = $this->session->flashdata('msg2');
                          if($dat!=""){ ?>
                                  <div id="notifikasi" role="alert" class="alert alert-warning"><?=$dat;?></div>
                      <?php } ?>  
                      <!-- AKHIR FLASH DATA -->
            </div>
            </div>

            
  <div class="container-fluid mt--6">
  <div class="row">
    <div class="col-lg-12">
      <div class="card-wrapper">
        <!-- Input groups -->
        <!-- Isi -->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">My Profile</h3>
          </div>
          <!-- Card body -->
          <div class="card-body">
  
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label">Username</label>
                  <input class="form-control" type="text" value="<?= $data['username']; ?>" readonly>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label">Email</label>
                  <input class="form-control" type="email" value="<?= $data['email']; ?>" readonly>
                </div>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group" style="text-align: center;">
                  <button type="button" class="btn btn-success" data-target="#modal-change-password" data-toggle="modal">Ganti Password</button> 
                  <button type="button" class="btn btn-info" data-target="#modal-edit" data-toggle="modal">Ubah Profile</button>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- MODAL BOX EDIT DATA -->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Profile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo form_open_multipart('admin/profile/edit_profile') ?>
          <input type="text" name="id" value="<?= $data['id']; ?>" hidden>
             <div class="form-group">
              <label for="username" class="form-control-label">Username</label>
              <input class="form-control" type="text" id="username" name="username" value="<?= $data['username']; ?>" readonly>
            </div>

            <div class="form-group">
              <label for="email" class="form-control-label">Email</label>
              <input class="form-control" type="text" id="email" name="email" value="<?= $data['email']; ?>">
            </div>

            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <!-- MODAL BOX AKHIR EDIT DATA -->


  <!-- MODAL BOX EDIT PASSWORD -->
  <div class="modal fade" id="modal-change-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url(); ?>admin/profile/ganti_password">
            <input type="text" hidden name="id" value="<?= $this->session->userdata('id'); ?>">
            <div class="form-group">
              <label for="password1" class="form-control-label">Password Baru</label>
              <input class="form-control" type="password" name="password1" id="password1" required>
            </div>

            <div class="form-group">
              <label for="password2" class="form-control-label">Konfirmasi Password Baru</label>
              <input class="form-control" type="password" id="password2" name="password2" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <!-- MODAL BOX AKHIR EDIT DATA -->