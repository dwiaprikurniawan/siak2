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
          <div class="container-fluid">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Gambar</h6>
              </div>
              <br>
              <div class="card-body">
                <center>
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_gambar">
                    (+) TAMBAH
                  </button>
                </center>
                <br>
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th width="70">No</th>
                        <th>Nama Jabatan</th>
                        <th width="90">Aksi</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th width="70">No</th>
                        <th>Nama Jabatan</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    <?php $no=1; foreach($data as $s){ ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td align="center"><img src="<?= base_url('assets/backend/upload/') . $s['gambar']; ?>" alt="" width="100" height="100"></td>
                            <td class="text-center">
                                <a class="badge badge-success" href="#modal-edit<?= $s['id']; ?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                <a class="badge badge-danger" href="#modal-hapus<?= $s['id']; ?>" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                  </table>
                </div>
              </div>
            </div>

            <!-- Content Row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!---------------------------------------------Tambah Data---------------------------------------------->
 <div class="modal fade" id="tambah_gambar">
        <div class="modal-dialog">

          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Tambah Gambar</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <?php echo form_open_multipart('admin/dashboard/setting_jumbotron') ?>
            <input type="hidden" readonly value="1" name="id" class="form-control" >
            <div class="modal-body">    

            <div class="form-group">
              <label for="minimalstok">Gambar : </label>
              <input type="file" id="image" name="image" class="form-control" required="">
              <small>Image file size must not exceed 700 kb. Allowed types: png, jpg, jpeg.</small>
            </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Simpan" />
            </div>
      </form>
          </div>
        </div>
      </div>
       <!---------------------------------------------Akhir Tambah Data---------------------------------------------->

       <!---------------------------------------------Hapus  Data---------------------------------------------->
 <?php $no=0; foreach($data as $x): $no++; ?>
    
    <div class="modal fade" id="modal-hapus<?= $x['id']; ?>">
      <div class="modal-dialog">
    
        <div class="modal-content">
    
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Hapus Gambar</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
    
          <!-- Modal body -->
    
    
          <?php echo form_open('admin/dashboard/hapusGambar') ?>
    
          <input type="hidden" readonly value="<?= $x['id']; ?>" name="id" class="form-control" >
          <div class="modal-body">
              <p>Apakah Anda Yakin Akan Menghapus Data ?</strong>
          </div>
    
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <input type="submit" name="submit" id="submit" class="btn btn-danger" value="Hapus" />
          </div>
    </form>
        </div>
      </div>
    </div>              
    <?php endforeach;?>

    <!---------------------------------------------EDIT Data---------------------------------------------->
    <?php $no=0; foreach($data as $x): $no++; ?>
              
              <div class="modal fade" id="modal-edit<?= $x['id']; ?>">
                <div class="modal-dialog">
              
                  <div class="modal-content">
              
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Ubah Gambar</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
              
                    <!-- Modal body -->
              
              
                    <?php echo form_open_multipart('admin/dashboard/ubahGambar') ?>
              
                    <input type="hidden" readonly value="<?= $x['id']; ?>" name="id" class="form-control" >
                    <div class="modal-body">
                      
                    <div class="form-group">
                      <label for="minimalstok">Gambar : </label><br>
                      <img src="<?= base_url('assets/backend/upload/') .$x['gambar']; ?>" alt="" width="100" height="100"><br>
                      <input type="file" id="image" name="image" class="form-control" required="">
                      <small>Image file size must not exceed 1000 kb. Allowed types: png, jpg, jpeg.</small>
                    </div>
   
                    
                    </div>
              
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Edit" />
                    </div>
              </form>
                  </div>
                </div>
              </div>              
              <?php endforeach;?>
        <!---------------------------------------------EDIT Data---------------------------------------------->