<section class="content mt-3">
      <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="ge">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                  </div>
                  <div class="form-group">
                        <label>Size</label>
                        <select class="form-control" name="pilih_ukuran">
                          <option>Pilih Ukuran BH</option>
                          <option>S</option>
                          <option>M</option>
                          <option>L</option>
                        </select>
                      </div>
                  <div class="form-group">
                        <label>Textarea</label>
                        <textarea class="form-control" name="deskripsi" rows="4" placeholder="Enter ..."></textarea>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>
            </div>
          </div>
        </section>