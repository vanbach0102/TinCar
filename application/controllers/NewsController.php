<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsController extends CI_Controller {


	public function checkLogin(){
		if(!$this->session->userdata('LoggedIn')){
			redirect(base_url('/login'));
		}
	}
	public function index()
	{ 
		$this->checkLogin();
		 $this->load->view('/admin_template/header');
		 $this->load->view('/admin_template/navbar');

		 $this->load->model('NewsModel');
		 $data['category_news'] = $this->NewsModel->selectCategoryNews();

		 $this->load->view('/category_news/list',$data);
		 $this->load->view('/admin_template/footer');
	}




	public function create()
	{
		$this->checkLogin();
		 $this->load->view('/admin_template/header');
		 $this->load->view('/admin_template/navbar');
		 $this->load->view('/category_news/create');
		 $this->load->view('/admin_template/footer');
	}
	public function store(){
		$this->form_validation->set_rules('title', 'Title', 'trim|required',['required' => '%s chưa nhập']);
		$this->form_validation->set_rules('slug', 'Slug', 'trim|required',['required' => '%s chưa có']);
		$this->form_validation->set_rules('description', 'Description', 'trim|required',['required' => '%s chưa điền']);

		if ($this->form_validation->run() == TRUE){
			$data = [
					'title' => $this->input->post('title'),
					'slug' => $this->input->post('slug'),	
					'status' => $this->input->post('status'),					
				];
					$this->load->model('NewsModel');
					$this->NewsModel->insertCategoryNews($data);
					$this->session->set_flashdata('CateNewsSuccess','Thêm thành công');
					redirect(base_url('category/news/create'));
			
                
		}else{

			$this->create();
		}
	}
	


	public function edit($id){
		$this->checkLogin();
		$this->load->view('/admin_template/header');
		$this->load->view('/admin_template/navbar');
		
		$this->load->model('NewsModel');
		$data['category_news'] = $this->NewsModel->selectcategory_newsById($id);
		
		$this->load->view('/category_news/edit',$data);
		$this->load->view('/admin_template/footer');
	}



	public function update($id){
		$this->form_validation->set_rules('title', 'Title', 'trim|required',['required' => '%s chưa nhập']);
		$this->form_validation->set_rules('slug', 'Slug', 'trim|required',['required' => '%s chưa có']);
		$this->form_validation->set_rules('description', 'Description', 'trim|required',['required' => '%s chưa điền']);

		if ($this->form_validation->run() == TRUE){
			if(!empty($_FILES['image']['name'])){

			$ori_filename = $_FILES['image']['name'];
			$new_name = time()."".str_replace('','-',$ori_filename);
			$config = [
				'upload_path' =>'./upload/',
				'allowed_types' => 'gif|jpg|png|jpeg',
				'file_name' => $new_name,
			];
		$this->load->library('upload',$config);
				if ( ! $this->upload->do_upload('image'))
						{
								$error = array('error' => $this->upload->display_errors());

								$this->load->view('/admin_template/header');
								$this->load->view('/admin_template/navbar');
								$this->load->view('/category_news/create',$error);
								$this->load->view('/admin_template/footer');
						}else{
							$category_news_filename = $this->upload->data('file_name');
							$data = [
								'title' => $this->input->post('title'),
								'slug' => $this->input->post('slug'),	
								'description' => $this->input->post('description'),
								'status' => $this->input->post('status'),
								'image' => $category_news_filename,
								
							];
							
						}
					}else{
						$data = [
							'title' => $this->input->post('title'),
							'slug' => $this->input->post('slug'),	
							'description' => $this->input->post('description'),
							'status' => $this->input->post('status'),
							
						];
					}
					$this->load->model('NewsModel');
							$this->NewsModel->updateCategoryNews($id,$data);
							$this->session->set_flashdata('CateNewsUpSuccess','Cập nhật thành công');
							redirect(base_url('category/news/list'));	
                
		}else{

			$this->edit($id);
		}
	}
	public function delete($id){

		$this->load->model('NewsModel');
		$this->NewsModel->deleteCategoryNews($id);
		$this->session->set_flashdata('CateNewsDelSuccess','Xóa thành công');
		redirect(base_url('category/news/list'));

	}
}


?>
