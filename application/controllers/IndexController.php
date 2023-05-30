<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('IndexModel');	
	
		$this->data['category'] = $this->IndexModel->getCategoryHome();
		$this->data['category_blog'] = $this->IndexModel->getCategoryBLogHome();
		$this->data['brand'] = $this->IndexModel->getBrandHome();

		$this->load->library('cart');
		$this->load->library('pagination');
	}

	
	public function index()
	{
	
		// //custom config link
		// $config = array();
        // $config["base_url"] = base_url() .'/pagination/index'; 
		// $config['total_rows'] = ceil($this->IndexModel->countAllProduct()); //đếm tất cả sản phẩm //8 //hàm ceil làm tròn phân trang 
		// $config["per_page"] = 6; //từng trang 6 sản phẩn
        // $config["uri_segment"] = 1; //lấy số trang hiện tại
		// $config['use_page_numbers'] = TRUE; //trang có số
		// $config['full_tag_open'] = '<ul class="pagination pagination-success justify-content-center mt-2">';
		// $config['full_tag_close'] = '</ul>';
		// $config['first_link'] = 'First';
		// $config['first_tag_open'] = '<li class="page-item active">';
		// $config['first_tag_close'] = '</li>';
		// $config['last_link'] = 'Last';
		// $config['last_tag_open'] = '<li>';
		// $config['last_tag_close'] = '</li>';
		// $config['cur_tag_open'] = '<li class="active"><a class="page-link">';
		// $config['cur_tag_close'] = '</a></li>';
		// $config['num_tag_open'] = '<li class="page-item">';
		// $config['num_tag_close'] = '</li>';
		// $config['next_tag_open'] = '<li class="page-item next-item">';
		// $config['next_tag_close'] = '</li>';
		// $config['prev_tag_open'] = '<li class="page-item prev-item">';
		// $config['prev_tag_close'] = '</li>';
		// //end custom config link
		// $this->pagination->initialize($config); //tự động tạo trang
		// $this->page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0; //current page active 
		// $this->data["links"] = $this->pagination->create_links(); //tự động tạo links phân trang dựa vào trang hiện tại
		// $this->data['allproduct_pagination'] = $this->IndexModel->getIndexPagination($config["per_page"], $this->page);
		// //pagination

		$this->data['allProduct'] = $this->IndexModel->getAllProduct();
		$this->load->view('page/template/header');
		$this->load->view('page/template/main-menu',$this->data);
		$this->load->view('page/template/carousel');
		$this->load->view('page/template/home',$this->data);
		$this->load->view('page/template/footer');
		// $this->load->view('page/template/js');

		
	}
	public function category($id)
	{
		
		$this->data['category_product'] = $this->IndexModel->getCateProduct($id);
		$this->data['title'] = $this->IndexModel->getCategoryTitle($id);
		$this->config->config["pageTitle"] = $this->data['title'];	
		$this->load->view('page/template/header');
		$this->load->view('page/template/main-menu',$this->data);
		$this->load->view('page/category',$this->data);
		$this->load->view('page/template/footer');

		$this->load->view('page/template/js');
		

	}
	public function brand($id)
	{
		$this->data['brand_product'] = $this->IndexModel->getBrandProduct($id);
		$this->data['title'] = $this->IndexModel->getBrandTitle($id);
		$this->config->config["pageTitle"] = $this->data['title'];
		$this->load->view('page/template/header');
		$this->load->view('page/template/main-menu',$this->data);

		$this->load->view('page/brand',$this->data);
		$this->load->view('page/template/footer');
		$this->load->view('page/template/js');

	}
	public function cart()
	{
		if($this->session->userdata('LoggedInCustomer')){
		$this->config->config["pageTitle"] = "Giỏ hàng của bạn";
			$this->load->view('page/template/header',$this->data);
			$this->load->view('page/template/main-menu',$this->data);
			$this->load->view('page/cart');
			$this->load->view('page/template/footer');
			// $this->load->view('page/template/js');
		}else{
			redirect(base_url().'/dang-nhap');
		}
		
	}
	
	public function add_to_cart()
	{
		
		$product_id = $this->input->post('product_id');
		$quantity = $this->input->post('quantity');
		$this->data['product_detail'] = $this->IndexModel->getProductDetail($product_id);
		//đặt hàng 
		foreach($this->data['product_detail'] as $key => $pro){
		$cart = array(
			'id' => $pro->id,
			'qty' => $quantity,
			'price' => $pro->price,
			'name' => $pro->title,
			'options' => array('image' => $pro->image),
			);
		}
		$this->cart->insert($cart);
		redirect(base_url().'gio-hang','refresh');
	}
	public function delete_all_cart(){
		$this->cart->destroy();
		redirect(base_url().'gio-hang','refesh');
	}
	public function delete_item($rowid){
		$this->cart->remove($rowid);
		redirect(base_url().'gio-hang','refesh');
	}
	public function login()
	{
		$this->config->config["pageTitle"] = "Dăng nhập | Đăng ký";
		$this->load->view('page/template/header');
		$this->load->view('page/template/main-menu');
		// $this->load->view('page/template/carousel');	
		$this->load->view('page/login');
		$this->load->view('page/template/footer');
		// $this->load->view('page/template/js');

	}
	public function product($id)
	{
		$this->data['product_detail'] = $this->IndexModel->getProductDetail($id);
		$this->data['list_comment'] = $this->IndexModel->getListComment($id);
		$this->data['title'] = $this->IndexModel->getProductTitle($id);
		$this->config->config["pageTitle"] = $this->data['title'];
		$this->load->view('page/template/header');
		$this->load->view('page/template/main-menu',$this->data);
		// $this->load->view('page/template/carousel');
		$this->load->view('page/product_detail',$this->data);
		$this->load->view('page/template/footer');
		$this->load->view('page/template/js');

	}
	public function shop()
	{
		
		$this->data['allProduct'] = $this->IndexModel->getAllProduct();
		$this->load->view('page/template/header');
		$this->load->view('page/template/main-menu',$this->data);
		$this->load->view('page/shop/index',$this->data);
		$this->load->view('page/template/footer');
		// $this->load->view('page/template/js');
		
	}
	public function update_item(){
		$rowid = $this->input->post('rowid');
		echo $quantity = $this->input->post('quantity');
		foreach($this->cart->contents() as $item){
			if($rowid == $item['rowid']){
				$cart = array(
					'rowid' => $rowid,
					'qty'   => $quantity
				);
			}
		}
		$this->cart->update($cart);
		redirect(base_url().'gio-hang','refresh');
	}
	public function login_customer()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required',['required' => '%s chưa nhập']);
		$this->form_validation->set_rules('password', 'Password', 'trim|required',['required' => '%s chưa điền']);
		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$password =	md5($this->input->post('password'));
			$this->load->model('LoginModel');
			$result = $this->LoginModel->checkLoginCustomer($email,$password);
			if(count($result)>0){
				$session_array = [
					'id' => $result[0]->id,
					'username' => $result[0]->name,
					'email' => $result[0]->email,
				];
				$this->session->set_userdata('LoggedInCustomer',$session_array);
				$this->session->set_flashdata('Custsuccess','Đăng nhập thành công');
				redirect(base_url('/dang-nhap'));
				// redirect($_SERVER['HTTP_REFERER']);   quay lại trang trước đó
			}else{
				$this->session->set_flashdata('Custerror','Đăng nhập thất bại');
				redirect(base_url('/dang-nhap'));
			}
		}else{
			
			$this->login();
		}

	}
	public function dang_ky()
	{
		$this->form_validation->set_rules('Resemail', 'Email', 'trim|required',['required' => '%s chưa nhập']);
		$this->form_validation->set_rules('Resname', 'Name', 'trim|required',['required' => '%s chưa nhập']);
		$this->form_validation->set_rules('Resphone', 'Phone', 'trim|required',['required' => '%s chưa nhập']);
		$this->form_validation->set_rules('Resaddress', 'Address', 'trim|required',['required' => '%s chưa nhập']);
		$this->form_validation->set_rules('Respassword', 'Password', 'trim|required',['required' => '%s chưa điền']);
		if($this->form_validation->run()){
			$Resemail = $this->input->post('Resemail');
			$Resname = $this->input->post('Resname');
			$Resphone = $this->input->post('Resphone');
			$Resaddress = $this->input->post('Resaddress');
			$Respassword =	md5($this->input->post('Respassword'));
			$data = array(
			//trường database		//name html
				'email' 			=> $Resemail,
				'name' 				=> $Resname,
				'phone' 			=> $Resphone,
				'address' 			=> $Resaddress,
				'password' 			=> $Respassword,
			);
			$this->load->model('LoginModel');
			$result = $this->LoginModel->NewCustomer($data);
			if($result){
				$session_array = [
					'username' => $Resname,
					'mail' => $Resemail,
				];
				$this->session->set_userdata('LoggedInCustomer',$session_array);
				$this->session->set_flashdata('CustRessuccess','Đăng ký thành công');
				redirect(base_url('/dang-nhap'));
			}else{
				$this->session->set_flashdata('CustReserror','Đăng ký thất bại');
				redirect(base_url('/dang-nhap'));
			}
		}else{
			
			$this->login();
		}

	}
	public function confirm_checkout(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required',['required' => '%s chưa nhập']);
		$this->form_validation->set_rules('firstname', 'Tên đầy đủ', 'trim|required',['required' => '%s chưa nhập']);
		$this->form_validation->set_rules('phone', 'Điện thoại', 'trim|required',['required' => '%s chưa nhập']);
		$this->form_validation->set_rules('address', 'Địa chỉ nhà', 'trim|required',['required' => '%s chưa nhập']);
		if($this->form_validation->run()){
			$firstname = $this->input->post('firstname');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$address = $this->input->post('address');
			$method =	$this->input->post('method');
			$data = array(
			//trường database		//name html
				'name' 				=> $firstname,
				'email' 			=> $email,
				'phone' 			=> $phone,
				'address' 			=> $address,
				'method'			=> $method
			);
			$this->load->model('LoginModel');
			//order			
			$result = $this->LoginModel->NewShipping($data);
			if($result){
			$order_code = rand(00,9999);
			$data_order = array(
				//trường database		//name html
					'order_code' 		=> $order_code,
					'ship_id' 			=> $result,
					'status' 			=> 1
				);
			$insert_order = $this->LoginModel->insert_order($data_order);
				//order detail
				foreach($this->cart->contents() as $item){
					$data_order_details = array( 
						//trường database		//name html
							'order_code' 		=> $order_code,
							'product_id' 			=> $item['id'],
							'quantity' 			=> $item['qty']
						);
				$data_order_details = $this->LoginModel->data_order_details($data_order_details);

				}
				$this->session->set_flashdata('Shipsuccess','Vận chuyển đơn hàng thành công');
				$this->cart->destroy();
				redirect(base_url('/success'));
			}else{
				$this->session->set_flashdata('Shiperror','Vận chuyển thất bại');
				redirect(base_url('/gio-hang'));
			}
		}else{
			$this->cart();
		}

	}
	public function successPage(){
		$this->config->config["pageTitle"] = "Đặt hàng thành công";
		$this->load->view('page/success');


	}
	public function search(){

		if(isset($_GET['keyword']) && $_GET['keyword'] != ''){
			 $keyword = $_GET['keyword'];
		}
		
		$this->data['product'] = $this->IndexModel->getProductByKeyword($keyword);
		$this->data['title'] = $keyword;
		$this->config->config["pageTitle"] = 'Tìm kiếm: '.$keyword;	
		$this->load->view('page/template/header'); 
		$this->load->view('page/template/main-menu',$this->data);
		$this->load->view('page/search',$this->data);
		$this->load->view('page/template/footer'); 
		$this->load->view('page/template/js');
		
	}
	public function mail(){

		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_user'] = 'vanbach010@gmail.com';
		$config['smtp_pass'] = 'jozaelhswasqwqha';
		$config['smtp_port'] = 465;
		$config['charset'] = 'UTF-8';
		$config['wordwrap'] = TRUE;
		
		$this->email->initialize($config); //khởi tạo
		$this->email->set_newline("\r \n");

		$this->email->from('vanbach010@gmail.com','My test email');
		$this->email->to('vanbach010@gmail.com');
		$this->email->subject('Email test');
		$this->email->message('Testing');

		if($this->email->send()){
			echo 'Email sent';
		}else{
			echo 'Error';
		}
 		
	}
	public function comment_send(){
		$data = [
			'name' => $this->input->post('name_comment'),
			'product_id' => $this->input->post('product_id_comment'),
			'email' => $this->input->post('email_comment'),	
			'comment' => $this->input->post('comment'),
			'status' => 0,
		'date' => Carbon\Carbon::now('Asia/Ho_Chi_Minh'), 
			
		];
		$result = $this->IndexModel->insertComment($data);
	}
	public function dang_xuat(){
		$this->session->unset_userdata('LoggedInCustomer');
		$this->session->set_flashdata('message','Đăng xuất thành công');
		redirect(base_url('/dang-nhap'));
	}
}
