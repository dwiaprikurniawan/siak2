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
            <h1>Ubah Prestasi</h1>
            <hr />
            <?php echo form_open_multipart('admin/prestasi_akpol/ubah_data') ?>
            <input type="hidden" readonly value="<?= $data['id']; ?>" name="id" class="form-control" >
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="name" class="form-control" id="judul" name="judul" value="<?= $data['judul']; ?>" required=""/>
              </div>
              <div class="form-group">
                <label for="isi" class="form-label" required="">Isi Prestasi</label>
                <textarea name="isi" required=""><?= $data['isi']; ?></textarea>
                <script>
                  CKEDITOR.replace("isi");
                </script>
              </div>
              <div class="form-group">
                <label for="gambar">Gambar</label><br>
                <img src="<?= base_url('assets/backend/upload/') .$data['img_cover']; ?>" alt="" width="100" height="100"><br>
                <input type="file" id="image" name="image" class="form-control">
                <small>Image file size must not exceed 1000 kb. Allowed types: png, jpg, jpeg.</small>
              </div>
              <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Simpan" />
            </form>
          </div>

          <!-- /.container-fluid -->
        </div>