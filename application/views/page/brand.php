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
    <title>Shop - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/nouislider.min.css">
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
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/extensions/ext-component-toastr.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="horizontal-layout horizontal-menu content-detached-left-sidebar navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="content-detached-left-sidebar">


  

    <!-- BEGIN: Content-->
    <div class="app-content content ecommerce-application">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-detached content-right">
          <div class="content-body">
			<!-- E-commerce Content Section Starts -->

<!-- E-commerce Content Section Starts -->

<!-- background Overlay when sidebar is shown  starts-->
<div class="body-content-overlay"></div>
<!-- background Overlay when sidebar is shown  ends-->

<!-- E-commerce Search Bar Starts -->
<section id="ecommerce-searchbar" class="ecommerce-searchbar">
  <div class="row mt-1">
    <div class="col-sm-12">
      <div class="input-group input-group-merge">
        <input
          type="text"
          class="form-control search-product"
          id="shop-search"
          placeholder="Search Product"
          aria-label="Search..."
          aria-describedby="shop-search"
        />
        <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
      </div>
    </div>
  </div>
</section>
<hr>
<!-- E-commerce Search Bar Ends -->

<!-- E-commerce Products Starts -->
  <div class="container">
<div class="row">
<?php foreach($brand_product as $key => $bra_pro){ ?>
  <div class="col-md-4">
    <div class="card mb-4 box-shadow">
  <img src="<?php echo base_url('./upload/'.$bra_pro->image) ?>" style="height: 225px; width: 100%; display: block;" alt="">   
	<form action="<?php echo base_url('/them-gio-hang') ?>" method="POST">
      <div class="card-body">
        <h1 class="card-text" style="color: darkorange;"><b><?php echo $bra_pro->title ?></b></h1>
				<input type="hidden" value="<?php echo $bra_pro->id ?>" name="product_id">
				<input type="hidden"  min="1" name="quantity" value="1" />
        <p class="card-text"><b>Giá: </b><?php echo number_format($bra_pro->price) ?> VND</p>
        <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex">
          <div class="avatar me-50">
            <img width="24" height="24" alt="Avatar" src="../../../app-assets/images/portrait/small/avatar-s-7.jpg">
          </div>
          <div class="author-info">
            <small class="text-muted me-25">by</small>
            <small><a class="text-body">Ghani Pradita</a></small>
            <span class="text-muted ms-50 me-25">|</span>
            <small class="text-muted">Jan 10, 2020</small>
          </div>
        </div>
        </div>
        <hr>
            <button type="submit" class="btn btn-sm btn-outline-success"><i class="fa-solid fa-cart-shopping"></i> Add cart</button>
	</form>
            <a href="<?php echo base_url('san-pham/'.$bra_pro->id.'/'.$bra_pro->slug) ?>"><button type="button" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-circle-info"></i> Details</button></a>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>

</div>
<!-- E-commerce Products Ends -->

<!-- E-commerce Pagination Starts -->
<section id="ecommerce-pagination">
  <div class="row">
    <div class="col-sm-12">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mt-2">
          <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item"><a class="page-link" href="#">6</a></li>
          <li class="page-item"><a class="page-link" href="#">7</a></li>
          <li class="page-item next-item"><a class="page-link" href="#"></a></li>
        </ul>
      </nav>
    </div>
  </div>
</section>
<!-- E-commerce Pagination Ends -->

          </div>
        </div>
        <div class="sidebar-detached sidebar-left">
          <div class="sidebar"><!-- Ecommerce Sidebar Starts -->
<div class="sidebar-shop">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="filter-heading d-none d-lg-block"><b>Mua bán</b></h1>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <!-- Price Filter starts -->

      <!-- <div class="multi-range-price">
        <h6 class="filter-title mt-0">Multi Range</h6>
        <ul class="list-unstyled price-range" id="price-range">
          <li>
            <div class="form-check">
              <input type="radio" id="priceAll" name="price-range" class="form-check-input" checked />
              <label class="form-check-label" for="priceAll">All</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="priceRange1" name="price-range" class="form-check-input" />
              <label class="form-check-label" for="priceRange1">&lt;=$10</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="priceRange2" name="price-range" class="form-check-input" />
              <label class="form-check-label" for="priceRange2">$10 - $100</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="priceARange3" name="price-range" class="form-check-input" />
              <label class="form-check-label" for="priceARange3">$100 - $500</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="priceRange4" name="price-range" class="form-check-input" />
              <label class="form-check-label" for="priceRange4">&gt;= $500</label>
            </div>
          </li>
        </ul>
      </div> -->

      <!-- Price Filter ends -->

      <!-- Price Slider starts -->

      <!-- <div class="price-slider">
        <h6 class="filter-title">Price Range</h6>
        <div class="price-slider">
          <div class="range-slider mt-2" id="price-slider"></div>
        </div>
      </div> -->

      <!-- Price Range ends -->

      <!-- Categories Starts -->
      <div id="product-categories">
        <h3 class="filter-title">Categories</h3>
        <ul class="list-unstyled categories-list">
			<?php foreach($category as $key => $category){ ?>
				<li>
					  <a href="<?php echo base_url('danh-muc/'.$category->id.'/'.$category->slug) ?>">
						<?php echo $category->title ?>
          </li>
		  <?php } ?>
        </ul>
      </div>
      <!-- Categories Ends -->

      <!-- Brands starts -->
			<div id="product-categories">
        <h6 class="filter-title">Brand</h6>
        <ul class="list-unstyled categories-list">
			<?php foreach($brand as $key => $brand){ ?>
				<li>
	
				<a href="<?php echo base_url('thuong-hieu/'.$brand->id.'/'.$brand->slug) ?>">

        	<?php echo $brand->title ?>
   
          </li>
		  <?php } ?>
        </ul>
      </div>
      <!-- Brand ends -->

      <!-- Rating starts -->

      <!-- <div id="ratings">
        <h6 class="filter-title">Ratings</h6>
        <div class="ratings-list">
          <a href="#">
            <ul class="unstyled-list list-inline">
              <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
              <li>& up</li>
            </ul>
          </a>
          <div class="stars-received">160</div>
        </div>
        <div class="ratings-list">
          <a href="#">
            <ul class="unstyled-list list-inline">
              <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
              <li>& up</li>
            </ul>
          </a>
          <div class="stars-received">176</div>
        </div>
        <div class="ratings-list">
          <a href="#">
            <ul class="unstyled-list list-inline">
              <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
              <li>& up</li>
            </ul>
          </a>
          <div class="stars-received">291</div>
        </div>
        <div class="ratings-list">
          <a href="#">
            <ul class="unstyled-list list-inline">
              <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
              <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
              <li>& up</li>
            </ul>
          </a>
          <div class="stars-received">190</div>
        </div>
      </div> -->

      <!-- Rating ends -->

      <!-- Clear Filters Starts -->
      <div id="clear-filters">
        <button type="button" class="btn w-100 btn-primary">Clear All Filters</button>
      </div>
      <!-- Clear Filters Ends -->
    </div>
  </div>
</div>
<!-- Ecommerce Sidebar Ends -->

          </div>
        </div>
      </div>
    </div>
    <!-- END: Content-->



 

    <!-- BEGIN: Footer-->
		<footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25"><a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank"></a><span class="d-none d-sm-inline-block"></span></span><span class="float-md-end d-none d-md-block"></span></p>
    </footer>

    
  </body>
  <!-- END: Body-->
</html>
