<section class="content mt-3">
      <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form action="<?= site_url('Product/add_proses')?>" method="POST"> -->
                <?php echo form_open_multipart('Product/add_proses'); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                  </div>
                  <div class="form-group">
                    <label>Size</label>
                    <select class="form-control" name="ukuran_produk" id="ukuran_produk" required>
                      <option selected disabled value="">--Pilih Ukuran BH--</option>
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="harga_produk">Harga</label>
                    <input type="number" class="form-control" id="harga_produk" name="harga_produk" required>
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi_produk" rows="4" required placeholder="Enter ..."></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Gambar Produk</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar_produk">
                        <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              <!-- </form> -->
              <?php echo form_close(); ?>
            </div>
          </div>
        </section>