<?php 

class FirstController extends CI_Controller{
    
    public function index(){

        $rows = $this->db->get("person")->result();

        // $viewData = array("rows" => $rows);

        $viewData = new stdClass();
        $viewData->rows = $rows;

        $this->load->view("PersonelList", $viewData);
    }

    // İnsert Sayfası //
    public function insertPage(){ 
        $this->load->view("InsertPage");
    }

    // İnsert İşlemi //
    public function insertProcess(){ 
        
        $name       = $this->input->post("name");
        $surname    = $this->input->post("surname");
        $title      = $this->input->post("title");

        // $name       = Transliterator::create('tr-title')->transliterate($name); 
        // $surname    = Transliterator::create('tr-upper')->transliterate($surname); 
        // $title      = Transliterator::create('tr-title')->transliterate($title); 

        $data = array(
                        "name"      => $name,
                        "surname"   => $surname,    
                        "title"     => $title
                    );
        $process = $this->db->insert("person", $data);
        if($process == true){
            redirect(base_url("FirstController/insertPage"));
        }else{
            echo "Hata!";
        }
    }

    // Update Sayfası //
    public function updatePage(){ 
        $id = $this->uri->segment(3);
        $row = $this->db->where("id", $id)->get("person")->row();

        $viewData = array(
                            "row" => $row
                        );
        
        
        $this->load->view("UpdatePage", $viewData);
    }

    // Update İşlemi //
    public function updateProcess($id){ 
        // $id         = $this->input->post("id");
        $name       = $this->input->post("name");
        $surname    = $this->input->post("surname");
        $title      = $this->input->post("title");

        // $name       = Transliterator::create('tr-title')->transliterate($name); 
        // $surname    = Transliterator::create('tr-upper')->transliterate($surname); 
        // $title      = Transliterator::create('tr-title')->transliterate($title); 

        $data = array(
                        "name"      => $name,
                        "surname"   => $surname,
                        "title"     => $title
                    );

        $update = $this->db->where("id", $id)->update("person", $data);
        
        if($update == true){
            redirect(base_url("FirstController/updatePage/$id"));
        }else{
            echo "Hata!";
        }

    }

    // Delete İşlemi //
    public function deleteProcess($id){ 

        $delete = $this->db->where("id", $id)->delete("person");
        if ($delete == true) {
            redirect(base_url("FirstController"));
        }
    }
    
    public function orderby_id_artan(){
        $rows = $this->db->order_by("id", "ASC")->get("person")->result();
        $viewData = new stdClass();
        $viewData->rows = $rows;
        $this->load->view("PersonelList", $viewData);
    }

    public function orderby_id_azalan(){
        $rows = $this->db->order_by("id", "DESC")->get("person")->result();
        $viewData = new stdClass();
        $viewData->rows = $rows;
        $this->load->view("PersonelList", $viewData);
    }

    public function orderby_name_artan(){
        $rows = $this->db->order_by("name", "ASC")->get("person")->result();
        $viewData = new stdClass();
        $viewData->rows = $rows;
        $this->load->view("PersonelList", $viewData);
    }

    public function orderby_name_azalan(){
        $rows = $this->db->order_by("name", "DESC")->get("person")->result();
        $viewData = new stdClass();
        $viewData->rows = $rows;
        $this->load->view("PersonelList", $viewData);
    }

    public function orderby_surname_artan(){
        $rows = $this->db->order_by("surname", "ASC")->get("person")->result();
        $viewData = new stdClass();
        $viewData->rows = $rows;
        $this->load->view("PersonelList", $viewData);
    }
    
    public function orderby_surname_azalan(){
        $rows = $this->db->order_by("surname", "DESC")->get("person")->result();
        $viewData = new stdClass();
        $viewData->rows = $rows;
        $this->load->view("PersonelList", $viewData);
    }

    public function orderby_title_artan(){
        $rows = $this->db->order_by("title", "ASC")->get("person")->result();
        $viewData = new stdClass();
        $viewData->rows = $rows;
        $this->load->view("PersonelList", $viewData);
    }
    
    public function orderby_title_azalan(){
        $rows = $this->db->order_by("title", "DESC")->get("person")->result();
        $viewData = new stdClass();
        $viewData->rows = $rows;
        $this->load->view("PersonelList", $viewData);
    }




















}
?>