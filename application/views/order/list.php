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
        <h2 class="card-title"><b>List Order</b></h2>
      </div>
			
      <div class="card-body">
			<?php
			if($this->session->flashdata('DelOrdSuccess')){
				?>
				<div class="alert alert-success"><?php echo $this->session->flashdata('DelOrdSuccess') ?></div>
				<?php
			}elseif($this->session->flashdata('DelOrdError')){
				?>
				<div class="alert alert-danger"><?php echo $this->session->flashdata('DelOrdError') ?></div>

				<?php
			}
		?>
      <div class="table-responsive">
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th>Order Code</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
			<?php foreach($order as $key => $value){
			?>
            <tr>
              <td>
                <?php echo $value->order_code ?>
              </td>
              <td><?php echo $value->name ?></td>
              <td><?php echo $value->email ?></td>
              <td>
			  <?php echo $value->phone ?>
              </td>
			  <td>
			  <?php echo $value->address ?>
              </td>
              <td>
				<?php if($value->status == 1){
					echo '<span class="badge rounded-pill badge-light-primary me-1">Đang chờ xử lý</span>';
				}elseif($value->status == 2){
					echo '<span class="badge rounded-pill badge-light-success me-1">Đã giao hàng</span>';
				}else{
					echo '<span class="badge rounded-pill badge-light-danger me-1">Hủy đơn hàng</span>';
				} ?>
			</td>
              <td>
			  <button class="btn btn-icon btn-flat-primary" type="button">
				<a href="<?php echo base_url('/order/view/'.$value->order_code) ?>">
				<i class="fa-solid fa-eye"></i>
				</a>
            </button>
			<button class="btn btn-icon btn-flat-danger" type="button">
				<a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="<?php echo base_url('/order/delete/'.$value->order_code) ?>">
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
