<?php
class login_model extends CI_Model{
    function GET_USER_BY_EMAIL($email){
        $this->db->select('id,salt_code,email,password,user_type');
        $this->db->where('email',$email);
        $query=$this->db->get('tbl_users');
        return $query->row();
    }
    function GET_USER_BY_ID($id){
        $this->db->select('id,salt_code,email,password,user_type');
        $this->db->where('id',$id);
        $query=$this->db->get('tbl_users');
        return $query->row();
    }
}