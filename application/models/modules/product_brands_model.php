<?php
class product_brands_model extends CI_Model 
{
    function GET_ALL_BRAND_INFO()
    {
        $sql = 'SELECT id, name, logo FROM tbl_brands';
        $query = $this->db->query($sql, array());
        $query->next_result();
        return $query->result();
    }

    function GET_BRAND_INFO($id)
    {
        $sql = 'SELECT * FROM tbl_brands WHERE id = ?';
        $query = $this->db->query($sql, array($id));
        $query->next_result();
        return $query->result();
    }

    function INSERT_NEW_BRAND($name, $logo, $meta_title, $meta_description)
    {
        $sql = 'INSERT INTO tbl_brands (name, logo, meta_title, meta_description) VALUES (?,?,?,?)';
        $query = $this->db->query($sql, array($name, $logo, $meta_title, $meta_description));
        return;
    }

    
}