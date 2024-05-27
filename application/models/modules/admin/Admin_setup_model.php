<?php
class admin_setup_model extends CI_Model{
    function GET_LIST_COUNTRIES($limit,$offset,$search){
        $this->db->select('id,code,name,status');
        if($search && !empty($search)){
            $this->db->like('name',$search);
            $this->db->or_like('id', $search);
            $this->db->or_like('code', $search);
        }
        $this->db->limit($limit,$offset);
        $this->db->order_by('name','asc');
        $query=$this->db->get('tbl_countries');
        return $query->result();
    }
    function GET_LIST_STATES($limit,$offset,$country_id,$states){
        $this->db->select('tb1.id,tb1.name,tb1.status,tb2.name as country');
        $this->db->from('tbl_states as tb1');
        $this->db->join('tbl_countries as tb2','tb1.country_id=tb2.id','left');
        if($states && !empty($states)){
            $this->db->like('tb1.name',$states);
        }
        if($country_id && !empty($country_id)){
            $this->db->where('tb1.country_id',$country_id);
        }
        
        $this->db->limit($limit,$offset);
        $this->db->order_by('tb1.id','asc');
        $query=$this->db->get();
        return $query->result();
    }
    function GET_TOTAL_STATE_COUNT($country_id,$state){
        if($state && !empty($state)){
            $this->db->like('name',$state);
        }
        if($country_id && !empty($country_id)){
            $this->db->where('country_id',$country_id);
        }
        $query=$this->db->get('tbl_states');
        return $query->num_rows();
    }
    
    function GET_TOTAL_COUNT($table,$search){
        if($search && !empty($search)){
            $this->db->like('name',$search);
            $this->db->or_like('id', $search);
            $this->db->or_like('code', $search);
        }
        $query=$this->db->get($table);
        return $query->num_rows();
    }
    function GET_COUNTRIES(){
        $this->db->select('id,name');
        $this->db->where('status',1);
        $query=$this->db->get('tbl_countries');
        return $query->result();
    }
    function GET_CITIES($limit,$offset,$state_id,$cities){
        $this->db->select('tb1.id,tb1.name,tb1.status,tb2.name as state,tb1.cost');
        $this->db->from('tbl_cities as tb1');
        $this->db->join('tbl_states as tb2','tb1.state_id=tb2.id','left');
        if($cities && !empty($cities)){
            $this->db->like('tb1.name',$cities);
        }
        if($state_id && !empty($state_id)){
            $this->db->where('tb1.state_id',$state_id);
        }
        
        $this->db->limit($limit,$offset);
        $this->db->order_by('tb1.id','asc');
        $query=$this->db->get();
        return $query->result();
    }
    function GET_TOTAL_CITY_COUNT($state_id,$city){
        if($city && !empty($city)){
            $this->db->like('name',$city);
        }
        if($state_id && !empty($state_id)){
            $this->db->where('state_id',$state_id);
        }
        $query=$this->db->get('tbl_cities');
        return $query->num_rows();
    }
    function GET_STATES_LIST(){
        $this->db->select('id,name');
        $this->db->where('status',1);
        $this->db->order_by('name','asc');
        $query=$this->db->get('tbl_states');
        return $query->result();
    }
}