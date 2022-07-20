<?php
class Country extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("CountryModel", "", TRUE);
    }
    public function index()
    {
        $this->load->library('table');
        $this->load->model("CountryModel", "", TRUE);
        $data['country'] = $this->CountryModel->getCountry();
        $this->load->view("country", $data);
    }
    public function tambah()
    {
        $this->load->model('CountryModel');
        $data['country'] = $this->CountryModel->getCountry();
        $this->load->view("negara_tambah", $data);
    }
    public function prosesTambah()
    {
        if ($this->CountryModel->insertCountry()) {
            redirect(site_url("country"));
        } else {
            redirect(site_url("country/tambah"));
        }
    }
    public function update($Code)
    {
        $this->load->model('CountryModel');
        $data['country'] = $this->CountryModel->getCountry();
        $data['country'] = $this->CountryModel->getCountryByCode($Code)->row();
        $this->load->view("negara_update", $data);
    }
    public function prosesUpdate($Code)
    {
        if ($this->CountryModel->updateCountry($Code)) {
            redirect(site_url("country"));
        } else {
            redirect(site_url("country/update/$Code"));
        }
    }
    public function hapus($Code)
    {
        $this->CountryModel->deleteCountry($Code);
        redirect(site_url("country"));
    }
}
?>