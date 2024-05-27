<?php
class uploads_model extends CI_Model
{
    function GET_LIST_FILES($search,$sort){
        $this->db->select('*');
        $this->db->from('tbl_uploads');
        if($search){
            $this->db->like('file_original_name',$search);
        }
        // $this->db->where('user_id',$user_id);
        // $this->db->order_by('id','DESC');
        if($sort=='newest'){
            $this->db->order_by('created_at','desc');
        }
        if($sort=='oldest'){
            $this->db->order_by('created_at','asc');
        }
        if($sort=='smallest'){
            $this->db->order_by('file_size','asc');
        }
        if($sort=='largest'){
            $this->db->order_by('file_size','desc');
        }
        $query = $this->db->get();
        return $query->result_object();
    }
    function GET_FILE($id){
        $this->db->select('*');
        $this->db->from('tbl_uploads');
        $this->db->where('id',$id);
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        return $query->result_object();
    }
    function UPLOAD_DATA($data){
        return $this->db->insert('tbl_uploads', $data);
    }
    function GET_UPLOADED_FILES($limit, $offset){
        $this->db->select('*');
        $this->db->limit($limit,$offset);
        $query=$this->db->get('tbl_uploads');
        return $query->result();
    }
    function GET_TOTAL_UPLOADED_FILES_COUNT(){
        $query=$this->db->get('tbl_uploads');
        return $query->num_rows();
    }
}