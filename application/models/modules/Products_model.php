<?php
class products_model extends CI_Model
{
    function GET_PRODUCT_IN_CARTS($user_id){
        $this->db->select('tb1.id,tb1.product_id,tb2.slug,tb1.variation,tb2.name,tb1.quantity,tb3.file_name,tb1.item_number,tb1.price');
        $this->db->from('tbl_carts as tb1');
        $this->db->where('tb1.user_id',$user_id);
        $this->db->join('tbl_products as tb2','tb1.product_id=tb2.id','left');
        $this->db->join('tbl_uploads as tb3','tb1.image=tb3.id','left');
        $query=$this->db->get();
        return $query->result();
    }
    function GET_PRODUCT_IN_CARTS_BY_IDS($ids){
        $this->db->select('count(id) as items_count,SUM(price) as total_price',FALSE);
        $this->db->where_in('id',$ids);
        $query=$this->db->get('tbl_carts');
        return $query->row();
    }
    function GET_CHECKOUT_PRODUCTS($user_id,$cart_ids){
        $this->db->select('tb1.id,tb1.product_id,tb2.slug,tb1.variation,tb2.name,tb1.quantity,tb3.file_name,tb1.item_number,tb1.price');
        $this->db->from('tbl_carts as tb1');
        $this->db->where('tb1.user_id',$user_id);
        $this->db->where_in('tb1.id',$cart_ids);
        $this->db->join('tbl_products as tb2','tb1.product_id=tb2.id','left');
        $this->db->join('tbl_uploads as tb3','tb1.image=tb3.id','left');
        $query=$this->db->get();
        return $query->result();
    }
    function GET_CHECKOUT_PRODUCTS_INFO($user_id,$cart_ids){
        $this->db->select('count(id) as item_number,SUM(price) as total_price',FALSE);
        $this->db->where('user_id',$user_id);
        $this->db->where_in('id',$cart_ids);
        $query=$this->db->get('tbl_carts');
        return $query->row();
    }
    function GET_ITEM_STOCK($variant,$product_id){
        $this->db->where('product_id',$product_id);
        $this->db->where('variant',$variant);
        $query=$this->db->get('tbl_product_stocks');
        return $query->row();
    }
    function GET_ITEM_CART($user_id,$variant,$product_id){
        // $sql = "INSERT INTO tbl_business_settings (type, value) 
        // VALUES (?,?)
        // ON DUPLICATE KEY UPDATE value = ? ";
        // $query = $this->db->query($sql, array($data['type'],$data['value'],$data['value']));
        // return $query;
        $this->db->where('product_id',$product_id);
        $this->db->where('variation',$variant);
        $this->db->where('user_id',$user_id);
        $query=$this->db->get('tbl_carts');
        return $query->row();
    }
    function UPDATE_ITEM_CART_DATA($product_data,$variant,$product_id,$user_id){
        $this->db->where('product_id',$product_id);
        $this->db->where('variation',$variant);
        $this->db->where('user_id',$user_id);
        return $this->db->update('tbl_carts',$product_data);
    }
    function UPDATE_STOCKS($qty,$variant,$product_id){
        $this->db->set('qty',$qty);
        $this->db->where('variant',$variant);
        $this->db->where('product_id',$product_id);
        // $this->db->update('tbl_product_stocks');
        return $this->db->update('tbl_product_stocks');
    }
    function GET_PRODUCT_BY_SLUG($slug){
        $this->db->where('slug',$slug);
        $query=$this->db->get('tbl_products');
        return $query->row();
    }
    function GET_FEATURED_CATEGORIES(){
        $this->db->where('featured',1);
        $query=$this->db->get('tbl_categories');
        return $query->result();
    }
    function GET_ITEM_MARKET_SEGMENTS($market_segments){
        if(empty($market_segments)){
            return array();
        }
        $this->db->where_in('id',$market_segments);
        $query=$this->db->get('tbl_market_segments');
        return $query->result();
    }
    function GET_ITEM_OPTIONS($item_option){
        if(empty($item_option)){
            return array();
        }
        $this->db->where_in('id',$item_option);
        $this->db->order_by('level','asc');
        $query=$this->db->get('tbl_item_options');

        return $query->result();
    }
    function GET_FEATURED_PRODUCT_LIST($category_id){
        $this->db->select('tb1.id,tb1.name,tb1.unit_price,tb3.name as brand,tb1.category_id,tb2.name as category');
        $this->db->select('tb4.file_name as photo,tb5.file_name as thumbnail'); 
        $this->db->from('tbl_products as tb1');
        $this->db->join('tbl_categories as tb2','tb1.category_id=tb2.id','left');
        $this->db->join('tbl_brands as tb3','tb1.brand_id=tb3.id','left');
        $this->db->join('tbl_uploads as tb4','tb1.photos=tb4.id','left');
        $this->db->join('tbl_uploads as tb5','tb1.thumbnail_img=tb5.id','left');
        if($category_id){
            $this->db->where('tb1.category_id',$category_id);
        }
        $this->db->where('tb2.featured',1);
        $query=$this->db->get();
        return $query->result();
        // $this->db->join('tbl_categories tb2','tb1.category_id=tb2.id','left');
    }
    function GET_PRODUCTS_IMAGES($product_id){
        $this->db->select('tb1.id,tb1.item_number,tb1.variant,tb3.file_name');
        $this->db->from('tbl_product_stocks as tb1');
        $this->db->join('tbl_products as tb2','tb1.product_id=tb2.id','left');
        $this->db->join('tbl_uploads as tb3','tb1.image=tb3.id');
        $this->db->where('tb1.product_id',$product_id);
        $query=$this->db->get();
        return $query->result();
        
    }
    function GET_PRODUCTS_LISTS($limit,$offset){
        $this->db->select('tbl_products.id,tbl_products.name as name,tbl_uploads.file_name as thumbnail_img,
        tbl_users.name as added_by,rating,current_stock,num_of_sale,unit_price,todays_deal,featured,published,low_stock_quantity');
        $this->db->from('tbl_products');
        $this->db->join('tbl_users', 'tbl_products.user_id = tbl_users.id','left');
        $this->db->join('tbl_uploads','tbl_products.thumbnail_img=tbl_uploads.id','left');
        $this->db->limit($limit,$offset);
        $this->db->order_by('tbl_products.id','DESC');
        $query = $this->db->get();
        return $query->result_object();
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
    function ADD_NEW_DATA($table,$data){
        $this->db->insert($table, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    function UPDATE_DATA($table,$data,$id){
        $this->db->where('id', $id);
        return $this->db->update($table, $data);
    }
    // function GET_LIST_DATA($table){
    //     $this->db->select('*');
    //     $this->db->from($table);
    //     $this->db->order_by('id','ASC');
    //     $query = $this->db->get();
    //     return $query->result_object();
    // }
    function GET_PRODUCT_TAX($id){
        $this->db->select('*');
        $this->db->from('tbl_product_taxes');
        $this->db->where('product_id',$id);
        $this->db->order_by('id','DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row();
    }
    function DELETE_PRODUCT($id){
        $this->db->where('id', $id);
        return $this->db->delete('tbl_products');
    }
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
    function GET_PRODUCT_INFO_BY_SLUG($slug){
        $this->db->select('tb1.*,tb2.name as brand,tb3.file_name as main_image');
        $this->db->from('tbl_products as tb1');
        $this->db->join('tbl_brands as tb2','tb1.brand_id=tb2.id','left');
        $this->db->join('tbl_uploads as tb3','tb1.thumbnail_img=tb3.id');
        $this->db->where('tb1.slug',$slug);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row();
    }
    function GET_PRODUCT_STOCK_VARIANTS($variant,$product_id){
        $this->db->select('tb1.id,tb1.price,tb1.qty,tb2.file_name');
        $this->db->from('tbl_product_stocks as tb1');
        $this->db->join('tbl_uploads as tb2','tb1.image=tb2.id');
        $this->db->where('variant',$variant);
        $this->db->where('product_id',$product_id);
        $query=$this->db->get();
        return $query->row();
    }
    function GET_STOCKS($id){
        $this->db->where('product_id',$id);
        // $this->db->where('variant !=','');
        $query=$this->db->get('tbl_product_stocks');
        return $query->result();
    }
    function GET_PRODUCT_STOCKS($id,$variant){
        $this->db->where('product_id',$id);
        $this->db->like('variant',$variant);
        $query=$this->db->get('tbl_product_stocks');
        return $query->row();
    }
    function GET_ATTRIBUTE_VALUES($id){
        $this->db->select('id,value');
        $this->db->from('tbl_attribute_values');
        $this->db->where('attribute_id',$id);
        $query = $this->db->get();
        return $query->result_object();
    }
    function GET_ATTRIBUTE($id){
        $this->db->where('id',$id);
        $query=$this->db->get('tbl_attributes');
        return $query->row();
    }
    // function GET_DATA_ROW($table,$row,$item){
    //     $this->db->where($row,$item);
    //     $query=$this->db->get($table);
    //     return $query->row();
    // }
    function GET_NUM_ALL_PRODUCTS(){
        return $this->db->count_all('tbl_products');
    }
    function GET_USER_SHIPPING_ADD($user_id){
        $this->db->select('tb2.name,tb2.email,tb1.address,tb3.name as country,tb4.name as state,
        tb5.name as city,tb1.postal_code, tb1.phone');
        $this->db->from('tbl_addresses as tb1');
        $this->db->join('tbl_users as tb2','tb1.user_id=tb2.id','left');
        $this->db->join('tbl_countries as tb3','tb1.country_id=tb3.id','left');
        $this->db->join('tbl_states as tb4','tb1.state_id=tb4.id','left');
        $this->db->join('tbl_cities as tb5','tb1.city_id=tb5.id','left');
        $this->db->where('tb1.user_id',$user_id);
        $query=$this->db->get();
        return $query->row();
        
    }
    function DELETE_USER_CART($cart_ids){
        $this->db->where_in('id',$cart_ids);
        return $this->db->delete('tbl_carts');
    }
    // function ADD_BATCH_DATA($table_name,$data){
    //     return $this->db->insert_batch($table_name, $data);
    // }
    // function DESTROY_DATA($table,$column,$value){
    //     $this->db->where($column, $value);
    //     return $this->db->delete($table);
    // }
    
}