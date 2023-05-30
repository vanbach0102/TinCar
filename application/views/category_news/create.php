<div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        
        <div class="content-body"><!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
  <div class="row">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h2 class="card-title"><b>Add Category News</b></h2>
        </div>
        <div class="card-body">
				<?php
			if($this->session->flashdata('CateNewsSuccess')){
				?>
				<div class="text text-success"><?php echo $this->session->flashdata('CateNewsSuccess') ?></div>
				<?php
			}elseif($this->session->flashdata('BrError')){
				?>
				<div class="text text-danger"><?php echo $this->session->flashdata('BrError') ?></div>

				<?php
			}
		?>
          <form class="form form-horizontal" action="<?php echo base_url('/category/news/store') ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="fname-icon">Title</label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="fa-solid fa-pen"></i></i></span>
                      <input name="title" onkeyup="ChangeToSlug();" class="form-control" id="title" type="text" placeholder="Title">
                    </div>
					<?php echo '<span class="text text-danger">'.form_error('title').'</span>'  ?>
                  </div>
                </div>
              </div>
			  <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="fname-icon"> Slug</label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="fa-solid fa-info"></i></span>
                      <input name="slug" class="form-control" id="slug" type="text" placeholder="Slug">
                    </div>
					<?php echo '<span class="text text-danger">'.form_error('slug').'</span>'  ?>
                  </div>
                </div>
              </div>
			  <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="fname-icon">Status</label>
                  </div>
                  <div class="col-sm-9">
				  <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="fa-solid fa-circle-exclamation"></i></i></span>
                      <select class="form-control" name="status" id="">
						<option value="1">Active</option>
						<option value="0">Inactive</option>
					</select>
                    </div>
                    
                  </div>
                </div>
              </div>
			 
			  
              <div class="col-sm-9 offset-sm-3">
                <button class="btn btn-primary me-1" type="submit">Add</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Horizontal form layout section end -->
        </div>
      </div>
    </div>
<script>
   let profilePic = document.getElementById("profile-pic");
   let inputFile = document.getElementById("input-file");
   
   inputFile.onchange = function(){
      profilePic.src = URL.createObjectURL(inputFile.files[0]);
   }
</script>
<script language="javascript">
            function ChangeToSlug()
            {
                var title, slug;
 
                //Lấy text từ thẻ input title 
                title = document.getElementById("title").value;
 
                //Đổi chữ hoa thành chữ thường
                slug = title.toLowerCase();
 
                //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
                document.getElementById('slug').value = slug;
            }
</script>
