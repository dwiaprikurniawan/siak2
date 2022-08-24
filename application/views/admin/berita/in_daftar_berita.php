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
                <h6 class="m-0 font-weight-bold text-primary">Daftar Berita</h6>
              </div>
              <br>
              <div class="card-body">
                <center>
                  <a href="<?= base_url(); ?>admin/berita/tambah_berita" class="btn btn-primary btn-sm">
                    (+) TAMBAH
                  </a>
                </center>
                <br>
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th width="30">No</th>
                        <th>Judul</th>
                        <th>Img Cover</th>
                        <th width="90">Aksi</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th width="30">No</th>
                        <th>Judul</th>
                        <th>Img Cover</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    <?php $no=1; foreach($data as $s){ ?>   
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $s['judul']; ?></td>
                            <td align="center"><img src="<?= base_url(); ?>assets/backend/upload/<?= $s['img_cover']; ?>" alt="" width="100" height="100"></td>
                            <td class="text-center">
                                <a class="badge badge-success" href="<?= base_url(); ?>admin/berita/in_edit_berita/<?= $s['id']; ?>"><span class="fas fa-fw fa-edit"></span></a>
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

       <!---------------------------------------------Hapus  Data---------------------------------------------->
 <?php $no=0; foreach($data as $x): $no++; ?>
    
    <div class="modal fade" id="modal-hapus<?= $x['id']; ?>">
      <div class="modal-dialog">
    
        <div class="modal-content">
    
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Hapus Berita</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
    
          <!-- Modal body -->
    
    
          <?php echo form_open('admin/Berita/hapus_data') ?>
    
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

