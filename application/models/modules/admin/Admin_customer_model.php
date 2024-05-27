<?php
class admin_customer_model extends CI_Model{
    function GET_USER($id){
        $this->db->select('id,user_type');
        $this->db->where('id',$id);
        $query=$this->db->get('tbl_users');
        return $query->row();
    }
    function GET_CUSTOMER_LIST($limit, $offset){
        $this->db->select('id,name,phone,email,banned');        
        $this->db->order_by('id','desc');
        $this->db->where('user_type','customer');
        $query=$this->db->get('tbl_users', $limit, $offset);
        
        return $query->result();
    }
    function GET_TOTAL_COUNT($table){
        if($table=='tbl_users'){
            $this->db->where('user_type','customer');
        }
        return $this->db->count_all_results($table);
    }
    // function GET_DATA_ROW($table,$columns,$item,$value){
    //     $this->db->select($columns);
    //     $this->db->where($item,$value);
    //     $query=$this->db->get($table);
    //     return $query->row();
    // }
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