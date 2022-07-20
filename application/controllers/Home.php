<?php
class Home extends CI_Controller
{
    function register()
    {
        $this->load->view("register");
    }

    function prosesDaftar()
    {
        $this->load->model("UserModel", "", TRUE);
        $user = array(
            "username" => $this->input->post("username"),
            "password" => $this->input->post("password"),
            "Nama" => $this->input->post("nama")
        );

        $config['upload_path'] = './assets/image';
        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = 100; 
        // $config['max_width'] = 1024; 
        // $config['max_height'] = 768; 
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            echo $this->upload->display_errors();
        } else {
            $upload_data = $this->upload->data();
            $user['url'] = base_url("assets/image/") . $upload_data['file_name'];
        }
        if ($this->UserModel->insertUser($user)) {
            redirect(site_url("home"));
        } else {
            redirect(site_url("home/register"));
        }
    }

    function index()
    {
        if ($this->session->userdata('login')) {
            $this->load->view("home");
        } else {
            $this->load->view("login");
        }
    }

    function login()
    {
        $this->load->view("login");
        $this->load->model("UserModel");
        if ($this->UserModel->login()->num_rows() > 0) {
            $session_data = array(
                "login" => true,
                "username" => $this->input->post("username")
            );
            $this->session->set_userdata($session_data);
            redirect(site_url("home"));
        } else {
            $this->session->set_flashdata("error", "Username atau Password Salah");
            redirect(site_url("home"));
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
