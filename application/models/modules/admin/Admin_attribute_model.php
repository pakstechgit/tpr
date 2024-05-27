<?php
class admin_attribute_model extends CI_Model
{

    function GET_USER($id){
        $this->db->select('id,user_type');
        $this->db->where('id',$id);
        $query=$this->db->get('tbl_users');
        return $query->row();
    }
    function GET_ATTRIBUTE_LIST($limit, $offset){
        $this->db->select('id,name');        
        $this->db->order_by('id','desc');
        $query=$this->db->get('tbl_attributes', $limit, $offset);
        $attributes=$query->result_object();
        for($i=0;$i<count($attributes);$i++){
            $attributes[$i]->values=$this->GET_ATTRIBUTE_VALUES($attributes[$i]->id);
        }
        return $attributes;
    }
    function GET_ATTRIBUTE_VALUES($id){
        $this->db->select('id,attribute_id,value');
        $this->db->where('attribute_id',$id);
        $query = $this->db->get('tbl_attribute_values');
        return $query->result_object();
    }
    function GET_TOTAL_DATA($table){
        if($table=='tbl_users'){
            $this->db->where('user_type','customer');
        }
        return $this->db->count_all_results($table);
    }
    function GET_MATERIAL_LIST($limit,$offset){
        $this->db->order_by('id','desc');
        $query=$this->db->get('tbl_materials', $limit, $offset);
        return $query->result_object();
    }
    // dynamic crud operations
    function GET_TOTAL_COUNT($table){
        return $this->db->count_all_results($table);
    }
    // for adding new data
    function ADD_DATA($table,$data){
         $this->db->insert($table, $data);
         return $this->db->insert_id();
    }

    // for specific data
    // function GET_DATA($table,$id){
    //      $query = $this->db->select('*')
    //               ->from($table)
    //               ->where('id', $id)
    //               ->get();
    //     return $query->row();
    // }
    // function ADD_BATCH_DATA($table_name,$data){
    //     return $this->db->insert_batch($table_name, $data);
    // }
    // function GET_LIST_DATA($table,$column,$id){
    //       $query = $this->db->select('*')
    //               ->from($table)
    //               ->where($column, $id)
    //               ->get();
    //     return $query->result_object();
    // }
    // function UPDATE_DATA($table,$id,$data){
    //     $this->db->where('id', $id);
    //     return $this->db->update($table, $data);
    // }
    // function DELETE_DATA($table,$id){
    //     $this->db->where('id', $id);
    //     return $this->db->delete($table);
    // }
}