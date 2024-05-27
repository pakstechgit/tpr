<?php
class admin_dashboard_model extends CI_Model
{
    function GET_CATEGORY_LIST($limit,$offset){
        $this->db->select('tb1.id, tb1.name, tb2.name as parent,tb1.order_level,tb1.level,tb1.featured');
        $this->db->from('tbl_categories as tb1');
        $this->db->join('tbl_categories as tb2', 'tb1.parent_id = tb2.id', 'left');
        $this->db->limit($limit,$offset);
         $this->db->order_by('tb1.id','DESC');
        $query = $this->db->get();
        
        // Run the query and get the result
        return $query->result_object();
    
    }
    function GET_COLOR_NAME($code){
        
        $this->db->where('code',$code);
        $query=$this->db->get('tbl_colors');
        return $query->row();
    }
    function GET_TOTAL_DATA($table){
        if($table=='tbl_users'){
            $this->db->where('user_type','customer');
        }
        return $this->db->count_all_results($table);
    }
    function GET_TOP_PRODUCTS(){
        // $this->db->select('tb1.*');
        // $this->db->from('tbl_products as tb1');
        // $this->db->join()
    }
    function GET_CATEGORY_COUNT(){
        return $this->db->count_all_results('tbl_categories');
    }
    function GET_FORMATTED_CATEGORY(){
        $this->db->select('id,name,level,parent_id');
        $this->db->from('tbl_categories');
        $query = $this->db->get();
        // Run the query and get the result
        return $query->result_object();
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
    function UPDATE_CATEGORY($data,$id){
        $this->db->where('id', $id);
        return $this->db->update('tbl_categories', $data);
    }
    function UPDATE_FEATURED($id,$table,$status){
        $this->db->set('featured',$status);
        $this->db->where('id',$id);
        return $this->db->update($table);
    }
    function DELETE_CATEGORY($id){
        $this->db->where('id', $id);
        return $this->db->delete('tbl_categories');
    }
    // brands
    function GET_BRAND_LIST($limit,$offset){
        
         $this->db->order_by('id','desc');
         $query=$this->db->get('tbl_brands', $limit, $offset);
        return $query->result_object();
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
    function GET_STOCK_DATA($variant,$product_id){
        $this->db->select('tb1.id,tb1.variant,tb1.price,tb1.qty,tb1.sku,tb2.file_name,tb1.image');
        $this->db->from('tbl_product_stocks as tb1');
        $this->db->join('tbl_uploads as tb2','tb1.image=tb2.id','left');
        $this->db->where('variant',$variant);
        $this->db->where('product_id',$product_id);
        $query=$this->db->get();
        return $query->row();
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