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
			if($this->session->flashdata('CateDelSuccess')){
				?>
				<div class="alert alert-success"><?php echo $this->session->flashdata('CateDelSuccess') ?></div>
				<?php
			}elseif($this->session->flashdata('BrError')){
				?>
				<div class="alert alert-danger"><?php echo $this->session->flashdata('BrError') ?></div>

				<?php
			}
		?>
      <div class="table-responsive">
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th>Order Code</th>
              <th>Product</th>
              <th>Image</th>
              <th>Quantity</th>
              <th>Unit Price</th>
              <th>Total</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
			<?php foreach($order_detail as $key => $value){
			?>
            <tr>
              <td>
                <?php echo $value->order_code ?>
              </td>
              <td><?php echo $value->title ?></td>
              <td>
			  <img width="100px" src="<?php echo base_url('./upload/'.$value->image) ?>" alt="">
              </td>
			  <td>
			  <?php echo $value->qty ?>
              </td>
			  <td> 
			  <?php echo $value->price ?>
              </td>
              <td>
				<?php echo number_format($value->qty * $value->price,0,',','.');?> VND
			</td>
            
            </tr>
         <?php 
		 }
		 ?>
		 <tr>
		 <td>
			  <div class="mb-1">

              <select class="xulydonhang form-select" id="basicSelect">
							<?php if($value->order_status == 1) {?>
              <option selected id="<?php echo $value->order_code ?>" value="1">--- Đơn hàng đang xử lý ---</option>
              <option id="<?php echo $value->order_code ?>" value="2">Đơn hàng đã được xử và đang giao</option>
              <option id="<?php echo $value->order_code ?>" value="3">Hủy đơn hàng</option>
							<?php } ?>
							<?php if($value->order_status == 2) {?>
								<option id="<?php echo $value->order_code ?>" value="1">--- Đơn hàng đang xử lý ---</option>
								<option selected id="<?php echo $value->order_code ?>" value="2">Đơn hàng đã được xử và đang giao</option>
								<option id="<?php echo $value->order_code ?>" value="3">Hủy đơn hàng</option>
								<?php } ?>
							<?php if($value->order_status == 3) {?>
								<option id="<?php echo $value->order_code ?>" value="1">--- Đơn hàng đang xử lý ---</option>
								<option id="<?php echo $value->order_code ?>" value="2">Đơn hàng đã được xử và đang giao</option>
								<option selected id="<?php echo $value->order_code ?>" value="3">Hủy đơn hàng</option>
								<?php } ?>

            </select>
              
     
            
          </div>
              </td>
		 </tr>
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
