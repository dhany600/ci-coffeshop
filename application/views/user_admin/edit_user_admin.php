<section class="content mt-3">
    <div class="container-fluid">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?= site_url('user_admin/edit_proses')?>" method="POST">
                <div class="card-body">
                <input type="hidden" id="id" name="id" value="<?= $row->user_id?>">
                    <div class="form-group">
                        <label for="nama_user">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?= $row->nama;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $row->username;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="********">
                        <span>*Kosongkan Password jika tidak diganti</span>
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