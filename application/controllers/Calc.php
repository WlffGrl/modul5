<?php 
class Calc extends CI_Controller{ 
    public function index(){ 
        $this->load->helper('url');
        $this->load->view("calculator_form");
    }

    public function hitung(){ 
        $x = $this->input->post('bil1'); 
        $y = $this->input->post('bil2'); 
        $data['hasil'] = $x+$y; 
        $this->load->view("calculator_form",$data);
    }
} 
?>