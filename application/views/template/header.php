<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome Page Wirosableng</title>
	<link rel="icon" href="<?php echo base_url(); ?>assets/landing/img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/vendors/linericon/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/vendors/flat-icon/font/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/vendors/nice-select/nice-select.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/style.css">
  <style type="text/css">html {scroll-behavior: smooth;}</style>
</head>
<body class="bg-shape">

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f2f4fb;">
        <div class="container box_1620">
          </a>
          <a class="navbar-brand logo_h" href="<?= base_url(); ?>"><img src="<?php echo base_url('assets/images/logo/logo_rentalkuy.png')?>" alt="">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item"><a class="nav-link" href="#a">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="#b">About</a></li> 
              <li class="nav-item"><a class="nav-link" href="#c">Packages</a>
            </ul>

            <div class="nav-right text-center text-lg-right py-4 py-lg-0">
              <?php if ($userdata != null) : ?>
                <a class="button" href="<?php base_url(); ?>Login/logout">Logout</a>
              <?php else : ?>
                <a class="button" href="<?php base_url(); ?>Login">Login</a>
              <?php endif ?>
            </div>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->