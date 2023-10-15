<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirstController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("userModel");
		$this->load->library("session");
	}
	public function index(){
		$this->load->view('loginPage');
	}

	public function userHome(){
		$this->load->view('userHome');
	}

	public function loginProcess(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$data = array(
						"username" => $username,
						"password" => $password
				);
		$process = $this->userModel->get($data);

		if($process == TRUE){
			$this->session->set_userdata(array(
												"username" => $username,
												"password" => $password
												)
										);

			$this->session->set_flashdata('message', 'Başarıyla giriş yaptınız.');
			redirect(base_url("firstController/userHome"));

		}else{
			$this->session->set_flashdata('error', 'Giriş işleminiz başarısız!');
			redirect(base_url("firstController/index"));
		}

	}

	public function logoutProcess(){
		$this->session->unset_userdata("username");
		$this->session->unset_userdata("password");
		redirect(base_url("firstController/index"));	
	}


































































































































}
?>
