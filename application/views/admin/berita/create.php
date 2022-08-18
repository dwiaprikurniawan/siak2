<div class="container">
            <h1>Input Berita Baru</h1>
            <hr />
            <form>
              <div class="mb-3">
                <label for="judulBerita" class="form-label">Judul Berita</label>
                <input type="text" class="form-control" id="judulBerita" />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlFile1">Gambar</label>
                <input
                  type="file"
                  class="form-control-file"
                  id="exampleFormControlFile1"
                />
              </div>
              <div class="mb-3">
                <label for="editor1" class="form-label">Isi Berita</label>
                <textarea name="editor1"></textarea>
                <script>
                  CKEDITOR.replace("editor1");
                </script>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>