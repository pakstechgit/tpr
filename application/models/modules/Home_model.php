<?php
class home_model extends CI_Model{
    function GET_FEATURED_PRODUCTS($category){
        $this->db->select('tb1.id,tb1.name,tb1.slug,tb1.unit_price,tb2.name as category,tb3.name as brand,tb4.file_name as photos,tb5.file_name as thumbnail');
        $this->db->from('tbl_products as tb1');
        $this->db->join('tbl_categories as tb2','tb1.category_id=tb2.id','left');
        $this->db->join('tbl_brands as tb3','tb1.brand_id=tb3.id','left');
        $this->db->join('tbl_uploads as tb4','tb1.photos=tb4.id','left');
        $this->db->join('tbl_uploads as tb5','tb1.thumbnail_img=tb5.id','left');
        $this->db->where('tb1.featured',1);
        $this->db->where('tb2.name',$category);
        $query=$this->db->get();
        return $query->result();
    }
    function GET_FEATURED_CATEGORIES(){
        $this->db->select('id,name');
        $this->db->where('featured',1);
        $query=$this->db->get('tbl_categories');
        return $query->result();
    }
    function GET_NEW_PRODUCTS(){
        $this->db->select('tb1.name,tb1.slug,tb1.unit_price,tb4.name as brand,tb2.file_name as photos,tb3.file_name as thumbnail');
        $this->db->from('tbl_products as tb1');
        $this->db->join('tbl_uploads as tb2','tb1.photos=tb2.id','left');
        $this->db->join('tbl_uploads as tb3','tb1.thumbnail_img=tb3.id','left');
        $this->db->join('tbl_brands as tb4','tb1.brand_id=tb4.id','left');
        $this->db->where('tb1.new',1);
        $query=$this->db->get();
        return $query->result();
    }
}