
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
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"> Tabel Booking </h4>
                  <p class="card-category">Booking hanya diperuntukkan untuk Admin</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Game Package</th>
                      <th>Price</th>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach ($booking as $b) : ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $b->username; ?></td>
                        <td><?= $b->name; ?></td>
                        <td>$ <?= $b->price; ?></td>
          
                      </tr>
                    <?php endforeach ?>
                     <tr><td colspan="6" class="text-center"><a href="<?= base_url(); ?>Admin/booking"><i class="fa fa-caret-down"></a></td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <?php if ($us->level == 2): ?>
              
            
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"> Tabel User </h4>
                  <p class="card-category">User hanya diperuntukkan untuk Admin</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                     <!--  <th class="text-center">Action</th> -->
                    </thead>
                    <tbody>
                      <?php $i=1; foreach ($auth as $a) : ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $a->username; ?></td>
                        <td><?= $a->email; ?></td>
                        <td><?= $a->address; ?></td>
                      </tr>
                    <?php endforeach ?>
                      <tr><td colspan="6" class="text-center"><a href="<?= base_url(); ?>Admin/user"><i class="fa fa-caret-down"></a></td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <?php endif ?>
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"> Tabel Package </h4>
                  <p class="card-category">Package hanya diperuntukkan untuk Admin</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>days</th>
                      <th>decs</th>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach ($package as $b) : ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $b->name; ?></td>
                        <td>$ <?= $b->price; ?></td>
                        <td><?= $b->days; ?></td>
                        <td><?= $b->decs ?></td>
                      </tr>
                    <?php endforeach ?>
                      <tr><td colspan="6" class="text-center"><a href="<?= base_url(); ?>Admin/package"><i class="fa fa-caret-down"></a></td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
     

