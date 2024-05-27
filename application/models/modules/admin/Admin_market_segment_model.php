<?php
class admin_market_segment_model extends CI_Model{
    function GET_MARKET_SEGMENTS($limit,$offset){
        // echo $limit;
        // echo $offset;
        $this->db->order_by('id','desc');
        $this->db->limit($limit,$offset);
        $query=$this->db->get('tbl_market_segments');
        return $query->result();
    }
    function GET_MARKET_SEGMENTS_COUNT(){
        $query=$this->db->get('tbl_market_segments');
        return $query->num_rows();
    }
}