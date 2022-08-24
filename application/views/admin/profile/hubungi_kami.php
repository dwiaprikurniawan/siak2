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


<!-- Begin Page Content -->
<div class="container">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 mb-3">
                    <h1 class="h3 mb-0 text-gray-800">Ubah Hubungi Kami</h1>
                  </div>
                </div>
              </div>
            </div>

            <!-- CONTENT visi Misi -->
            <?php echo form_open('admin/profile/proses_hk') ?>
              <div class="form-group">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat"></textarea>
                <script>
                  CKEDITOR.replace("alamat");
                </script>
              </div>
              <div class="form-group">
                        <label for="email">Email : </label>
                        <input type="email" id="email" name="email"  class="form-control" placeholder="Email" required>
                        <small class="form-text text-danger"><?= form_error('email');?></small>
              </div>
              <div class="form-group">
                        <label for="cp">Contact Person : </label>
                        <input type="text" id="cp" name="cp"  class="form-control" placeholder="Contact Person" required>
                        <small class="form-text text-danger"><?= form_error('cp');?></small>
              </div>


              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <!-- Content Row -->
          </div>