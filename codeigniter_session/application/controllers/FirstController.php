<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirstController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("FirstModel");
	}
	
	public function index(){
		$user_list = $this->session->userdata("user_list");
		if($user_list){
			$user = reset($user_list);
			redirect(base_url("anasayfa/" . md5($user->mail)));
			
		}else{
			redirect(base_url("giris"));
		}
	}

	public function loginPage(){
		$this->load->view("LoginPage");
	}
	
	public function loginProcess(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("mail", "Mail", "required|trim|valid_email");
		$this->form_validation->set_rules("password", "Password", "required|trim");
		
		$this->form_validation->set_message(
			array(
				"required" => "<b>{field}</b> alanını boş bırakamazsınız!",
				"valid_email" => "Lütfen geçerli bir adres giriniz!"
			));

		if($this->form_validation->run() === FALSE){
			$viewData = new stdClass();
			$viewData->form_error = true;
			$this->load->view("LoginPage", $viewData);
		}else{
			$user = $this->FirstModel->get(
				array(
					"mail" => $this->input->post("mail"),
					"password" => md5($this->input->post("password"))
				));
			
			if($user == TRUE){
				if($this->session->userdata("user_list")){
					$user_list = $this->session->userdata("user_list");
				}else{
					$user_list = [];
				}

				$user_list[md5($user->mail)] = $user;
				$this->session->set_userdata("user_list", $user_list);
				// print_r($user_list);
				
				redirect(base_url("anasayfa/" . md5($user->mail)));


				// echo "<script>alert('Hoş Geldiniz!');</script>";
				// $this->load->view("UserMainPage");
			}else{
				echo "<script>alert('Giriş Bilgileriniz Doğru Değil!');</script>";
				$this->load->view("LoginPage");
			}
		}

	}

	public function logout($id){
		$user_list = $this->session->userdata("user_list");
		unset($user_list[$id]);
		$this->session->set_userdata("user_list", $user_list);
		echo "<script>alert('Oturumunuz Sonlandırıldı!');</script>";
		$this->load->view("LoginPage");


	}


	public function listSession(){
		print_r($this->session->userdata("user_list"));
	}


	public function deleteSession(){
		$this->session->unset_userdata("user_list");
	}


















}
?>