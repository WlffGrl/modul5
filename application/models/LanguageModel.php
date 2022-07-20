<?php 
class LanguageModel extends CI_Model{ 
    function getLanguage(){ 
        return $this->db->get("countrylanguage"); 
    } 
} 
?>