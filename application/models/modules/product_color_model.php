<?php
class product_color_model extends CI_Model
{
    function GET_ALL_COLORS()
    {
        $sql = 'SELECT id, name, code FROM tbl_colors LIMIT 10';
        $query = $this->db->query($sql, array());
        $query->next_result();
        return $query->result();
    }

    function GET_COLOR($id)
    {
        $sql = 'SELECT * FROM tbl_colors WHERE id = ?';
        $query = $this->db->query($sql, array($id));
        $query->next_result();
        return $query->result();
    }

    function UPDATE_COLOR($color_id, $name, $code)
    {
        $sql = 'UPDATE tbl_colors 
                SET name = ?, code = ?  WHERE id = ?';

        $query = $this->db->query($sql, array($name, $code, $color_id));

        return $query;
    }

    function ADD_COLOR($name , $code)
    {
        $sql = 'INSERT INTO tbl_colors (name , code)
                VALUES (?,?)';

        $query = $this->db->query($sql, array($name , $code));     
      
        return $query;
    
    }

    function DELETE_COLOR($color_id)
    {
        $sql = 'DELETE FROM tbl_colors
                WHERE id = ?';
                
        $query = $this->db->query($sql, array($color_id));

        return $query;
    }
}
