<?php
class products_category_model extends CI_Model
{
    function GET_CATEGORY()
    {
        $sql = "SELECT id, name, parent_id, order_level, level, icon, cover_image, featured, commision_rate, banner FROM tbl_categories ORDER BY id ASC LIMIT 15";

        $query = $this->db->query($sql, array());

        $query->next_result();

        return $query->result();
    }

    function UPDATE_FEATURE($featureValue, $idValue)
    {
     
        $this->db->where('id', $idValue);

        $data = array('featured' => $featureValue);
        
        $this->db->update('tbl_categories', $data);

        // Return the update result (true or false)
        return $this->db->affected_rows() > 0;
    }
}
