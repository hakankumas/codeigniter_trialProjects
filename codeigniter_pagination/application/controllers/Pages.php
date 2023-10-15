<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("sayfaModel");
		$this->load->library("session");
	}

	public function books(){
		$session_username 	= $this->session->userdata("username");
		$data['veriler'] 	= $this->sayfaModel->getAllBooks($session_username);
		$data['title'] 		= $this->sayfaModel->getBooksTitle();
		$this->load->view('pages', $data);

	}

	public function programming(){
		$session_username 	= $this->session->userdata("username");
		$data['veriler'] 	= $this->sayfaModel->getAllProgramming($session_username);
		$data['title']		= $this->sayfaModel->getProgrammingTitle();
		$this->load->view('pages', $data);

	}

	public function games(){
		$session_username 	= $this->session->userdata("username");
		$data['veriler'] 	= $this->sayfaModel->getAllGames($session_username);
		$data['title'] 		= $this->sayfaModel->getGamesTitle();
		$this->load->view('pages', $data);

	}






























































































































}
?>
