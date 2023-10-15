<?php 

class UserModel extends CI_Model{
    public function __construct(){
		parent::__construct();
	}

	public function get( $where = array() ){
		return $this->db->where($where)->get("user")->row();

	}

	public function getAll(){
		return $this->db->get("user")->result();
	}













































































}
?>