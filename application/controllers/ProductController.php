<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller {


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

		 $this->load->model('ProductModel');
		 $data['product'] = $this->ProductModel->selectProduct();

		 $this->load->view('/product/list',$data);
		 $this->load->view('/admin_template/footer');
	}




	public function create()
	{
		$this->checkLogin();
		 $this->load->view('/admin_template/header');
		 $this->load->view('/admin_template/navbar');
		//Gọi model Cateory
		$this->load->model('CategoryModel');
		 $data['category'] = $this->CategoryModel->selectCategory();
		 //Gọi model Brand
		 $this->load->model('BrandModel');
		 $data['brand'] = $this->BrandModel->selectBrand();

		 $this->load->view('/product/create',$data);
		 $this->load->view('/admin_template/footer');
	}
	public function store(){
		$this->form_validation->set_rules('title', 'Title', 'trim|required',['required' => '%s chưa nhập']);
		$this->form_validation->set_rules('slug', 'Slug', 'trim|required',['required' => '%s chưa có']);
		$this->form_validation->set_rules('quantity', 'Quantity', 'trim|required',['required' => '%s chưa có']);
		$this->form_validation->set_rules('description', 'Description', 'trim|required',['required' => '%s chưa điền']);

		if ($this->form_validation->run() == TRUE){
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
								$this->load->view('/product/create',$error);
								$this->load->view('/admin_template/footer');
						}else{
							$product_filename = $this->upload->data('file_name');
							$data = [
								'title' => $this->input->post('title'),
								'slug' => $this->input->post('slug'),
								'price' => $this->input->post('price'),
								'quantity' => $this->input->post('quantity'),	
								'description' => $this->input->post('description'),
								'status' => $this->input->post('status'),
								'category_id' => $this->input->post('category_id'),	
								'brand_id' => $this->input->post('brand_id'),
								'image' => $product_filename,
								
							];
							$this->load->model('ProductModel');
							$this->ProductModel->insertProduct($data);
							$this->session->set_flashdata('PrSuccess','Thêm thành công');
							redirect(base_url('product/create'));
						}
                
		}else{

			$this->create();
		}
	}
	


	public function edit($id){
		$this->checkLogin();
		$this->load->view('/admin_template/header');
		$this->load->view('/admin_template/navbar');
		
		//Gọi model Cateory
		$this->load->model('CategoryModel');
		 $data['category'] = $this->CategoryModel->selectCategory();
		 //Gọi model Brand
		 $this->load->model('BrandModel');
		 $data['brand'] = $this->BrandModel->selectBrand();

		$this->load->model('ProductModel');
		$data['product'] = $this->ProductModel->selectProductById($id);
		
		$this->load->view('/product/edit',$data);
		$this->load->view('/admin_template/footer');
	}



	public function update($id){
		$this->form_validation->set_rules('title', 'Title', 'trim|required',['required' => '%s chưa nhập']);
		$this->form_validation->set_rules('slug', 'Slug', 'trim|required',['required' => '%s chưa có']);
		$this->form_validation->set_rules('price', 'Price', 'trim|required',['required' => '%s chưa có']);
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
								$this->load->view('/product/create',$error);
								$this->load->view('/admin_template/footer');
						}else{
							$filename = $this->upload->data('file_name');

							$data = [
								'title' => $this->input->post('title'), 
								'slug' => $this->input->post('slug'),	
								'price' => $this->input->post('price'),	
								'quantity' => $this->input->post('quantity'),	
								'description' => $this->input->post('description'),
								'status' => $this->input->post('status'),
								'category_id' => $this->input->post('category_id'),
								'brand_id' => $this->input->post('brand_id'),
								'image' => $filename
							];
							
						}
					}else{
						$data = [
							'title' => $this->input->post('title'),
							'slug' => $this->input->post('slug'),	
							'price' => $this->input->post('price'),	
							'quantity' => $this->input->post('quantity'),	
							'description' => $this->input->post('description'),
							'status' => $this->input->post('status'),
							'category_id' => $this->input->post('category_id'),
							'brand_id' => $this->input->post('brand_id'),

						];
					}
							$this->load->model('ProductModel');
							$this->ProductModel->updateProduct($id,$data);
							$this->session->set_flashdata('PrUpSuccess','Cập nhật thành công');
							redirect(base_url('product/list'));	
                
		}else{

			$this->edit($id);
		}
	}
	public function delete($id){

		$this->load->model('ProductModel');
		$this->ProductModel->deleteProduct($id);
		$this->session->set_flashdata('PrDelSuccess','Xóa thành công');
		redirect(base_url('product/list'));

	}
}


?>
