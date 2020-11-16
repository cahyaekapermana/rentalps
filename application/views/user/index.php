


  <!--================Hero Banner Area Start =================-->
  <section class="hero-banner magic-ball">
    <div class="container" id="a">
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
      <div class="row align-items-center text-center text-md-left">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
          <h1>Travel More To Discover Yourself</h1>
          <p>Safario is a leading travel company in Southeast Asia that provides a variety of travel needs in one platform, enabling you to create moments with loved ones.</p>
        </div>
        <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
          <img class="img-fluid" src="<?php echo base_url('assets\images\1.png')?>" alt="">
        </div>
      </div>
    </div>
  </section>
  <!--================Hero Banner Area End =================-->


  <!--================Service Area Start =================-->
  <section class="section-margin generic-margin">
    <div class="container" id="b">
      <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="<?php echo base_url(); ?>assets/landing/img/home/gamecon.png" alt="">
        <h2>Our Services</h2>
        <p>Pelayan kamu adalah yang berhubungan dengan rental ps</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center">
            <div class="service-card-img">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/landing/img/home/gm1.png" alt="">
            </div>
            <div class="service-card-body">
              <h3>Pilih Game </h3>
              <p>Pilih Game terpopuler dari kami dan mainkan </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center">
            <div class="service-card-img">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/landing/img/home/gm2.png" alt="">
            </div>
            <div class="service-card-body">
              <h3>Mainkan Game mu </h3>
              <p>anda dapat meminjam dan memainkan dimanapun</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center">
            <div class="service-card-img">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/landing/img/home/gm3.png" alt="">
            </div>
            <div class="service-card-body">
              <h3>Pinjam Console</h3>
              <p>anda dapat meminjam console keren dari kami</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--================Tour section Start =================-->
  <section class="section-margin pb-xl-5">
    <div class="container" id="c">
      <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="<?php echo base_url(); ?>assets/landing/img/home/section-icon.png" alt="">
        <h2>Our Tour Package</h2>
        <p>The following packages we provide</p>
      </div>
     
      <div class="row">
         <?php foreach ($package as $p) : ?>
        <div class="col-md-6">
          <div class="tour-card">
            <img class="card-img rounded-0" src="<?php echo base_url(); ?>assets/landing/img/home/tour2.png" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4><?php echo $p->name; ?></h4>
                  <small><?php echo $p->days; ?> days offer</small>
                  <p><?= $p->decs; ?></p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">$ <?php echo $p->price; ?> /day</h4>
                  <a class="btn btn-warning text-primary float-right" href="<?= base_url(); ?>Home/beli/<?= $p->id_package ?>">Beli</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>
        
    </div>
  </section>
  <!--================Tour section End =================-->