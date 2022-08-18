<div class="container">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <h1 class="h3 mb-0 text-gray-800">Visi dan Misi</h1>
                  </div>
                </div>
              </div>
            </div>

            <!-- CONTENT visi Misi -->
            <form>
              <div class="form-group">
                <label for="visi" class="form-label">Visi Misi</label>
                <textarea name="visi"></textarea>
                <script>
                  CKEDITOR.replace("visi");
                </script>
              </div>
              <!-- <div class="form-group">
                <label for="misi" class="form-label">Misi</label>
                <textarea name="misi"></textarea>
                <script>
                  CKEDITOR.replace("misi");
                </script>
              </div> -->
              <div class="form-group">
                <label for="maklumat">Maklumat Pelayanan</label>
                <input type="file" class="form-control-file" id="maklumat" />
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <!-- Content Row -->
          </div>