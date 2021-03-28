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
                  <div class="breadcrumb-item"><a href="<?= base_url('product/add')?>" class="btn btn-sm btn-success">
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
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th style="text-align: center" width="20%">Opsi</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) {?>
                      <tr>
                        <td><?= $no++;?></td>
                        <td><?= $data->product_name;?></td>
                        <td><?= $data->product_size;?></td>
                        <td><?= $data->product_price;?></td>
                        <td><?= $data->product_deskripsi;?></td>
                        <td>
                          <img src="<?= base_url('upload/product/'.$data->product_img);?>" style="width: 80px;">
                        </td>
                        <td style="text-align: center;">
                        <button type="button" class="btn btn-sm btn-warning">
                          <i class="icon fas fa-edit"></i> Edit</button>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus_<?=$data->product_id?>" data-backdrop="static" data-keyboard="false">
                          <i class="icon fas fa-trash"></i> Hapus</button>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Product</th>
                    <th>Size</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
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
    <div class="modal fade" id="hapus_<?=$data->product_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-center" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin ingin menghapus?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo form_open_multipart('Product/delete'); ?>
            <input type="hidden" id="id" name="id" value="<?=$data->product_id?>">
            <p>Anda akan menghapus data "<?=$data->product_name ?>"</p>
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