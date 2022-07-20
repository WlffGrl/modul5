<?php
class CityModel extends CI_Model
{
    function getCity()
    {
        return $this->db->get("city");
    }
    function insertCity()
    {
        $city = array(
            "Name" => $this->input->post("name"),
            "CountryCode" => $this->input->post("code"),
            "District" => $this->input->post("area"),
            "Population" => $this->input->post("populasi")
        );
        return $this->db->insert('City', $city);
    }
    function getCityById($id)
    {
        $this->db->where("ID", $id);
        return $this->db->get('City');
    }
    function updateCity($id)
    {
        $city = array(
            "Name" => $this->input->post("name"),
            "CountryCode" => $this->input->post("code"),
            "District" => $this->input->post("area"),
            "Population" => $this->input->post("populasi")
        );
        $this->db->where("ID", $id);
        return $this->db->update("City", $city);
    }
    function deleteCity($id)
    {
        $this->db->where("ID", $id);
        return $this->db->delete("City");
    }
    function insertCountry()
    {
        $country = array(
            "Code" => $this->input->post("code"),
            "Name" => $this->input->post("name")
        );
        return $this->db->insert('Country', $country);
    }

    function getCountryByCode($code)
    {
        $this->db->where("Code", $code);
        return $this->db->get('Country');
    }

    function updateCountry($code)
    {
        $country = array(
            "Code" => $this->input->post("Code"),
            "Name" => $this->input->post("Name"),
        );
        $this->db->where("Code", $code);
        return $this->db->update("Country", $country);
    }

    function deleteCountry($code)
    {
        $this->db->where("Code", $code);
        return $this->db->delete("Country");
    }
}