
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
                  <h4 class="card-title"> Tabel Package </h4>
                  <p class="card-category">Package hanya diperuntukkan untuk Admin</p>
                </div>

                  <a href="<?= base_url(); ?>Admin/TambahP" class="btn btn-success float-right" title="Tambah Data"><i class="fa fa-plus"> </i></a>
                  
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>days</th>
                      <th class="text-center">decs</th>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach ($package as $b) : ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $b->name; ?></td>
                        <td>$ <?= $b->price; ?></td>
                        <td><?= $b->days; ?></td>
                        <td class="text-center"><?= $b->decs ?></td>
                        <td class="text-left">

                          <a data-toggle="modal" data-target="#modal-edit<?=$b->id_package;?>" class="btn btn-warning" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                          
                          <?php if ($us->level == 2): ?>
                          <a  onclick="return confirm('Yakin Data ini dihapus?');" href="<?= base_url();?>Admin/hapus_package/<?= $b->id_package;?>" class="btn btn-danger btn-circle" title="Hapus Data"><i class="fa fa-trash"></i></a>
                          <?php endif ?>
                        </td>
                      </tr>
                    <?php endforeach ?>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
          <?php $no=0; foreach($package as $row): $no++; ?>
        <div class="row">
          <div id="modal-edit<?=$row->id_package;?>" class="modal fade">
            <div class="modal-dialog">
              <form action="<?php echo site_url('Admin/edit_package'); ?>" method="post">
              <div class="modal-content">
                <div class="modal-header bg-ligth">
                  <h4 class="modal-title">Edit Data</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
         
                  <input type="hidden" readonly value="<?=$row->id_package;?>" name="id" class="form-control" >
         
                  <div class="form-group">
                    <br>
                    <div class='col-md-9'>
                      <label>Name </label>
                      <input style="color: black" type="text" name="name" autocomplete="off" value="<?=$row->name;?>"  placeholder="Masukkan Modal" class="form-control" > 
                    </div><br>
                    <div class='col-md-9'>
                      <label>Price </label>
                      <input style="color: black" type="numeric" name="price" autocomplete="off" value="<?=$row->price;?>"  placeholder="Masukkan Modal" class="form-control" >
                    </div><br>
                     <div class='col-md-9'>
                      <label>Days </label>
                      <input style="color: black" type="text" name="days" autocomplete="off" value="<?=$row->days;?>"  placeholder="Masukkan Modal" class="form-control" >
                    </div><br>
                     <div class='col-md-9'>
                      <label>Decsription </label>
                      <textarea  style="color: black; overflow:hidden" class="form-control" name="decs"> <?=$row->decs;?> </textarea>
                    </div>
                  </div>
                  <br>
                </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
       
        </div>
      </div>
