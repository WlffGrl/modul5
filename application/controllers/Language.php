<?php 
class Language extends CI_Controller{ 
    public function index(){ 
        $this->load->library("table");
        $this->load->model("LanguageModel","",TRUE); 
        $data['countrylanguage'] = $this->LanguageModel->getLanguage(); 
        $this->load->view("language",$data); 

    }
} 
?>