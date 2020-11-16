
      <div class="content">
        <div class="container-fluid">
            <?php if($this->session->flashdata('flash-data') ):  ?>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong> <?= $this->session->flashdata('flash-data'); ?> </strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    </div>
                </div>
              <?php endif; ?>
          <div class="row">
            <div class="col-lg-16 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"> Tabel Booking </h4>
                  <p class="card-category">Booking hanya diperuntukkan untuk Admin</p>
                </div>
                <a href="<?= base_url(); ?>Admin/laporan_pdf" labels = "Cetak Data"class="btn btn-success float-right" title="Cetak Data"><i class="fa fa-plus"> </i></a>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Travel Package</th>
                      <th>Price</th>
                      <th class="text-center">Action</th>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach ($booking as $b) : ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $b->username; ?></td>
                        <td><?= $b->name; ?></td>
                        <td><?= $b->price; ?></td>
                        <td class="text-center">
                         <a data-toggle="modal" data-target="#modal-edit<?=$b->id_package;?>" class="btn btn-success" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-eye"></i></a>
                          <!-- <a data-toggle="modal" data-target="#modal-edit<?=$b->id_package;?>" class="btn btn-warning" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a> -->
                          <a  onclick="return confirm('Yakin Data ini dihapus?');" href="<?= base_url();?>Admin/hapus/<?= $b->id_booking;?>" class="btn btn-danger btn-circle" title="Hapus Data"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
           <?php $no=0; foreach($booking as $row): $no++; ?>
          <div class="row">
            <div id="modal-edit<?=$row->id_package;?>" class="modal fade">
              <div class="modal-dialog">
                <form action="<?php echo site_url('Admin/edit'); ?>" method="post">
                <div class="modal-content">
                  <div class="modal-header bg-ligth">
                    <h4 class="modal-title">Edit Data</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
           
                    <input type="hidden" readonly value="<?=$row->id_package;?>" name="id_package" class="form-control" >
           
                    <div class="form-group">
                      <br>
                      <div class='col-md-9'>
                        <label>Pemesan </label>
                        <input style="color: black" type="text" name="name" autocomplete="off" value="&nbsp; <?=$row->username;?>" readonly placeholder="Masukkan Modal" class="form-control" > 
                      </div>
                      <div class='col-md-9'>
                        <label>Travel Package </label>
                        <input style="color: black" type="text" name="package" autocomplete="off" value=" &nbsp; <?=$row->name;?>" readonly placeholder="Masukkan Modal" class="form-control" >
                      </div>
                      <div class='col-md-9'>
                        <label>Price </label>
                        <input style="color: black" type="numeric" name="price" autocomplete="off" value=" &nbsp;$ <?=$row->price;?>" readonly placeholder="Masukkan Modal" class="form-control" >
                      </div>
                      <div class='col-md-9'>
                        <label>Days </label>
                        <input style="color: black" type="numeric" name="days" autocomplete="off" value=" &nbsp;<?=$row->days;?>" readonly placeholder="Masukkan Modal" class="form-control" >
                      </div>
                    </div>
                    <br>
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <!--  <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button> -->
                    </div>
                  </form>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

        </div>
      </div>
     

