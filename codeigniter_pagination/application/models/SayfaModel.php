<?php 

class SayfaModel extends CI_Model{
    public function __construct(){
		parent::__construct();
	}

	public function getAllBooks( $session_username ){
		return $this->db
					->select("*")
					->from("sayfalar")
					->join("ozel_sayfalar", "sayfalar.ozel_sayfa_id = ozel_sayfalar.ozel_sayfa_id")
					->where("username",$session_username)
					->where("ozel_sayfalar.ozel_sayfa_id", 1)
					->get()
					->result();
	}
	public function getAllProgramming( $session_username ){
		return $this->db
					->select("*")
					->from("sayfalar")
					->join("ozel_sayfalar", "sayfalar.ozel_sayfa_id = ozel_sayfalar.ozel_sayfa_id")
					->where("username",$session_username)
					->where("ozel_sayfalar.ozel_sayfa_id", 2)
					->get()
					->result();
	}
	public function getAllGames( $session_username ){
		return $this->db
					->select("*")
					->from("sayfalar")
					->join("ozel_sayfalar", "sayfalar.ozel_sayfa_id = ozel_sayfalar.ozel_sayfa_id")
					->where("username",$session_username)
					->where("ozel_sayfalar.ozel_sayfa_id", 3)
					->get()
					->result();
	}
	public function getBooksTitle(){
		return $this->db
					->select("ozel_sayfalar.ozel_sayfa_ad")
					->from("ozel_sayfalar")
					->where("ozel_sayfalar.ozel_sayfa_id", 1)
					->get()
					->result();
	}
	
	public function getProgrammingTitle(){
		return $this->db
					->select("ozel_sayfalar.ozel_sayfa_ad")
					->from("ozel_sayfalar")
					->where("ozel_sayfalar.ozel_sayfa_id", 2)
					->get()
					->result();
	}
	public function getGamesTitle(){
		return $this->db
					->select("ozel_sayfalar.ozel_sayfa_ad")
					->from("ozel_sayfalar")
					->where("ozel_sayfalar.ozel_sayfa_id", 3)
					->get()
					->result();
	}
	












































































}
?>