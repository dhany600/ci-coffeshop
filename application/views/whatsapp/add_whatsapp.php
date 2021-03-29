<section class="content mt-3">
    <div class="container-fluid">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?= site_url('whatsapp/add_proses')?>" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="whatsapp">Nomor Whatsapp</label>
                        <input type="text" class="form-control" id="whatsapp" name="whatsapp" required>
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