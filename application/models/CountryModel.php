<?php
class CountryModel extends CI_Model
{
    function getCountry()
    {
        return $this->db->get("country");
    }
    function insertCountry()
    {
        $country = array(
            "Code" => $this->input->post("code"),
            "Name" => $this->input->post("name"),
        );
        return $this->db->insert('Country', $country);
    }
    function getCountryByCode($Code)
    {
        $this->db->where("Code", $Code);
        return $this->db->get('Country');
    }
    function updateCountry($Code)
    {
        $country = array(
            "Code" => $this->input->post("code"),
            "Name" => $this->input->post("name"),
        );
        $this->db->where("Code", $Code);
        return $this->db->update("Country", $country);
    }
    function deleteCountry($code)
    {
        $this->db->where("Code", $code);
        return $this->db->delete("Country");
    }
}
?>