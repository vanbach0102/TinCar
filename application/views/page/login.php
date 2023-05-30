<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/vuexy_admin
Renew Support: https://1.envato.market/vuexy_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/horizontal-menu.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="auth-wrapper auth-basic px-2">
  <div class="auth-inner my-2">
    <!-- Login basic -->
    <div class="card mb-0">
      <div class="card-body">
      

        <h4 class="card-title mb-1">Đăng nhập</h4>
				<?php
			if($this->session->flashdata('Custsuccess')){
				?>
				<div class="alert alert-success"><?php echo $this->session->flashdata('Custsuccess') ?></div>
				<?php
			}elseif($this->session->flashdata('Custerror')){
				?>
				<div class="alert alert-danger"><?php echo $this->session->flashdata('Custerror') ?></div>

				<?php
			}
		?>
        <form class="auth-login-form mt-2" action="<?php echo base_url('login-customer') ?>" method="POST">
          <div class="mb-1">
            <label for="login-email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="login-email"
              name="email"
              placeholder="Nhập email của bạn"
              aria-describedby="login-email"
              tabindex="1"
              autofocus

            />
						<div class="text text-danger">
						<?php echo form_error('email'); ?>

						</div>
          </div>

          <div class="mb-1">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="login-password">Password</label>
              <a href="auth-forgot-password-basic.html">
                <small>Forgot Password?</small>
              </a>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
              <input
                type="password"
                class="form-control form-control-merge"
                id="login-password"
                name="password"
                tabindex="2"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="login-password"
			

              />
              <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
						<div class="text text-danger">
						<?php echo form_error('password'); ?>
						</div>

          </div>
          <div class="mb-1">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
              <label class="form-check-label" for="remember-me"> Remember Me </label>
            </div>
          </div>
          <button class="btn btn-primary w-100" tabindex="4">Login</button>
        </form>

        <p class="text-center mt-2">
          <span>New on our platform?</span>
          <a href="auth-register-basic.html">
            <span>Create an account</span>
          </a>
        </p>

        <div class="divider my-2">
          <div class="divider-text">or</div>
        </div>

        <div class="auth-footer-btn d-flex justify-content-center">
          <a href="#" class="btn btn-facebook">
            <i data-feather="facebook"></i>
          </a>
          <a href="#" class="btn btn-twitter white">
            <i data-feather="twitter"></i>
          </a>
          <a href="#" class="btn btn-google">
            <i data-feather="mail"></i>
          </a>
          <a href="#" class="btn btn-github">
            <i data-feather="github"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- /Login basic -->
  </div>
  <style>
	.or{
		position: relative;
		text-align: center;
	}
  </style>
  <div class="col-sm-1">
	<h2 class="or">OR</h2>
  </div>
  
  <!--Register-->
  <div class="auth-inner my-2">
    <!-- Login basic -->
    <div class="card mb-0">
      <div class="card-body">
        

        <h4 class="card-title mb-1">Đăng ký</h4>
				<?php
			if($this->session->flashdata('CustRessuccess')){
				?>
				<div class="alert alert-success"><?php echo $this->session->flashdata('CustRessuccess') ?></div>
				<?php
			}elseif($this->session->flashdata('CustReserror')){
				?>
				<div class="alert alert-danger"><?php echo $this->session->flashdata('CustReserror') ?></div>

				<?php
			}
		?>
        <form class="auth-login-form mt-2" action="<?php echo base_url('dang-ky') ?>" method="POST">
          <div class="mb-1">
            <label for="login-email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="login-email"
              name="Resemail"
              placeholder="Nhập địa chỉ email của bạn"
              tabindex="1"
              autofocus
            />
						<div class="text text-danger">
						<?php echo form_error('Resemail'); ?>
						</div>
          </div>
					<div class="mb-1">
            <label for="login-email" class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              id="login-email"
              name="Resname"
              placeholder="Nhập họ và tên của ban"
              tabindex="1"
              autofocus
            />
						<div class="text text-danger">
						<?php echo form_error('Resname'); ?>
						</div>
          </div>
					<div class="mb-1">
            <label for="login-email" class="form-label">Phone</label>
            <input
              type="text"
              class="form-control"
              id="login-email"
              name="Resphone"
              placeholder="Nhập số điện thoại của bạn"
              tabindex="1"
              autofocus
            />
						<div class="text text-danger">
						<?php echo form_error('Resphone'); ?>
						</div>
          </div>
					<div class="mb-1">
            <label for="login-email" class="form-label">Address</label>
            <input
              type="text"
              class="form-control"
              id="login-email"
              name="Resaddress"
              placeholder="Nhập địa chỉ nhà của bạn"
              tabindex="1"
              autofocus
            />
						<div class="text text-danger">
						<?php echo form_error('Resaddress'); ?>
						</div>
          </div>
          <div class="mb-1">
					<label for="" class="form-label">Password</label>
            <div class="input-group input-group-merge form-password-toggle">
              <input
                type="password"
                class="form-control form-control-merge"
                id="login-password"
                name="Respassword"
                tabindex="2"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="login-password"
              />
              <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
						<div class="text text-danger">
						<?php echo form_error('Respassword'); ?>
						</div>
          </div>
          <button type="submit" class="btn btn-primary w-100" tabindex="4">Sign up</button>
        </form>

      </div>
    </div>
    <!-- /Login basic -->
  </div>
</div>


        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/app-assets/js/core/app-menu.min.js"></script>
    <script src="/app-assets/js/core/app.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/app-assets/js/scripts/pages/auth-login.js"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->
</html>
