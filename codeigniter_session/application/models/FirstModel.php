<?php 

class FirstModel extends CI_Model{
    public function __construct(){
		parent::__construct();
	}

	public function get($where = array()){
		return $this->db->where($where)->get("user")->row();

		
	}






























}
?>