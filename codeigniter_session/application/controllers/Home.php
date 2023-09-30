<?php

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function homePage($id){
		$user_list = $this->session->userdata("user_list");

		$active_user = $user_list[$id];

		$viewData = new stdClass();
		$viewData->user = $active_user;
		$viewData->user_list = $user_list;


		$this->load->model("userProductModel");
		$viewData->products = $this->userProductModel->get_all(
			array(
				"user_id" => $active_user->id
			)
		);

		$this->load->view("UserMainPage", $viewData);

	}










}
?>