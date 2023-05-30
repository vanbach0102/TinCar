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
    <title>Checkout - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/wizard/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
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
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/app-ecommerce.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/pickers/form-pickadate.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/form-wizard.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/extensions/ext-component-toastr.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/form-number-input.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">


    <!-- BEGIN: Content-->
    <div class="app-content content ecommerce-application">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
	  <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Checkout</h2>
                <div class="breadcrumb-wrapper">
              
                   <a href="/delete-all-cart" class="btn btn-outline-danger">Xóa giỏ hàng</a>
            
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><div class="bs-stepper checkout-tab-steps">
  <!-- Wizard starts -->
  <div class="bs-stepper-header">
    <div class="step" data-target="#step-cart" role="tab" id="step-cart-trigger">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-box">
          <i data-feather="shopping-cart" class="font-medium-3"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Cart</span>
          <span class="bs-stepper-subtitle">Your Cart Items</span>
        </span>
      </button>
    </div>
    <div class="line">
      <i data-feather="chevron-right" class="font-medium-2"></i>
    </div>
    <div class="step" data-target="#step-address" role="tab" id="step-address-trigger">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-box">
          <i data-feather="home" class="font-medium-3"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Checkout</span>
          <span class="bs-stepper-subtitle">Enter Your Checkout</span>
        </span>
      </button>
    </div>
  
  </div>
  <!-- Wizard ends -->

  <div class="bs-stepper-content">
    <!-- Checkout Place order starts -->
    <div id="step-cart" class="content" role="tabpanel" aria-labelledby="step-cart-trigger">
      <div id="place-order" class="list-view product-checkout">
        <!-- Checkout Place Order Left starts -->
		<?php if($this->cart->contents()){ ?>
        <div class="checkout-items">
			<?php
			$subtotal = 0;
			$total = 0;
			 foreach($this->cart->contents() as $item){ 
				$subtotal = $item['qty']*$item['price'];
				$total +=$subtotal;
				?>
          <div class="card ecommerce-card">
            <div class="item-img">
              <a href="app-ecommerce-details.html">
                <img src="<?php echo base_url('./upload/'.$item['options']['image']) ?>" alt="img-placeholder" />
              </a>
            </div>
            <div class="card-body">
              <div class="item-name">
                <h6 class="mb-0"><a href="/" class="text-body"><?php echo $item['name'] ?></a></h6>
                <span class="item-company">By <a href="#" class="company-name">Apple</a></span>
                <div class="item-rating">
                  <ul class="unstyled-list list-inline">
                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                    <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                  </ul>
                </div>
              </div>
              <span class="text-success mb-1">In Stock</span>
						<form action="<?php echo base_url('cap-nhat-gio-hang')?>" method="POST">
              <div class="item-quantity">
						<span class="quantity-title">Số lượng: </span>
                <div class="quantity-counter-wrapper">
                  <div class="input-group">
									<div class="col-xl-3 col-md-6 col-12 mb-1 mb-md-0">
										<input class="form-control" id="readonlyInput" type="number"  readonly="readonly" value="<?php echo $item['qty'] ?>">
									</div>
                  
                  </div>
                </div>
              </div>
							</form>
							
							
              <span class="delivery-date text-muted">Delivery by, Wed Apr 25</span>
							
              <span class="text-success">17% off 4 offers Available</span>
							
            </div>
						
            <div class="item-options text-center">
              <div class="item-wrapper">
                <div class="item-cost">
                  <h4 class="item-price"><?php echo number_format($subtotal)?> VND</h4>
                  <p class="card-text shipping">
                    <span class="badge rounded-pill badge-light-success">Free Shipping</span>
                  </p>
                </div>
              </div>

				<button type="button" class="btn btn-relief-danger mt-1 remove-wishlist">
					<a href="<?php echo base_url('delete-item/'.$item['rowid']) ?>" class="text text-dark"><i class="fa-solid fa-trash"></i>
                <span> Remove</span></a>
              </button>
						
			
              
              <button type="button" class="btn btn-primary btn-cart move-cart">
                <i data-feather="heart" class="align-middle me-25"></i>
                <span class="text-truncate">Add to Wishlist</span>
              </button>
            </div>
          </div>

				<?php } ?>
        </div>

		
			

			
        <!-- Checkout Place Order Left ends -->

        <!-- Checkout Place Order Right starts -->
        <div class="checkout-options">
          <div class="card">
            <div class="card-body">
              <label class="section-label form-label mb-1">Options</label>
              <div class="coupons input-group input-group-merge">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Coupons"
                  aria-label="Coupons"
                  aria-describedby="input-coupons"
                />
                <span class="input-group-text text-primary ps-1" id="input-coupons">Apply</span>
              </div>
              <hr />
              <div class="price-details">
                <h6 class="price-title">Price Details</h6>
                <ul class="list-unstyled">
                  <li class="price-detail">
                    <div class="detail-title">Total MRP</div>
                    <div class="detail-amt">$598</div>
                  </li>
                  <li class="price-detail">
                    <div class="detail-title">Bag Discount</div>
                    <div class="detail-amt discount-amt text-success">-25$</div>
                  </li>
                  <li class="price-detail">
                    <div class="detail-title">Estimated Tax</div>
                    <div class="detail-amt">$1.3</div>
                  </li>
                  <li class="price-detail">
                    <div class="detail-title">EMI Eligibility</div>
                    <a href="#" class="detail-amt text-primary">Details</a>
                  </li>
                  <li class="price-detail"> 
                    <div class="detail-title">Delivery Charges</div>
                    <div class="detail-amt discount-amt text-success">Free</div>
                  </li>
                </ul>
                <hr />
                <ul class="list-unstyled">
                  <li class="price-detail">
                    <div class="detail-title detail-total">Total</div>
                    <div class="detail-amt fw-bolder"><?php echo number_format($total)?> VND</div>
                  </li>
                </ul>
                <button type="button" class="btn btn-primary w-100 btn-next place-order">Place Order</button>
              </div>
            </div>
          </div>
          <!-- Checkout Place Order Right ends -->
        </div>
      </div>
      <!-- Checkout Place order Ends -->
    </div>
		<?php }else{ 
			echo '<span class="text text-danger"> Làm ơn thêm sản phẩm vào giỏ hàng </span>';
		}?>
    <!-- Checkout Customer Address Starts -->
    <div id="step-address" class="content" role="tabpanel" aria-labelledby="step-address-trigger">
			
      <form id="checkout-address" onsubmit="return confirm('Xác nhận đơn hàng');" action="<?php echo base_url('confirm-checkout') ?>" method="POST" class="list-view product-checkout">
        <!-- Checkout Customer Address Left starts -->
        <div class="card">
          <div class="card-header flex-column align-items-start">
            <h4 class="card-title">Điền thông tin đặt hàng</h4>
            <p class="card-text text-muted mt-25">Hãy kiểm tra thông tin đặt hàng khi bạn hoàn thành điền thông tin</p>
          </div>
          <div class="card-body">
					<div class="row">
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="first-name">First Name</label>
                  </div>
                  <div class="col-sm-9">
                    <input name="firstname" class="form-control" id="first-name" type="text" placeholder="First Name">
										<div class="text text-danger">
											<?php echo form_error('firstname'); ?>
										</div>
                  </div>
									
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="email-id">Email</label>
                  </div>
                  <div class="col-sm-9">
                    <input name="email" class="form-control" id="email-id" type="email" placeholder="Email">
										<div class="text text-danger">
											<?php echo form_error('email'); ?>
										</div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="contact-info">Mobile</label>
                  </div>
                  <div class="col-sm-9">
                    <input name="phone" class="form-control" id="contact-info" type="number" placeholder="Mobile">
										<div class="text text-danger">
											<?php echo form_error('phone'); ?>
										</div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="password">Address</label>
                  </div>
                  <div class="col-sm-9">
                    <input name="address" class="form-control" id="password" type="text" placeholder="Address">
										<div class="text text-danger">
											<?php echo form_error('address'); ?>
										</div>
                  </div>
                </div>
              </div>
							<div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="password">Hình thức thanh toán</label>
                  </div>
                  <div class="col-sm-9">
									<select class="form-select" name="method" id="selectDefault">
										<option value="cod">COD</option>
										<option value="vnpay">VNPAY</option>
									</select>
                  </div>
                </div>
              </div>
							
              <div class="col-sm-9 offset-sm-3">
                <button class="btn btn-outline-secondary" type="reset">Reset</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Checkout Customer Address Left ends -->

        <!-- Checkout Customer Address Right starts -->
        <div class="customer-card">
          <div class="card">
						<div class="checkout-options">
          <div class="card">
            <div class="card-body">
              <label class="section-label form-label mb-1">Options</label>
              <div class="coupons input-group input-group-merge">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Coupons"
                  aria-label="Coupons"
                  aria-describedby="input-coupons"
                />
                <span class="input-group-text text-primary ps-1" id="input-coupons">Apply</span>
              </div>
              <hr />
              <div class="price-details">
                <h6 class="price-title">Price Details</h6>
                <ul class="list-unstyled">
                  <li class="price-detail">
                    <div class="detail-title">Total MRP</div>
                    <div class="detail-amt">$598</div>
                  </li>
                  <li class="price-detail">
                    <div class="detail-title">Bag Discount</div>
                    <div class="detail-amt discount-amt text-success">-25$</div>
                  </li>
                  <li class="price-detail">
                    <div class="detail-title">Estimated Tax</div>
                    <div class="detail-amt">$1.3</div>
                  </li>
                  <li class="price-detail">
                    <div class="detail-title">EMI Eligibility</div>
                    <a href="#" class="detail-amt text-primary">Details</a>
                  </li>
                  <li class="price-detail"> 
                    <div class="detail-title">Delivery Charges</div>
                    <div class="detail-amt discount-amt text-success">Free</div>
                  </li>
                </ul>
                <hr />
                <ul class="list-unstyled">
                  <li class="price-detail">
                    <div class="detail-title detail-total">Total</div>
                    <div class="detail-amt fw-bolder"><?php echo number_format($total)?> VND</div>
                  </li>
                </ul>
                <button type="submit" class="btn btn-primary w-100 btn-next place-order">Place Order</button>
              </div>
            </div>
          </div>
          <!-- Checkout Place Order Right ends -->
        </div>
          </div>

        </div>
				
        <!-- Checkout Customer Address Right ends -->
      </form>
		
    </div>
    <!-- Checkout Customer Address Ends -->
    </div>
  </div>
</div>

        </div>
      </div>
    </div>
    <!-- END: Content-->

</div>

    </div>
    <!-- End: Customizer-->

  

    <!-- BEGIN: Footer-->
    
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="/app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/app-assets/js/core/app-menu.min.js"></script>
    <script src="/app-assets/js/core/app.min.js"></script>
    <script src="/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/app-assets/js/scripts/pages/app-ecommerce-checkout.min.js"></script>
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
