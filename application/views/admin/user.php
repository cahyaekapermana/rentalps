
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
                  <h4 class="card-title"> Tabel User </h4>
                  <p class="card-category">User hanya diperuntukkan untuk Admin</p>
                </div>
                  <a href="<?= base_url(); ?>Admin/formUser" class="btn btn-success float-right" title="Tambah Data"><i class="fa fa-plus"> </i></a>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>About Me</th>
                      <th>Level</th>
                      <th class="text-center">Action</th>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach ($auth as $a) : ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $a->username; ?></td>
                        <td><?= $a->email; ?></td>
                        <td><?= $a->address; ?></td>
                        <td><?= $a->about_me; ?></td>
                        <td><?= $a->level; ?></td>
                        <td class="text-center">
                          <a data-toggle="modal" data-target="#modal-edit<?=$a->id_auth;?>" class="btn btn-warning" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                          <a  onclick="return confirm('Yakin Data ini dihapus?');" href="<?= base_url();?>Admin/hapus_user/<?= $a->id_auth;?>" class="btn btn-danger btn-circle" title="Hapus Data"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>

        <?php $no=0; foreach($auth as $row): $no++; ?>
        <div class="row">
          <div id="modal-edit<?=$row->id_auth;?>" class="modal fade">
            <div class="modal-dialog">
              <form action="<?php echo site_url('Admin/edit_auth'); ?>" method="post">
              <div class="modal-content">
                <div class="modal-header bg-ligth">
                  <h4 class="modal-title">Edit Data</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
         
                  <input type="hidden" readonly value="<?=$row->id_auth;?>" name="id" class="form-control" >
         
                  <div class="form-group">
                    <br>
                    <div class='col-md-9'>
                      <label>Username </label>
                      <input style="color: black" type="text" name="username" autocomplete="off" value="<?=$row->username;?>"  placeholder="Masukkan Modal" class="form-control" > 
                    </div><br>
                      <div class='col-md-9'>
                      <label>Email </label>
                      <input style="color: black" type="email" name="email" autocomplete="off" value="<?=$row->email;?>"  placeholder="Masukkan Modal" class="form-control" > 
                    </div><br>
                      <div class='col-md-9'>
                      <label>Address </label>
                      <textarea style="color: black; overflow:hidden" class="form-control" name="address"> <?=$row->address;?> </textarea>
                    </div><br>
                    <div class='col-md-9'>
                      <label>About </label>
                      <textarea style="color: black; overflow:hidden" class="form-control" name="about"> <?=$row->about_me;?> </textarea>
                    </div><br>
                    <div class='col-md-9'>
                      <label>Travel Package </label>
                      <input style="color: black" type="text" name="level" autocomplete="off" value=" &nbsp; <?=$row->level;?>"  placeholder="Masukkan Modal" class="form-control" >
                    </div>
                  </div>
                  <br>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        </div>
      </div>
