<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderController extends CI_Controller {

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

		 $this->load->model('OrderModel');
		$data['order'] = $this->OrderModel->selectOrder();
		 $this->load->view('/order/list',$data);
		 $this->load->view('/admin_template/footer');
	}
	public function view($order_code)
	{
		 $this->checkLogin();
		 $this->load->view('/admin_template/header');
		 $this->load->view('/admin_template/navbar');

		 $this->load->model('OrderModel');
		 $data['order_detail'] = $this->OrderModel->selectOrderDetail($order_code);
		 $this->load->view('/order/view',$data);
		 $this->load->view('/admin_template/footer');
	}
	public function delete($order_code)
	{
		 $this->checkLogin();

		 $this->load->model('OrderModel');
		 $delete = $this->OrderModel->deleteOrderDetail($order_code);
		 $delete = $this->OrderModel->deleteOrder($order_code);
		if($delete){
			$this->session->set_flashdata('DelOrdSuccess','Xóa thành công');
			redirect(base_url('order/list'));
		}else{
			$this->session->set_flashdata('DelOrdError','Xóa thất bại');
			redirect(base_url('order/list'));
		}

	}
	public function process(){
		 $value = $this->input->post('value');
		 $order_code = $this->input->post('order_code');
		 $this->load->model('OrderModel');
		 $data = array(
			'status' => $value,
		 );	
		 $this->OrderModel->updateOrder($data,$order_code);
	}
	public function logout(){
		$this->checkLogin();
		$this->session->unset_userdata('LoggedIn');
		$this->session->set_flashdata('message','Đăng xuất thành công');
		redirect(base_url('/login'));
	}
	
}
