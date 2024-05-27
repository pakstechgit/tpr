<?php
class admin_report_model extends CI_Model{
    // function GET_USER($id){
    //     $this->db->select('id,user_type');
    //     $this->db->where('id',$id);
    //     $query=$this->db->get('tbl_users');
    //     return $query->row();
    // }
    function GET_PRODUCT_SALE_LIST($limit, $offset,$category){
        $this->db->select('id,name,num_of_sale');        
        if($category && $category!='all'){
            $this->db->where('category_id',$category);
        }
        $this->db->order_by('id','desc');
        $this->db->limit($limit,$offset);
        $query=$this->db->get('tbl_products', $limit, $offset);
        return $query->result();
    }
    function GET_TOTAL_COUNT($table){
        if($table=='tbl_users'){
            $this->db->where('user_type','customer');
        }
        return $this->db->count_all_results($table);
    }
    function GET_PRODUCT_STOCKS($limit, $offset,$category){
        $this->db->select('tb2.id,tb2.name,sum(tb1.qty) as total_stocks');
        $this->db->from('tbl_product_stocks as tb1');
        $this->db->join('tbl_products as tb2','tb1.product_id=tb2.id','left');
        if($category && $category!='all'){
            $this->db->where('tb2.category_id',$category);
        }
        $this->db->group_by('tb1.product_id');
        $this->db->order_by('tb2.id','desc');
        $this->db->limit($limit,$offset);
        $query=$this->db->get();
        return $query->result();
        
    }
    // function GET_DATA_ROW($table,$columns,$item,$value){
    //     $this->db->select($columns);
    //     $this->db->where($item,$value);
    //     $query=$this->db->get($table);
    //     return $query->row();
    // }
    function GET_CATEGORY_LIST(){
        $this->db->order_by('name','asc');
        $query=$this->db->get('tbl_categories');
        return $query->result();
    }
    // function GET_DATA_LIST($table,$columns="*"){
    //     $this->db->select($columns);
    //     $query=$this->db->get($table);
    //     return $query->result();
    // }
    function GET_PRODUCT_WISHLIST($limit, $offset,$category){
        $this->db->select('tb2.id,tb2.name,count(tb1.product_id) as total_wishes');
        $this->db->from('tbl_wishlists as tb1');
        $this->db->join('tbl_products as tb2','tb1.product_id=tb2.id','left');
        if($category && $category!='all'){
            $this->db->where('tb2.category_id',$category);
        }
        $this->db->group_by('tb1.product_id');
        $this->db->order_by('tb2.id','desc');
        $this->db->limit($limit,$offset);
        $query=$this->db->get();
        return $query->result();
        
    }
    function GET_GET_PRODUCT_WISHLIST_COUNT($category){
        $this->db->from('tbl_wishlists as tb1');
        $this->db->join('tbl_products as tb2','tb1.product_id=tb2.id','left');
        if($category && $category!='all'){
            $this->db->where('tb2.category_id',$category);
        }
        $this->db->group_by('tb1.product_id');
        $query=$this->db->get();
        return $query->num_rows();
    }
    // function UPDATE_DATA_ROW($table,$column,$new_val,$item,$value){
    //     $this->db->set($column,$new_val);
    //     $this->db->where($item,$value);
    //     return $this->db->update($table);
    // }
    // function DELETE_DATA($table,$item,$value){
    //   $this->db->where($item,$value);
    //   return  $this->db->delete($table);
    // }
    
}