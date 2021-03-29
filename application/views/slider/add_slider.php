<section class="content mt-3">
    <div class="container-fluid">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Slider</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
                <?php echo form_open_multipart('Slider/add_proses'); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="gambar_slider">Pilih Gambar Slider</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambar_slider" name="gambar_slider">
                                <label class="custom-file-label" for="gambar_slider">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</section>