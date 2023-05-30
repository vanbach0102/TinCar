<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
		 $this->load->view('/template/header');
		 $this->load->view('/login/index');
		 $this->load->view('/template/footer');
	}
	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required',['required' => '%s chưa nhập']);
		$this->form_validation->set_rules('password', 'Password', 'trim|required',['required' => '%s chưa điền']);
		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$password =	md5($this->input->post('password'));
			$this->load->model('LoginModel');
			$result = $this->LoginModel->checkLogin($email,$password);
			if($result){
				$session_array = [
					'id' => $result[0]->id,
					'username' => $result[0]->username,
					'email' => $result[0]->email,
				];
				$this->session->set_userdata('LoggedIn',$session_array);
				$this->session->set_flashdata('success','Đăng nhập thành công');
				redirect(base_url('/dashboard'));
			}else{
				$this->session->set_flashdata('error','Đăng nhập thất bại');
				redirect(base_url('/login'));
			}
		}else{
			
			$this->index();
		}

	}
	
}
?>
