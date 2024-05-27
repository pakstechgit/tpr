<?php
class admin_product_model extends CI_Model
{
    // function GET_USER($id){
    //     $this->db->select('id,user_type');
    //     $this->db->where('id',$id);
    //     $query=$this->db->get('tbl_users');
    //     return $query->row();
    // }
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
    function GET_ITEM_OPTIONS($item_option){
        if(empty($item_option)){
            return array();
        }
        $this->db->where_in('id',$item_option);
        $this->db->order_by('level',"asc");
        $query=$this->db->get('tbl_item_options');
        return $query->result();
    }
    function GET_CATEGORY_COUNT(){
        return $this->db->count_all_results('tbl_categories');
    }
    function GET_PRODUCTS_LISTS($limit,$offset){
        // echo $limit.'<br>';
        // echo $offset.'<br>';
        $this->db->select('tb1.id,tb1.name as name,tb1.slug,tb3.file_name as thumbnail_img,
        tb2.name as added_by,rating,new,current_stock,num_of_sale,unit_price,todays_deal,featured,published,low_stock_quantity');
        $this->db->from('tbl_products as tb1');
        $this->db->join('tbl_users as tb2', 'tb1.user_id = tb2.id','left');
        $this->db->join('tbl_uploads as tb3','tb1.thumbnail_img=tb3.id','left');
        $this->db->limit($limit,$offset);
        $this->db->order_by('tb1.id','DESC');
        $query = $this->db->get();
        // echo $this->db->last_query();
        return $query->result();
    }
    function GET_USER_PRODUCTS_LIST($user_id){
        $this->db->select('tbl_products.id,tbl_products.name as product_name,tbl_users.name as added_by,rating,thumbnail_img,current_stock,num_of_sale');
        $this->db->from('tbl_products');
        $this->db->join('tbl_users', 'tbl_products.user_id = tbl_users.id','left');
        $this->db->where('tbl_products.user_id',$user_id);
        $this->db->order_by('tbl_products.id','DESC');
        $query = $this->db->get();
        return $query->result_object();
    }
    function GET_PRODUCTS_DIGITAL(){
        $this->db->select('tbl_products.id,tbl_products.name as product_name,tbl_uploads.file_name as thumbnail_img,
        tbl_users.name as added_by,rating,current_stock,num_of_sale,unit_price,todays_deal,featured,published');
        $this->db->from('tbl_products');
        $this->db->join('tbl_users', 'tbl_products.user_id = tbl_users.id','left');
        $this->db->join('tbl_uploads','tbl_products.thumbnail_img=tbl_uploads.id','left');
        $this->db->where('digital',1);
        $this->db->order_by('tbl_products.id','DESC');
        $query = $this->db->get();
        return $query->result_object();
    }
    function GET_COLOR_NAME($code){
        
        $this->db->where('code',$code);
        $query=$this->db->get('tbl_colors');
        return $query->row();
    }
    function GET_STOCK_DATA($variant,$product_id){
        $this->db->select('tb1.id,tb1.item_number,tb1.unit,tb1.weight,tb1.variant,tb1.price,tb1.qty,tb1.sku,tb2.file_name,tb1.image,
        tb2.file_original_name,tb2.file_size,tb2.extension
        ');
        $this->db->from('tbl_product_stocks as tb1');
        $this->db->join('tbl_uploads as tb2','tb1.image=tb2.id','left');
        $this->db->where('variant',$variant);
        $this->db->where('product_id',$product_id);
        $query=$this->db->get();
        return $query->row();
    }
    // function ADD_NEW_DATA($table,$data){
    //     $this->db->insert($table, $data);
    //     $insert_id = $this->db->insert_id();
    //     return $insert_id;
    // }
    function UPDATE_FEATURED($id,$table,$status){
        $this->db->set('featured',$status);
        $this->db->where('id',$id);
        return $this->db->update($table);
    }
    function UPDATE_TO_NEW($id,$table,$status){
        $this->db->set('new',$status);
        $this->db->where('id',$id);
        return $this->db->update($table);
    }
    // function UPDATE_DATA($table,$data,$id){
    //     $this->db->where('id', $id);
    //     return $this->db->update($table, $data);
    // }
    // function GET_LIST_DATA($table){
    //     $this->db->select('*');
    //     $this->db->from($table);
    //     $this->db->order_by('id','ASC');
    //     $query = $this->db->get();
    //     return $query->result_object();
    // }
    
    function GET_LIST_ROW_DATA($table,$column,$id){
          $query = $this->db->select('*')
                  ->from($table)
                  ->where($column, $id)
                  ->get();
        return $query->result_object();
    }
    function GET_PRODUCT_TAX($id){
        $this->db->select('*');
        $this->db->from('tbl_product_taxes');
        $this->db->where('product_id',$id);
        $this->db->order_by('id','DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row();
    }
    // function DELETE_PRODUCT($id){
    //     $this->db->where('id', $id);
    //     return $this->db->delete('tbl_products');
    // }
    function GET_PRODUCT($id){
        $this->db->select('tb1.*,tb2.file_name as product_photo,tb3.file_name as product_thumbnail');
        $this->db->from('tbl_products as tb1');
        $this->db->where('tb1.id',$id);
        $this->db->join('tbl_uploads as tb2','tb1.photos=tb2.id','left');
        $this->db->join('tbl_uploads as tb3','tb1.thumbnail_img=tb3.id','left');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row();
    }
    function GET_STOCKS($id){
        $this->db->select('tb1.*,tb2.file_name,tb2.file_original_name,tb2.file_size,tb2.extension');
        $this->db->from('tbl_product_stocks as tb1');
        $this->db->join('tbl_uploads as tb2','tb1.image=tb2.id','left');
        $this->db->where('product_id',$id);
        $this->db->where('variant !=','');
        $query=$this->db->get();
        return $query->result();
    }
    function GET_ATTRIBUTE_VALUES($id){
        $this->db->select('id,value');
        $this->db->from('tbl_attribute_values');
        $this->db->where('attribute_id',$id);
        $query = $this->db->get();
        return $query->result_object();
    }
    // function GET_DATA($table,$id){
    //      $query = $this->db->select('*')
    //               ->from($table)
    //               ->where('id', $id)
    //               ->get();
    //     return $query->row();
    // }
    function GET_SLUG_NAME($slug){
        $query = $this->db->select('id,slug')
                  ->from('tbl_products')
                  ->like('slug', $slug)
                  ->order_by('slug','desc')
                  ->get();
        return $query->row();
    }
    function GET_NUM_ALL_PRODUCTS(){
        return $this->db->count_all('tbl_products');
    }
    // function ADD_BATCH_DATA($table_name,$data){
    //     return $this->db->insert_batch($table_name, $data);
    // }
    // function DESTROY_DATA($table,$column,$value){
    //     $this->db->where($column, $value);
    //     return $this->db->delete($table);
    // }
    
    
}