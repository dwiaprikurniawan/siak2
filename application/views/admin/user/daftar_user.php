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
                <h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
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
                        <th>Username</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th width="90">Aksi</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th width="70">No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    <?php $no=1; foreach($data as $s){ ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $s['username']; ?></td>
                            <td><?= $s['email']; ?></td>
                            <td><?php if($s['level']==1){ echo 'Superadmin'; }else{ echo 'Admin';} ?></td>
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
              <h4 class="modal-title">Tambah User</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <?php echo form_open_multipart('admin/User/tambah_user') ?>
            <input type="hidden" readonly value="1" name="id" class="form-control" >
            <div class="modal-body">    

                <div class="form-group">
                    <label for="nama">Username : </label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                    <small class="form-text text-danger"><?= form_error('username');?></small>
                </div>
                <div class="form-group">
                    <label for="password">Password : </label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    <small class="form-text text-danger"><?= form_error('password');?></small>
                </div>
                <div class="form-group">
                    <label for="nama">Email : </label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    <small class="form-text text-danger"><?= form_error('email');?></small>
                </div>
                <div class="form-group">
                    <label for="level">Level : </label>
                    <select name="level" id="level" class="form-control" required>
                             <option value="">-------- Pilih --------</option>
                             <option value="1">Superadmin</option>
                             <option value="2">Admin</option>
                    </select>
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
            <h4 class="modal-title">Hapus User</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
    
          <!-- Modal body -->
    
    
          <?php echo form_open('admin/User/hapusData') ?>
    
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
                      <h4 class="modal-title">Ubah User</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
              
                    <!-- Modal body -->
              
              
                    <?php echo form_open_multipart('admin/User/ubah_data') ?>
              
                    <input type="hidden" readonly value="<?= $x['id']; ?>" name="id" class="form-control" >
                    <div class="modal-body">
                      
                    <div class="form-group">
                        <label for="username">Username : </label>
                        <input type="text" id="username" name="username" value="<?= $x['username']; ?>" class="form-control" placeholder="Nama User" readonly>
                        <small class="form-text text-danger"><?= form_error('username');?></small>
                    </div>

                    <div class="form-group">
                        <label for="email">Email : </label>
                        <input type="email" id="email" name="email" value="<?= $x['email']; ?>" class="form-control" placeholder="Nama User" required>
                        <small class="form-text text-danger"><?= form_error('email');?></small>
                    </div>

                    <div class="form-group">
                        <label for="password">Password : </label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Kosongkan jika tidak ingin mengganti Password">
                        <small class="form-text text-danger"><?= form_error('password');?></small>
                    </div>

                    <div class="form-group">
                    <label for="level">Level : </label>
                    <select name="level" id="level" class="form-control" required>
                             <option value="">-------- Pilih --------</option>
                              <?php foreach($lvl as $a){ ?>
                                <?php if($a == $x['level']){ ?>
                                  <option value="<?= $a; ?>" selected><?php if($a == 1){ echo 'Superadmin';}else{ echo 'Admin';} ?></option>
                                <?php }else{ ?>
                                  <option value="<?= $a; ?>"><?php if($a == 1){ echo 'Superadmin';}else{ echo 'Admin';} ?></option>
                                <?php } ?>
                              <?php } ?>
                    </select>


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