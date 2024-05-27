<?php
class admin_item_option_model extends CI_Model{
    function GET_ITEM_OPTIONS($limit,$offset){
        $query=$this->db->get('tbl_item_options');
        return $query->result();
    }
    function GET_ITEM_OPTIONS_COUNT(){
        $query=$this->db->get('tbl_item_options');
        return $query->num_rows();
    }
}