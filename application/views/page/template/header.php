<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title><?=$this->config->config["pageTitle"] ?></title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/wizard/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/toastr.min.css">

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
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/extensions/ext-component-sliders.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/app-ecommerce.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/app-ecommerce-details.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/form-number-input.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/form-wizard.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/extensions/ext-component-toastr.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/pickers/form-pickadate.min.css">

	
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END: Custom CSS-->


</head>
<!-- END: Head-->


<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="navbar-brand" href="/">
                  <img src="/zyro-image (1).png" width="200px" height="100px" alt="">

                    </a>
                  </li>
            </ul>
        </div>
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="sun"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
				<?php if($this->session->userdata('LoggedInCustomer')){ ?>
			<!--Cart-->
			<li class="nav-item cart me-25"><a class="nav-link" href="<?php echo base_url('/gio-hang') ?>" ><i class="ficon" data-feather="shopping-cart"></i></a>
          </li>
		  <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"><?php echo $this->session->userdata('LoggedInCustomer')['username']; ?></span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span></a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
			<a class="dropdown-item" href="<?php echo base_url('/dang-xuat') ?>"><i class="me-50" data-feather="power"></i> Logout</a>
            </div>
          </li>
		  <li>
		  <a href="/dang-xuat">
              <button class="btn btn-outline-danger round"  type="button"> <i class="fa-solid fa-power-off"></i> Đăng xuất</button>
              </a>
		  </li>
		  <?php }else{ ?>
			<!--End cart-->
			<li>
				<a href="/dang-nhap">
              <button class="btn btn-outline-danger round"  type="button"> <i class="fa-solid fa-pen-fancy"></i> Đăng ký</button>
              </a>
			</li>

              <li>
			  <a href="/dang-nhap">
              <button class="btn btn-outline-success round" type="button"><i class="fa-solid fa-right-to-bracket"></i> Đăng nhập</button>

              </a>
			  </li>
              
			  <?php } ?>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->
