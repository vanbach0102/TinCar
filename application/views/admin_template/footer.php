<script src="/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/app-assets/js/core/app-menu.min.js"></script>
    <script src="/app-assets/js/core/app.min.js"></script>
    <script src="/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>

		<script>
			$('.xulydonhang').change(function(){
				const value = $(this).val();
				const order_code = $(this).find(':selected').attr('id');
				if(value == 1){
					alert('Làm ơn xử lý đơn hàng');
				}else{
					$.ajax({
						method: 'POST',
						url:'/order/process',
						data:{value:value,order_code:order_code},
						success:function(){
							alert('Thay đổi thuộc tính đơn hàng thành công');
						}
					})
				}
			})
		</script>
  </body>
  <!-- END: Body-->
</html>
