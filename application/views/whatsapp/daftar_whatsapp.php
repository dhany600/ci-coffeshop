<!-- Content Wrapper. Contains page content -->

<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Slider</h3>
                        <ol class="float-sm-right">
                            <div class="breadcrumb-item"><a href="<?= base_url('slider/add_slider') ?>" class="btn btn-sm btn-success">
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
                                    <th>Whatsapp Number</th>
                                    <th style="text-align: center" width="20%">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1;
                                foreach ($row->result() as $key => $data) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data->product_name; ?></td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-sm btn-warning">
                                                <i class="icon fas fa-edit"></i> Edit</button>
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus_<?= $data->product_id ?>" data-backdrop="static" data-keyboard="false">
                                                <i class="icon fas fa-trash"></i> Hapus</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th style="text-align: center" width="20%">Opsi</th>
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