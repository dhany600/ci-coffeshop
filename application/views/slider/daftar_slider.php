<!-- Content Wrapper. Contains page content -->

<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Product</h3>
                        <ol class="float-sm-right">
                            <div class="breadcrumb-item"><a href="<?= base_url('product/add') ?>" class="btn btn-sm btn-success">
                                    <i class="icon fas fa-plus"></i> Add Product</a>
                            </div>
                        </ol>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Product</th>
                                    <th>Size</th>
                                    <th>Harga</th>
                                    <th style="text-align: center" width="20%">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1;
                                foreach ($row->result() as $key => $data) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data->product_name; ?></td>
                                        <td><?= $data->product_size; ?></td>
                                        <td><?= $data->product_price; ?></td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-sm btn-success">
                                                <i class="icon fas fa-edit"></i> Edit</button>
                                            <button type="button" class="btn btn-sm btn-danger">
                                                <i class="icon fas fa-trash"></i> Hapus</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Nama Product</th>
                                    <th>Size</th>
                                    <th>Harga</th>
                                    <th>Opsi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- /.content-wrapper -->