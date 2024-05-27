<?php
class admin_web_setup_model extends CI_Model{
    function INSERT_UPDATE_SETTINGS($data){
        $sql = "INSERT INTO tbl_business_settings (type, value) 
        VALUES (?,?)
        ON DUPLICATE KEY UPDATE value = ? ";
        $query = $this->db->query($sql, array($data['type'],$data['value'],$data['value']));
        return $query;
    }
}