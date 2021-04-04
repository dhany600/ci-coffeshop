<!-- Content Wrapper. Contains page content -->

<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Whatsapp</h3>
                        <ol class="float-sm-right">
                            <?php if ($this->fungsi->count_whatsapp() >= 1): ?>
                                <div class="breadcrumb-item">
                                    <button type="button" class="btn btn-sm btn-danger" disabled>
                                    <i class="icon fas fa-plus"></i> Add whatsapp</button>
                                </div>
                            <?php else: ?>
                                <div class="breadcrumb-item"><a href="<?= base_url('whatsapp/add') ?>" class="btn btn-sm btn-success">
                                        <i class="icon fas fa-plus"></i> Add whatsapp</a>
                                </div>
                            <?php endif ?>
                        </ol>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Whatsapp Number</th>
                                    <th>Whatsapp Link</th>
                                    <th style="text-align: center" width="20%">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1;
                                foreach ($row->result() as $key => $data) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data->whatsapp_number; ?></td>
                                        <td><?= $data->whatsapp_link; ?></td>
                                        <td style="text-align: center;">
                                            <a href="<?=site_url('whatsapp/edit/'.$data->whatsapp_id)?>" class="btn btn-sm btn-warning">
                                              <i class="icon fas fa-edit"></i> Edit</a>
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus_<?= $data->whatsapp_id ?>" data-backdrop="static" data-keyboard="false">
                                                <i class="icon fas fa-trash"></i> Hapus</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Whatsapp Number</th>
                                    <th>Whatsapp Link</th>
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
<!-- Alert Hapus Data -->
    <?php $no = 1;
    foreach ($row->result() as $key => $data) : $no++; ?>
    <div class="modal fade" id="hapus_<?=$data->whatsapp_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-center" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin ingin menghapus?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo form_open_multipart('whatsapp/delete'); ?>
            <input type="hidden" id="id" name="id" value="<?=$data->whatsapp_id?>">
            <p>Anda akan menghapus data "<?=$data->whatsapp_number ?>"</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <button class="btn btn-danger" type="submit">Hapus</button>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    <!-- End Alert Hapus Data -->