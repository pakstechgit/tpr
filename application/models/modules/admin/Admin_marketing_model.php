<?php
class admin_marketing_model extends CI_Model{
 function GET_FLASH_DEALS_LIST($limit,$offset){
     $this->db->select('tb1.*,tb2.file_name as banner_image');
     $this->db->from('tbl_flash_deals as tb1');
     $this->db->join('tbl_uploads as tb2','tb1.banner=tb2.id','left');
     $this->db->limit($limit,$offset);
     $this->db->order_by('tb1.id','desc');
     $query=$this->db->get();
     return $query->result();
 }   
 function GET_FLASH_DEALS_COUNT(){
     $query=$this->db->get('tbl_flash_deals');
     return $query->num_rows();
 }
 function GET_FLASH_DEAL_PRODUCTS($id){
     $this->db->select('tb1.*,tb2.name,tb3.file_name as thumbnail,tb2.unit_price');
     $this->db->from('tbl_flash_deal_products as tb1');
     $this->db->join('tbl_products as tb2','tb1.product_id=tb2.id','left');
     $this->db->join('tbl_uploads as tb3','tb2.thumbnail_img=tb3.id','left');
     $this->db->where('tb1.flash_deal_id',$id);
     $query=$this->db->get();
     return $query->result();
 }
 function GET_FLASH_DEAL_PRODUCTS_LIST($flash_deal_id,$product_ids){
     $this->db->select('tb1.id,tb2.discount, tb1.name,tb1.unit_price,tb3.file_name as thumbnail');
     $this->db->from('tbl_products as tb1');
     $this->db->join('tbl_flash_deal_products as tb2','tb1.id=tb2.product_id AND tb2.flash_deal_id='.$flash_deal_id,'left');
     $this->db->join('tbl_uploads as tb3','tb1.thumbnail_img=tb3.id','left');
     $this->db->where_in('tb1.id',$product_ids);
     $query=$this->db->get();
     return $query->result();
 }
 function GET_ROW_FLASH_DEAL($id){
     $this->db->select('tb1.*,tb2.file_name as banner_image');
     $this->db->from('tbl_flash_deals as tb1');
     $this->db->join('tbl_uploads as tb2','tb1.banner=tb2.id','left');
     $this->db->where('tb1.id',$id);
     $query=$this->db->get();
     return $query->row();
     
 }
 function GET_PRODUCTS($ids){
    $this->db->select('tb1.id,tb1.name,tb1.unit_price,tb1.discount,tb2.file_name as thumbnail');
    $this->db->from('tbl_products as tb1');
    $this->db->join('tbl_uploads as tb2','tb1.thumbnail_img=tb2.id','left');
    
    $this->db->where_in('tb1.id',$ids);
    $query=$this->db->get();
    return $query->result();
 }
}