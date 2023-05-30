

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
        <a href="index.html" class="brand-logo">
         
          <h2 class="brand-text text-primary ms-1">Đăng nhập dashboard</h2>
        </a>
		<?php
			if($this->session->flashdata('message')){
				?>
				<div class="alert alert-success"><?php echo $this->session->flashdata('message') ?></div>
				<?php
			}elseif($this->session->flashdata('error')){
				?>
				<div class="alert alert-danger"><?php echo $this->session->flashdata('error') ?></div>

				<?php
			}
		?>
        <form class="auth-login-form mt-2" action="<?php echo base_url('/login-user') ?>" method="POST">
          <div class="mb-1">
            <label for="login-email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="login-email"
              name="email"
              placeholder="john@example.com"
              aria-describedby="login-email"
              tabindex="1"
              autofocus
            />
			<?php echo form_error('email'); ?>

          </div>

          <div class="mb-1">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="login-password">Password</label>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
              <input
                type="password"
                class="form-control form-control-merge"
                id="login-password"
                name="password"
                tabindex="2"
                placeholder=""
                aria-describedby="login-password"
              />

              <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
			<?php echo form_error('password'); ?>

          </div>
          <div class="mb-1">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
              <label class="form-check-label" for="remember-me"> Remember Me </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary w-100" tabindex="4">Sign in</button>
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
