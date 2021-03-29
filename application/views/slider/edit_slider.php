<section class="content mt-3">
      <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <?php echo form_open_multipart('slider/edit_proses'); ?>
                <div class="card-body">
                <input type="hidden" id="id" name="id" value="<?= $row->slider_id?>">
                  <div class="form-group">
                    <label for="gambar_produk">Gambar</label>
                      <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                          <?php if ($row->slider_img == null): ?>
                            Tidak Ada Gambar
                          <?php else: ?>
                            <?= $row->slider_img?>
                          <?php endif ?>
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <?php if ($row->slider_img == null): ?>
                              <img src="<?= base_url('upload/slider/default.png')?>" style="width:100px" class="img-square img-fluid">
                            <?php else: ?>
                              <img src="<?= base_url('upload/slider/'.$row->slider_img)?>" style="width:100px" class="img-square img-fluid">
                            <?php endif ?>
                          </div>
                        </div>
                      </div>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar_slider">
                        <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                      </div>
                    </div>
                    <span>(kosongkan jika tidak ingin diganti)</span>
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