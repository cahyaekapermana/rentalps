<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi Akun Rentalkuy</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/login_template/images/icons/favicon.ico')?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/css/main.css')?>">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo site_url('C_user/c_register')?>" method="POST">
                    <!-- Logo -->
					<span class="login100-form-title p-b-43">
                        <img src="<?php echo base_url('assets/login_template/images/logo/logo_rentalkuy.png')?>" alt="">
                    </span>
                    <span class="login100-form-title p-b-43">
                    Registrasi Akun                    
                    </span>
                    
					<div class="wrap-input100 validate-input" data-validate = "username is required: ex@abc.xyz">
						<input class="input100" type="text" name="f_username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="f_password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Email Required">
						<input class="input100" type="text" name="f_email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

                    
                    <div class="wrap-input100 validate-input" data-validate="Nama Lengkap is required">
						<input class="input100" type="text" name="f_naleng">
						<span class="focus-input100"></span>
						<span class="label-input100">Nama Lengkap </span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Alamat is required">
						<input class="input100" type="text" name="f_alamat">
						<span class="focus-input100"></span>
						<span class="label-input100">Alamat </span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="No Telp is required">
						<input class="input100" type="number" name="f_notelp">
						<span class="focus-input100"></span>
						<span class="label-input100">Nomor Telepon </span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Daftar Sekarang!
						</button>
					</div>
					
				</form>
                <!-- BG -->
				<div class="login100-more" style="background-image: url('<?php echo base_url('assets/login_template/images/bg-02.jpg')?>');">
				</div>
			</div>
		</div>
	</div>
	

	
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login_template/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login_template/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login_template/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo base_url('assets/login_template/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login_template/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login_template/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?php echo base_url('assets/login_template/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login_template/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login_template/js/main.js')?>"></script>

</body>
</html>