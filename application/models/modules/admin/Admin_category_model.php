<?php
class admin_category_model extends CI_Model{
    function GET_CATEGORY_LIST($limit,$offset,$search){
        $this->db->select('tb1.id, tb1.name, tb2.name as parent,tb1.order_level,tb1.level,tb1.featured');
        $this->db->from('tbl_categories as tb1');
        $this->db->join('tbl_categories as tb2', 'tb1.parent_id = tb2.id', 'left');
        if($search){
            $this->db->like('tb1.name',$search);
        }
        $this->db->limit($limit,$offset);
         $this->db->order_by('tb1.id','DESC');
        $query = $this->db->get();
        
        // Run the query and get the result
        return $query->result_object();
    
    }
    function GET_USER($id){
        $this->db->select('id,user_type');
        $this->db->where('id',$id);
        $query=$this->db->get('tbl_users');
        return $query->row();
    }
    function GET_CATEGORY_COUNT($search){
        if($search){
            $this->db->like('name',$search);
        }
        return $this->db->count_all_results('tbl_categories');
    }
    function GET_CATEGORY($id){
        $query = $this->db->select('*')
                  ->from('tbl_categories')
                  ->where('id', $id)
                  ->get();
        return $query->row();
    }
    function ADD_CATEGORY($data){
        return $this->db->insert('tbl_categories', $data);
    }
    function UPDATE_FEATURED($id,$table,$status){
        $this->db->set('featured',$status);
        $this->db->where('id',$id);
        return $this->db->update($table);
    }
    function UPDATE_CATEGORY($data,$id){
        $this->db->where('id', $id);
        return $this->db->update('tbl_categories', $data);
    }
    function DELETE_CATEGORY($id){
        $this->db->where('id', $id);
        return $this->db->delete('tbl_categories');
    }
    function GET_FORMATTED_CATEGORY(){
        $this->db->select('id,name,level,parent_id');
        $this->db->from('tbl_categories');
        $query = $this->db->get();
        // Run the query and get the result
        return $query->result_object();
    }
}