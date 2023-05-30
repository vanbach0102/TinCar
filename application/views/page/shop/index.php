

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
<form action="<?php echo base_url('tim-kiem') ?>" method="GET">
<section id="ecommerce-searchbar" class="ecommerce-searchbar">
  <div class="row mt-1">
    <div class="col-sm-12">
      <div class="input-group input-group-merge">
        <input
				name="keyword"
          type="text"
          class="form-control search-product"
          id="shop-search"
          placeholder="Search Product"
          aria-label="Search..."
          aria-describedby="shop-search"
        />
        <span class="input-group-text"><button class="btn btn-icon btn-outline-primary" type="submit">
              <i data-feather="search"></i>
            </button></span>
      </div>
    </div>
  </div>
</section>
</form>

<hr>
<!-- E-commerce Search Bar Ends -->

<!-- E-commerce Products Starts -->
  <div class="container">
<div class="row">
<?php foreach($allProduct as $key => $pro){ ?>
  <div class="col-md-4">
    <div class="card mb-4 box-shadow">
  <img src="<?php echo base_url('./upload/'.$pro->image) ?>" style="height: 225px; width: 100%; display: block;" alt="">   
	<form action="<?php echo base_url('/them-gio-hang') ?>" method="POST">
      <div class="card-body">
        <h1 class="card-text" style="color: darkorange;"><b><?php echo $pro->title ?></b></h1>
				<input type="hidden" value="<?php echo $pro->id ?>" name="product_id">
				<input type="hidden"  min="1" name="quantity" value="1" />
        <p class="card-text"><b>Giá: </b><?php echo number_format($pro->price) ?> VND</p>
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

            <a href="<?php echo base_url('san-pham/'.$pro->id.'/'.$pro->title) ?>"><button type="button" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-circle-info"></i> Details</button></a>
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
        <h6 class="filter-title">Categories</h6>
        <ul class="list-unstyled categories-list">
			<?php foreach($category as $key => $category){ ?>
				<li>
	
			<a href="<?php echo base_url('danh-muc/'.$category->id.'/'.$category->title) ?>">
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
	
				<a href="<?php echo base_url('thuong-hieu/'.$brand->id.'/'.$brand->title) ?>">

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
		<!-- BEGIN: Vendor JS-->
    <script src="/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/app-assets/vendors/js/ui/jquery.sticky.js"></script>
		<script src="/app-assets/vendors/js/extensions/wNumb.min.js"></script>
    <script src="/app-assets/vendors/js/extensions/nouislider.min.js"></script>
    <script src="/app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="/app-assets/vendors/js/extensions/swiper.min.js"></script>
    <script src="/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/app-assets/js/core/app-menu.js"></script>
		<script src="/app-assets/js/core/app-menu.min.js"></script>
    <script src="/app-assets/js/core/app.min.js"></script>
    <script src="/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

   <!-- BEGIN: Page JS-->
	 <script src="/app-assets/js/scripts/pages/app-ecommerce.min.js"></script>
	 <script src="/app-assets/js/scripts/pages/app-ecommerce-details.min.js"></script>
    <script src="/app-assets/js/scripts/forms/form-number-input.min.js"></script>
    <script src="/app-assets/js/scripts/pages/app-ecommerce-checkout.min.js"></script>

    <!-- END: Page JS-->
  </body>
  <!-- END: Body-->
</html>
