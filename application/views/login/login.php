<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<?php if($this->session->flashdata('flash-data') ):  ?>
		          <div class="row mt-4">
		              <div class="col-md-8">
		                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
		                    <strong> <?= $this->session->flashdata('flash-data'); ?> !</strong>
		                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                      <span aria-hidden="true">&times;</span>
		                    </button>
		                  </div>
		              </div>
		          </div>
		        <?php endif; ?>
				<div class="login100-form-title" style="background-image: url(<?php echo base_url(); ?>assets/images/header.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="<?php echo base_url(); ?>Login/Check">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
						<a href="<?php echo base_url(); ?>Login/regis" class="login100-form-btn"> Sign Up </a>
						
					</div>
				</form>
			</div>
		</div>
	</div>