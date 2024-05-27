<?php

class product_attribute_model extends CI_Model
{
    function GET_ATTRIBUTES()
    {
        $sql = 'SELECT a.*, av.value, av.color_code
        FROM tbl_attributes AS a
        LEFT JOIN tbl_attribute_values AS av ON a.id = av.attribute_id; ';

        $query = $this->db->query($sql, array());

        $query->next_result();

        return $query->result();
    }

    function GET_SPECIFIC_ATTR($id)
    {
        $sql = 'SELECT tbl_attributes.name, tbl_attribute_values.*
                FROM tbl_attributes
                JOIN tbl_attribute_values ON tbl_attributes.id = tbl_attribute_values.attribute_id;';
    
        $query = $this->db->query($sql, array($id));
    
        $query->next_result();
    
        return $query->result();
    }
    
}