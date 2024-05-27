<?php
class header_model extends CI_Model
{
    // function GET_LIST_DATA($table,$selection,$column,$id){
    //       $query = $this->db->select($selection)
    //               ->from($table)
    //               ->where($column, $id)
    //               ->get();
    //     return $query->result_object();
    // }
    function GET_PRODUCT_BY_PARENT_ID($parent_id){
        $query = $this->db->select("id,name")
              ->where('parent_id', $parent_id)
              ->order_by("name","asc")
              ->get('tbl_categories');
        return $query->result_object();
    }
    function GET_BRAND_CATEGORIES($ids){
        if(!$ids){
            return array();
        }
        $this->db->select('id,name');
        $this->db->where_in('id',$ids);
        $this->db->order_by('name','asc');
        $query=$this->db->get('tbl_categories');
        return $query->result();
    }
}