<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirstController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("firstModel");
	}
	public function index(){
		$this->load->view("FirstView_Process");
	}

	public function sendMail(){
		$config = array(
			"protocol" 		=> "smtp",
			"smtp_host" 	=> "ssl://smtp.gmail.com",
			"smtp_port" 	=> "465",
			"smtp_user" 	=> "emailAdresiniziGiriniz",
			"smtp_pass" 	=> "emailAdresinizinŞifresiniGiriniz",
			"starttls" 		=> true,
			"charset" 		=> "utf-8",
			"mail_type" 	=> "html",
			"wordwrap" 		=> "true",
			"newline" 		=> "\r\n",
		);
		
		$sender 		= $this->input->post("sender");
		$mailtoadress 	= $this->input->post("mailtoadress");
		$mail_title 	= $this->input->post("mail_title");
		$mail_content 	= $this->input->post("mail_content");

		$this->load->library('email', $config);
		$this->email->from("emailAdresiniziGiriniz", $sender);
		$this->email->to($mailtoadress);
		$this->email->subject($mail_title);
		$this->email->message($mail_content);
		
		$send = $this->email->send();

		if($send == TRUE){
			
			$data = array(
							"sender" => $sender,
							"mailtoadress" => $mailtoadress,
							"mail_title" => $mail_title,
							"mail_content" => $mail_content
						);

			$this->firstModel->insert($data);
			
			redirect(base_url("FirstController/successAlert"));

		}else{
			echo "İşleminiz Başarısız Oldu!";
			echo "<hr>";
			echo $this->email->print_debugger();
		}

	}
	public function successAlert(){
		$this->load->view("FirstView_Success");
	}

}

?>