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
                    <h1 class="h3 mb-0 text-gray-800">Visi dan Misi</h1>
                  </div>
                </div>
              </div>
            </div>

            <!-- CONTENT visi Misi -->
            <?php echo form_open('admin/profile/tambah_data') ?>
              <div class="form-group">
                <label for="visi" class="form-label">Visi</label>
                <textarea name="visi"></textarea>
                <script>
                  CKEDITOR.replace("visi");
                </script>
              </div>
              <div class="form-group">
                <label for="misi" class="form-label">Misi</label>
                <textarea name="misi"></textarea>
                <script>
                  CKEDITOR.replace("misi");
                </script>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <!-- Content Row -->
          </div>