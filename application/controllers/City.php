<?php
class City extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("CityModel", "", TRUE);
    }
    public function index()
    {
        $this->load->library('table');
        $this->load->model("CityModel", "", TRUE);
        $data['city'] = $this->CityModel->getCity();
        $this->load->view("city", $data);
    }
    public function tambah()
    {
        $this->load->model('CountryModel');
        $data['country'] = $this->CountryModel->getCountry();
        $this->load->view("kota_tambah", $data);
    }
    public function prosesTambah()
    {
        if ($this->CityModel->insertCity()) {
            redirect(site_url("City"));
        } else {
            redirect(site_url("City/tambah"));
        }
    }
    public function update($id)
    {
        $this->load->model('CountryModel');
        $data['country'] = $this->CountryModel->getCountry();
        $data['city'] = $this->CityModel->getCityById($id)->row();
        $this->load->view("kota_update", $data);
    }
    public function prosesUpdate($id)
    {
        if ($this->CityModel->updateCity($id)) {
            redirect(site_url("city"));
        } else {
            redirect(site_url("city/update/$id"));
        }
    }
    public function hapus($id)
    {
        $this->CityModel->deleteCity($id);
        redirect(site_url("city"));
    }
}