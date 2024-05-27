<?php
class market_segment_model extends CI_Model{
    function GET_SEGMENT_CATEGORIES($ids){
        if(!$ids){
            return array();
        }
        $this->db->select('id,name');
        $this->db->where_in('id',$ids);
        $this->db->order_by('name','asc');
        $query=$this->db->get('tbl_categories');
        return $query->result();
    }
    function GET_PRODOCT_BY_CATEGORY($market_param,$cat_id){
        $this->db->select('tb1.id,tb1.name,tb1.slug,tb1.unit_price,tb3.name as brand,tb1.category_id,tb2.name as category');
        $this->db->select('tb4.file_name as photo,tb5.file_name as thumbnail'); 
        $this->db->from('tbl_products as tb1');
        $this->db->join('tbl_categories as tb2','tb1.category_id=tb2.id','left');
        $this->db->join('tbl_brands as tb3','tb1.brand_id=tb3.id','left');
        $this->db->join('tbl_uploads as tb4','tb1.photos=tb4.id','left');
        $this->db->join('tbl_uploads as tb5','tb1.thumbnail_img=tb5.id','left');
        $this->db->where("JSON_CONTAINS(market_segment_id, '\"$market_param\"') AND JSON_CONTAINS(category_id, '\"$cat_id\"')");
        // if($cat_id){
        //     // $this->db->where('tb1.category_id',$cat_id);
        // }
        $query=$this->db->get();
        // echo $this->db->last_query();
        return $query->result();
    }
}