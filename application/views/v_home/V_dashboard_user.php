<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Halaman Dashboard</title>
    <!-- Cahya -->
    <link
      rel="stylesheet"
      href="<?php echo base_url('assets/landing_page/libraries/bootstrap/css/bootstrap.css')?>"
    />
    <!--  -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/landing_page/styles/main.css')?>" />
    <link
      href="https://fonts.googleapis.com/css?family=Assistant&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Semantic elements -->
    <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

    <!-- Bootstrap navbar example -->
    <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->

    <!--Navbar-->
    <div class="container">
      <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">
          <img src="<?php echo base_url('assets/landing_page/images/logo_rentalkuy.png')?>" alt="" />
        </a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#navb"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
              <a class="nav-link active" href="#"><?php echo $this->session->userdata('s_username'); ?></a>
            </li>
            <li class="nav-item mx-md-2">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item mx-md-2">
              <a class="nav-link" href="#">Paket Game</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbardrop"
                data-toggle="dropdown"
              >
                Testimonal
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
              </div> 
            </li>
            <li class="nav-item mx-md-2">
              <a class="nav-link" href="<?php echo site_url("c_dashboard/page_tentang")  ?>">Tentang</a>

            </li>
          </ul>
          <!-- Session Condition -->
          <?php 
          
          // Status berisi kondisi dari session, user sudah login atau belum, jika sudah maka akan tampil logout, jika belum maka akan tampil tombol masuk
          // Url berisi kondisi dari link controller, jika user sudah login maka akan link logout, jika user belum login maka akan link masuk
          $status = "";
          $url = "";

          if($this->session->userdata('s_username') == ""){

            $status = 'Masuk';
            $url = base_url('c_user');

          }else {
            
            $status = 'Log Out';
            $url = base_url('c_user/logout');
          }

          ?>
          <!-- Mobile button -->
          <form class="form-inline d-sm-block d-md-none" action="<?php echo $url ?>">
            <button class="btn btn-login my-2 my-sm-0">
              <?php echo $status ?>
            </button>
          </form>
          <!-- Desktop Button -->
          <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="<?php echo $url ?>">
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
              <?php echo $status ?>
            </button>
          </form>
        </div>
      </nav>
    </div>

    <!--Header-->
    <header class="text-center">
      <h1>Rental Game Terbaik se Indonesia
        <br />
         Kami juga Bisa anterin juga Console  dan Game mu
         
        </h1>
        <p class="nt-3">
          Sewa Game kami dan mainkan sesuka anda
          <br />
        </p>

        <a href="#" class="btn btn-get-started px-4 mt-4">
          Get Started
        </a>

    </header>
   

    <main>

    <div class="container">
      <section class="section-stats row
      justify-content-center" id="stats">

      <div class="col-3 col-md-2 stats-detail">
        <h2>200</h2>
        <p>Members</p>
      </div>

      <div class="col-3 col-md-2 stats-detail">
        <h2>25</h2>
        <p>Game</p>
      </div>

      <div class="col-3 col-md-2 stats-detail">
        <h2>12</h2>
        <p>playstation</p>
      </div>

      <div class="col-3 col-md-2 stats-detail">
        <h2>5</h2>
        <p>Developers</p>
      </div>
  
    </section>
    </div>

    <section class="section-collection" id="collection
      <div class="container">
        <div class="row">
           <div class="col text-center section-colletion-heading">
           <h2>Collection Game</h2>

           <p>
            Lihat Game seru Abad Ini 
            <br />
            dan mainkan bersama temanmu
           </p>
           </div>
        </div>
      </div>
    </section>

    <section class="section-collection-content" id="CollectionContent">
      <div class="container">
        <div class="section-collection-game row justify-content-center">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div
              class="card-collection text-center d-flex flex-column"
              style="background-image: url('frontend/images/game-1.jpg');"
            >
              <!-- <div class="travel-country">INDONESIA</div> -->
              <div class="travel-location">SPORT GAME</div>
              <div class="travel-button mt-auto">
                <a href="#" class="btn btn-travel-details px-4">
                  View Game
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div
              class="card-collection text-center d-flex flex-column"
              style="background-image: url('frontend/images/game-2.jpg');"
            >
              <!-- <div class="travel-country">INDONESIA</div> -->
              <div class="travel-location">ACTION GAME</div>
              <div class="travel-button mt-auto">
                <a href="#" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div
              class="card-collection text-center d-flex flex-column"
              style="background-image: url('frontend/images/game-3.jpg');"
            >
              <!-- <div class="travel-country">INDONESIA</div> -->
              <div class="travel-location">POPULAR GAME</div>
              <div class="travel-button mt-auto">
                <a href="#" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <!-- <div class="col-sm-6 col-md-4 col-lg-3">
            <div
              class="card-collection text-center d-flex flex-column"
              style="background-image: url('frontend/images/travel-4.jpg');"
            >
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">DUBAI</div>
              <div class="travel-button mt-auto">
                <a href="#" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>




    </main>
    <footer></footer>
    <script src="frontend/libraries/retina/retina.js"></script>
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
  </body>
</html>
