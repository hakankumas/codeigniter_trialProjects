<?php 

class FirstModel extends CI_Model{
    public function __construct(){
		parent::__construct();
	}

	public function insert($data = array()){
		return $this->db->insert("mail", $data);
	}
	
}

?>