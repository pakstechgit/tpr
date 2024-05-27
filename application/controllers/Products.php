<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 

class Products extends CI_Controller
{
     function __construct()
    {
      parent::__construct();
      $this->load->model('modules/products_model');
      $this->load->helper('form');
      $this->load->library('session');
      $this->load->library('Template');
      $this->load->library('Technos_encryption');
    }

    public function index(){
        $data['C_PRODUCTS'] =   $this->products_model->GET_PRODUCTS_LISTS();
    
        $this->load->view('modules/products/product_lists_views',$data);
    }
    
    function shop($slug){
        $product=$this->products_model->GET_PRODUCT_INFO_BY_SLUG(urldecode($slug));
        if(!$product){
          show_error('No Product Found', 204, $heading = 'An Error Was Encountered');
        }
        $options=$product->choice_options;
        $options=json_decode($options);
        $data['slug']   = $slug;
        // echo '<pre>';
        // var_dump($product);
        // return;
        $data['OPTIONS']=$options;
        $data['PRODUCT']=$product;
        $data['PRODUCT_STOCKS_IMAGES']=$this->products_model->GET_PRODUCTS_IMAGES($product->id);
        // echo '<pre>';
        // var_dump($data['PRODUCT_STOCKS_IMAGES']);
        // return;
        $this->template->load('templates/views_layout', 'client_page/shop_product_views',$data);
    }
    function get_product_variant(){
        $input_data=$this->input->post();
        $product_stock=$this->products_model->GET_PRODUCT_STOCK_VARIANTS($input_data['variant'],$input_data['product_id']);
        echo json_encode($product_stock);
    }
    function search(){
        $this->template->load('templates/views_layout', 'client_page/search_result_views');
    }
    function purchase(){
        $user_id    = $this->session->userdata('SESS_USER_ID');
        $input_data = $this->input->post();
        $product    = $this->products_model->GET_PRODUCT_BY_SLUG($input_data['slug']);
        $color      = isset($input_data['color'])? $input_data['color'] : NULL;
        if(!$product){
          show_error('No Product Found', '404', $heading = 'An Error Was Encountered');
        }
        $variants       = isset($input_data['variants']) ? $input_data['variants'] : array();
        $combine_name   = $color ? $color : '';
        foreach($variants as $key => $variant){
            $variant=str_replace(' ', '',$variant);
            $combine_name.='-'.$variant;
        }
        $combine_name       = ltrim($combine_name, '-');
        $stocks             = $this->products_model->GET_PRODUCT_STOCKS($product->id,$combine_name);
        $grand_total        = $stocks->price*$input_data['qty'];
        
        $shipping_add       = $this->products_model->GET_USER_SHIPPING_ADD($user_id);
        $order              = array();
        $combined_order     = array();
        $order_details      = array();
        $combined_order['user_id']          = $user_id;
        $combined_order['shipping_address'] = $shipping_add ? json_encode($shipping_add) : '';
        $combined_order['grand_total']      = $grand_total;
        $combined_order_id                  = 1;
        $order_id                           = 1;
        if($combined_order_id){
            $order['combined_order_id'] = $combined_order_id;
            $order['user_id']           = $user_id;
            $order['shipping_address']  = $shipping_add ? json_encode($shipping_add) : '';
            $order['shipping_type']     = 'home_delivery';
            $order['pickup_point_id']   = '1';
            $order['payment_type']      = 'paypal';
            $order['payment_status']    = 'unpaid';
            $order['grand_total']       = $grand_total;
            $order['code']              = date('Ymdhis').$this->generateNumericCode();
            $order['date']              = strtotime(date('Y-m-d H:i:s'));
            $order['viewed']            = 0;
            
        }
        if($order_id){
            $variants['name']                   = $product->name;
            $order_details['order_id']          = $order_id;
            $order_details['product_id']        = $product->id;
            $order_details['variation']         = $combine_name;
            $order_details['details']           = $variants? json_encode($variants) : '';
            $order_details['price']             = $stocks->price;
            $order_details['quantity']          = $input_data['qty'];
            $order_details['payment_status']    = 'unpaid';
            $order_details['delivery_status']   = 'pending';
            $order_details['shipping_type']     = 'home_delivery';
        }
        echo '<pre>';
        var_dump($order_details);
        
    }
    private function generateNumericCode($length = 12) {
        $numbers = '0123456789';
        $code = '';
    
        for ($i = 0; $i < $length; $i++) {
            $code .= $numbers[rand(0, strlen($numbers) - 1)];
        }
    
        return $code;
    }
    function featured_products(){
        $feat_category          = $this->input->get('category');
        $data['FEATURE_CAT']    = $this->products_model->GET_FEATURED_CATEGORIES(); 
        $products               = $this->products_model->GET_FEATURED_PRODUCT_LIST($featured);
        $product_data           = array();
        // foreach($products as $product){
        //     if()
        // }
        // echo '<pre>';
        if(!$feat_category){
            $index=0;
            foreach($data['FEATURE_CAT'] as $category){
                $product_data[$index]['category']=$category->name;
                $product_data[$index]['products']=$this->products_model->GET_FEATURED_PRODUCT_LIST($category->id);
                $index++;
            }
        }else{
            $index=0;
            foreach($data['FEATURE_CAT'] as $category){
                if($category->id==$feat_category){
                    $product_data[$index]['category']=$category->name;
                    $product_data[$index]['products']=$this->products_model->GET_FEATURED_PRODUCT_LIST($category->id);
                    $index++;
                }
            } 
        }
        $data['PRODUCTS']=$product_data;
        $this->template->load('templates/client_template', 'client_page/featured_products_views',$data);
    }
    function disposables(){
        $this->template->load('templates/client_template', 'client_page/disposable_products_views');
    }
    function product_informations(){
        $page=$this->input->get('name');
        if($page=='sharp_container'){
            $this->template->load('templates/views_layout', 'client_page/product_information_views');
            return;
        }
        if($page=='pads'){
             $this->template->load('templates/views_layout', 'client_page/product_pads_views');
             return;
        }
        $this->template->load('templates/views_layout', 'client_page/product_bandages_information_views');
       
    }
    function item($slug){
        $product=$this->products_model->GET_PRODUCT_INFO_BY_SLUG(urldecode($slug));
        if(!$product){
          show_error('No Product Found', 204, $heading = 'An Error Was Encountered');
        }
        $options=$product->choice_options;
        $options=json_decode($options);
        $data['slug']   = $slug;
        
        $data['OPTIONS']        = $options;
        $data['PRODUCT']        = $product;
        $data['UNIT_OPTIONS']   = $this->products_model->GET_ITEM_OPTIONS(json_decode($product->item_options));
        $data['PRODUCT_STOCKS'] = $this->products_model->GET_STOCKS($product->id);
        $data['PRODUCT_STOCKS_IMAGES']=$this->products_model->GET_PRODUCTS_IMAGES($product->id);
        $data['ITEM_MARKET_SEGMENTS']    = $this->products_model->GET_ITEM_MARKET_SEGMENTS(json_decode($product->market_segment_id));
        // echo '<pre>';
        // // var_dump($data['UNIT_OPTIONS']);
        // var_dump($data['ITEM_MARKET_SEGMENTS']);
        // return;
        $this->template->load('templates/client_template', 'client_page/product_item_views',$data);
    }
    function add_to_cart(){
        $user_id        = $this->session->userdata('SESS_USER_ID');
        // if(!$user_id){

        // }
        $input_data             = $this->input->post();
        $product_id             = $this->technos_encryption->decryptData($input_data['product_id']);
        $product                = $this->products_model->GET_DATA_ROW('tbl_products','id',$product_id);
        // $product_unit_options   = json_decode($product->item_option_values) && is_array(json_decode($product->item_option_values)) ? json_decode($product->item_option_values) : array();

        $qty                    = $input_data['qty'];
        $variant                = $input_data['variant'];
        $stocks                 = $this->products_model->GET_ITEM_STOCK($variant,$product_id);
        $product_unit_options   = json_decode($stocks->unit_options) && is_array(json_decode($stocks->unit_options)) ? json_decode($stocks->unit_options) : array();
        $qty_unit_option        = array();
        $price                  = 0;
        // if(!json_decode($stocks->unit_options) || !is_array(json_decode($stocks->unit_options))){
            for($i=0;$i<count($qty);$i++){
                foreach($product_unit_options as $product_option){
                    if($product_option->name==$qty[$i]['unit']){
                        $qty[$i]['price']=$product_option->price;
                        $price+=floatval($qty[$i]['quantity'])*floatval($product_option->price);
                        $qty[$i]['total_quantity']=$qty[$i]['quantity']*$product_option->pieces;
                        break;
                    }
                }
            }
        // }
        // $price          = $stocks->price*$qty;
        // echo '<pre>';
        // var_dump($stocks);
        // // echo $price;
        // return;
        $product_data['user_id']        = $user_id;
        $product_data['product_id']     = $product_id;
        $product_data['price']          = $price;
        $product_data['variation']      = $variant;
        $product_data['item_number']    = $stocks->item_number;
        $product_data['quantity']       = json_encode($qty);
        $product_data['image']          = $stocks->image;
        $is_added=false;
        // var_dump($stocks);
        $check_cart                     = $this->products_model->GET_ITEM_CART($user_id,$variant,$product_id);
        if($check_cart){
            $res                = $this->products_model->UPDATE_ITEM_CART_DATA($product_data,$variant,$product_id,$user_id);
            echo 1;
            // echo 'aaaa';
        }else{
            $new_stock_id       = $this->products_model->ADD_ROW_DATA('tbl_carts',$product_data);
            echo 1;
            // echo 'sssa';
        }
        
    }
    function customize_kit(){
        $this->template->load('templates/client_template', 'client_page/product_list_views.php');
    }
    function carts(){
        $this->session->unset_userdata('cart_id');
        $user_id            = $this->session->userdata('SESS_USER_ID');
        $data['PRODUCTS']   = $this->products_model->GET_PRODUCT_IN_CARTS($user_id);    
        // echo '<pre>';
        // var_dump($data['PRODUCTS']);
        // return;
        $this->template->load('templates/client_template', 'client_page/my_cart_views',$data);
    }
    function add_checkout(){
        $input_data = $this->input->post();
        if(!isset($input_data['cart_id'])){
            echo json_encode(array());
            return;
        }
        $carts      = $this->products_model->GET_PRODUCT_IN_CARTS_BY_IDS($input_data['cart_id']);
        
        echo json_encode($carts);
    }
    function process_checkout(){
        $user_id                = $this->session->userdata('SESS_USER_ID');
        $input_data             = $this->input->post();
        $session_cart           = $this->session->userdata('cart_id');
        if(!$input_data && !$session_cart){
            redirect('products/carts');
        }
        if(isset($input_data['cart_id'])){
            $this->session->set_userdata('cart_id', $input_data['cart_id']);
        }
        
        $session_cart           = $this->session->userdata('cart_id');
        $check_out_product_id   = explode(',',$session_cart);
        $products               = $this->products_model->GET_CHECKOUT_PRODUCTS($user_id,$check_out_product_id);
        $product_summary_info   = $this->products_model->GET_CHECKOUT_PRODUCTS_INFO($user_id,$check_out_product_id);
        // echo '<pre>';
        // var_dump($product_summary_info);
        // return;
        $this->session->set_userdata('checkout_product', $products);
        $this->session->set_userdata('checkout_product_info', $product_summary_info);
        redirect('products/checkout');
    }
    function checkout(){
        $data['PRODUCTS']       = $this->session->userdata('checkout_product');
        $data['CHECKOUT_INFO']  = $this->session->userdata('checkout_product_info');
        // echo '<pre>';
        // var_dump($data);
        // return;
        $this->template->load('templates/client_template', 'client_page/checkout_views',$data);
    }
    function place_order(){
        $user_id                = $this->session->userdata('SESS_USER_ID');
        $input_data=$this->input->post();
        $products               = $this->session->userdata('checkout_product');
        $checkout_info          = $this->session->userdata('checkout_product_info');
        $cart_products          = array();
        // echo '<pre>';
        // echo json_encode($input_data);
        $combined_order=array();
        $combined_order['shipping_address'] = json_encode($input_data['shipping_address']);
        $combined_order['billing_address']  = json_encode($input_data['billing_address']);
        $combined_order['grand_total']      = $checkout_info->total_price;
        $combined_order['created_at']       = date('Y-m-d H:i:s');
        $combined_order['updated_at']       = date('Y-m-d H:i:s');
        $combined_order_id= $this->products_model->ADD_ROW_DATA('tbl_combined_orders',$combined_order);
        // var_dump($combined_order);
        // $combined_order_id=1;
        if($combined_order_id){
            $order=array();
            $order['combined_order_id']     = $combined_order_id;
            $order['user_id']               = $user_id;
            $order['shipping_address']      =  $combined_order['shipping_address'];
            $order['shipping_type']         = 'home_delivery';
            $order['pickup_point_id']       = 0;
            $order['delivery_status']       = 'pending'; 
            $order['payment_type']          = 'cash_on_delivery';
            $order['payment_status']        = 'unpaid';
            $order['grand_total']           = $combined_order['grand_total'];
            $order['code']                  = date('Ymdhis').$this->generateNumericCode().$user_id;
            $order['date']                  = strtotime(date('Y-m-d H:i:s'));
            $order['created_at']            = date('Y-m-d H:i:s');
            $order['updated_at']            = date('Y-m-d H:i:s');
            
            $order_id                       = $this->products_model->ADD_ROW_DATA('tbl_orders',$order);
            // $order_id=4;
            // echo '<pre>';
            
            if($order_id){
                $order_details=array();
                
                foreach($products as $item){
                    $cart_products[]=$item->id;
                    $item_details['order_id']      = $order_id;
                    $item_details['product_id']    = $item->product_id;
                    $item_details['variation']     = $item->variation;
                    $item_details['price']         = $item->price;
                    $item_details['quantity']               = 0;
                    $item_details['quantity_details']       = $item->quantity ;
                    $item_details['payment_status']         = 'unpaid';
                    $item_details['delivery_status']        = 'pending';
                    $item_details['shipping_type']          = 'home_delivery';
                    $item_details['created_at']             = date('Y-m-d H:i:s');
                    $item_details['updated_at']             = date('Y-m-d H:i:s');
                    $quantities=   $item->quantity && is_array(json_decode($item->quantity))? json_decode($item->quantity) : array();
                    foreach($quantities as $quantity){
                        $item_details['quantity']+=$quantity->total_quantity;
                    }
                    // var_dump($quantities);
                    $order_details[]=$item_details;
                }
                $order_details_id                       = $this->products_model->ADD_BATCH_DATA('tbl_order_details',$order_details);
                // $order_details_id=1;
                if($order_details_id){
                    // echo '<pre>';
                    // var_dump($order_details);
                    foreach($order_details as $order_detail){
                        $stock=$this->products_model->GET_ITEM_STOCK($order_detail['variation'],$order_detail['product_id']);
                        // echo $order_detail['quantity'];
                        $new_qty=$stock->qty-$order_detail['quantity'];
                        // echo '<pre>';
                        // var_dump($stock);
                        $res_stocks=$this->products_model->UPDATE_STOCKS($new_qty,$stock->variant,$stock->product_id);
                        
                        // var_dump($stock);
                    }
                }
            }
            if($res_stocks){

                $this->session->set_flashdata('order_code',$order['code']);
                $this->products_model->DELETE_USER_CART($cart_products);
                redirect('products/place_order_success');
            }
        }
        
        
    }
    function place_order_success(){
        $this->template->load('templates/client_template', 'client_page/order_placed_views');
    }
    function new_products(){
        $this->template->load('templates/client_template', 'client_page/new_product_views.php');
    }
    function durables(){
        $this->template->load('templates/client_template', 'client_page/durable_medical_equipment_views.php');
    }

    


}