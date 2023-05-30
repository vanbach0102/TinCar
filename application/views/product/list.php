<div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-body">

<!-- Table head options start -->
<div class="row" id="table-head">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h2 class="card-title"><b>List Product</b></h2>
      </div>
			
      <div class="card-body">
			<?php
			if($this->session->flashdata('PrDelSuccess')){
				?>
				<div class="alert alert-success"><?php echo $this->session->flashdata('PrDelSuccess') ?></div>
				<?php
			}elseif($this->session->flashdata('PrUpSuccess')){
				?>
				<div class="alert alert-success"><?php echo $this->session->flashdata('PrUpSuccess') ?></div>

				<?php
			}
		?>
      <div class="table-responsive">
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Description</th>
              <th>Status</th>
              <th>Category</th>
              <th>Brand</th>	
              <th>Image</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
			<?php foreach($product as $key => $value){
			?>
            <tr>
              <td>
                <?php echo $value->id ?>
              </td>
              <td><?php echo $value->title ?></td>
              <td><?php echo number_format($value->price,0,',','.') ?> VND</td>
              <td><?php echo $value->quantity ?></td>
              <td>
			  <?php echo $value->description ?>
              </td>
              <td>
				<?php if($value->status == 1){
					echo '<span class="badge rounded-pill badge-light-success me-1">Active</span>';
				}else{
					echo '<span class="badge rounded-pill badge-light-danger me-1">Inactive</span>';
				} ?>
			</td>
			<td><?php echo $value->tendanhmuc ?></td>
              <td><?php echo $value->tenthuonghieu ?></td>
			  <td>
			  <img width="100px" src="<?php echo base_url('upload/'.$value->image) ?>" alt="">
              </td>
              <td>
			  <button class="btn btn-icon btn-flat-primary" type="button">
				<a href="<?php echo base_url('/product/edit/'.$value->id) ?>">
				<i class="fa-solid fa-pen-to-square"></i>
				</a>
            </button>
			<button class="btn btn-icon btn-flat-danger" type="button">
				<a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="<?php echo base_url('/product/delete/'.$value->id) ?>">
			<i class="fa-solid fa-trash-can"></i>
				</a>
            </button>
              </td>
            </tr>
         <?php 
		 }
		 ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Table head options end -->



        </div>
      </div>
    </div>
