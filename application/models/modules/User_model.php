<?php
class user_model extends CI_Model{
    function GET_USER($id){
        $this->db->select('id,name,first_name,last_name,avatar,avatar_original');
        $this->db->where('id',$id);
        $query=$this->db->get('tbl_users');
        return $query->row();
    }
    function ADD_USER($data){
        // var_dump($data);
        $this->db->insert('tbl_users', $data);
        return $insert_id = $this->db->insert_id();
    }
    function UPDATE_USER($id,$data){
        
    }
    function DELETE_USER($id){
        
    }
}