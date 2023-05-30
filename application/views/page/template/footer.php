    <!-- BEGIN: Footer-->

<div class="container">
      <div class="row">
        <hr style="color: rgb(229, 11, 11);">
        <footer class="py-2">
          <div class="row" style="background-color: white;"  >
            
            <div class="col-6 col-md-5 mb-6">
              <form>
                <h2><b>Giới thiệu</b></h2>
                <hr>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                  Giấy phép MXH số 526/GP-BTTTT do Bộ TTTT cấp ngày 12/10/2015.
                  <br>
                  Chịu trách nhiệm nội dung: Trần A.
                  <br>
                  Công Ty Cổ Phần Ô Tô Xuyên Việt
                  <br>
                  Địa chỉ: Tầng 6, Toà Nhà Việt Úc, 402 Nguyễn Thị Minh Khai, Phường 5, Quận 3, TP.HCM, VN.
                  <br>
                  Điện thoại: 0888888888
                </div>
              </form>
            </div>
            <div class="col-md-5 offset-md-1 mb-3 ">
              <h2><b>Điều hướng</b></h2>
              <hr>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><b>Trang chủ</b></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><b>Tin tức</b></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><b>Diễn đàn</b></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><b>Âm thanh</b></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><b>Cách âm</b></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><b>Phụ kiện</b></a></li>
                
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><b>Liên hệ</b></a></li>
        
              </ul>
            </div>
          </div>
      
          <div >
            <p>© 2022 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
            </ul>
          </div>
        </footer>
        <hr>
      </div>
      
    </div>
    
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
 
  
   
		<script>
			$('.write-comment').click(function(){
				// alert('ok gửi ');
				var name_comment = $('.name_comment').val();
				var email_comment = $('.email_comment').val();
				var product_id_comment = $('.product_id_comment').val();
				var comment = $('.comment').val();
				if(name_comment == '' || email_comment == '' || comment == '' ){
					alert('làm ơn điền đầy đủ thông tin');
				}else{
						$.ajax({
						method:'POST',
						url:'/comment/send',
						data:{name_comment:name_comment,email_comment:email_comment,comment:comment,product_id_comment:product_id_comment},
						success:function(){
							// alert('Thêm đánh giá thành công, vui lòng chờ duyệt');
							$('#comment_alert').html('<span class="text text-success">Đăng đánh giá thành công, vui lòng chờ duyệt.</span>')
					}
				})
				}
				
			})
			
		</script>
</body>

<!-- END: Body-->

</html>
