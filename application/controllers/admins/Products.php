<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 
// admin
class Products extends CI_Controller
{
    private $first_link = "<< ";
    private $last_link = " >>";
    private $next_link = " >";
    private $prev_link = "< ";
    private $pagination_config;
    function __construct(){
        parent::__construct();
        $this->load->model('modules/admin/admin_product_model');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Template');
        $this->load->library('pagination');
        $this->load->library('session');
        
        $this->pagination_config['attributes']       = ['class' => 'page-link'];
        $this->pagination_config['full_tag_open']    = '<nav><ul class="pagination">';
        $this->pagination_config['full_tag_close']   = '</ul></nav>';
        $this->pagination_config['cur_tag_open']     ='<li class="page-item active" aria-current="page"><a class="page-link" >';
        $this->pagination_config['prev_tag_open']    = '<li class="page-item">';
        $this->pagination_config['cur_tag_close']    = '</a></li>';
        $this->pagination_config['prev_tag_close']   = '</li>';
        $this->pagination_config['first_link']       = $this->first_link;
        $this->pagination_config['last_link']        = $this->last_link;
        $this->pagination_config['next_link']        = $this->next_link;
        $this->pagination_config['prev_link']        = $this->prev_link;
        $this->pagination_config['per_page']         = 10;
        $this->pagination_config['query_string_segment'] = 'page';
        $this->pagination_config['page_query_string']         = TRUE;
        $this->pagination_config['use_page_numbers'] = TRUE;
        $user_id                                     = $this->session->userdata('SESS_USER_ID');
        if(!$user_id){
            redirect('login/admin');
        }
        if($user_id){
            $user                                    = $this->admin_product_model->GET_USER($user_id);
            if($user->user_type=='customer'){
                redirect('users/profile');
                return;
            }
        }
    }
    function index(){
        
        $this->pagination_config['base_url']         = base_url('admins/products');
        $page                       = $this->input->get('page') ? ($this->input->get('page')-1)*$this->pagination_config['per_page'] : 0 ;
        $data['PRODUCTS']           = $this->admin_product_model-> GET_PRODUCTS_LISTS($this->pagination_config['per_page'], $page);
        $this->pagination_config['total_rows']       = $this->admin_product_model->GET_NUM_ALL_PRODUCTS();
        // Initialize the pagination library
        $this->pagination->initialize($this->pagination_config);
        $data['links'] = $this->pagination->create_links();
        for($i=0;$i<count($data['PRODUCTS']);$i=$i+1){
            $data['PRODUCTS'][$i]->product_variants=$this->admin_product_model->GET_STOCKS($data['PRODUCTS'][$i]->id);
        }
        
        // echo '<pre>';
        // var_dump($data['PRODUCTS']);
        // return;
        $this->template->load('templates/admin_layout', 'modules/admin/product_lists_views',$data);
    }
    function create(){
        $data['CATEGORIES']         = $this->admin_product_model->GET_LIST_DATA('tbl_categories');
        $data['BRANDS']             = $this->admin_product_model->GET_LIST_DATA('tbl_brands');
        $data['MARKET_SEGMENTS']    = $this->admin_product_model->GET_LIST_DATA('tbl_market_segments'); 
        $data['COLORS']             = $this->admin_product_model->GET_LIST_DATA('tbl_colors');
        $data['MATERIALS']          = $this->admin_product_model->GET_LIST_DATA('tbl_materials');
        $data['ATTRIBUTES']         = $this->admin_product_model->GET_LIST_DATA('tbl_attributes');
        $data['ITEM_OPTIONS']       = $this->admin_product_model->GET_LIST_DATA('tbl_item_options');
        
        $this->template->load('templates/admin_layout', 'modules/admin/add_new_product_views',$data);
    }
    function save(){
            $input_data             = $this->input->post();
            
            $slug       =  strtolower(str_replace(' ', '-', $input_data['name']));
            $product_slug   =  $this->admin_product_model->GET_SLUG_NAME($slug) ;
            $temp_slug      =  $product_slug ? $product_slug->slug : $slug; 
            // Extract the numeric part from the original string
            preg_match('/(\d+)$/', $temp_slug, $matches);
            $currentNumber = isset($matches[1]) ? intval($matches[1]) : 1;
            
            // Increment the number
            $newNumber = $currentNumber + 1;
            
            // Construct the new string
            $slug = $slug.'-'.$newNumber;
            
            // echo $slug.'-'.$currentNumber.'<br>';
            // echo $newString;
            // return;
            $input_data['slug']=$slug;
            // echo '<pre>';
            // var_dump($input_data['slug']);
            // return; 
            $input_data['market_segment_id'] = isset($input_data['market_segment_id'])? json_encode($input_data['market_segment_id']) :'[]';             
            $input_data['tags']           = empty($input_data['tags'][0])? '' : json_encode($input_data['tags']);
            $input_data['colors']         = isset($input_data['colors'])? json_encode($input_data['colors']):'[]';
            $input_data['item_options']   = isset($input_data['item_options'])? json_encode($input_data['item_options']):'[]';
            $input_data['item_option_values']   = isset($input_data['item_option_values'])? json_encode($input_data['item_option_values']):'[]';
            $input_data['category_id']   = isset($input_data['category_id'])? json_encode($input_data['category_id']):'[]';
            $date_range             = !empty($input_data['date_range'])? explode("to",$input_data['date_range']): false;
            $arr_tags               = !empty($input_data['tags'][0]) ? json_decode($input_data['tags']) : array();
            $arr_tags               = count($arr_tags)>0 ? json_decode($arr_tags[0])  : array();
            $tags                   = array_map(function($tag){
                return $tag->value;
            },$arr_tags);
            if($date_range){
                $input_data['discount_start_date']  = strtotime($date_range[0]);
                $input_data['discount_end_date']    = strtotime($date_range[1]);
            }
            
            // echo '<pre>';
            // var_dump( $input_data);
            // return;
            
            $string_tags            = implode(',',$tags);
            $input_data['tags']     = $string_tags;
            $product_input          = $input_data;
            unset($product_input['sku'],$product_input['button'],$product_input['choice'], $product_input['tax_id'], 
            $product_input['tax'],$product_input['tax_type'], $product_input['flash_deal_id'], 
            $product_input['flash_discount'], $product_input['date_range'],$product_input['files'],
            $product_input['flash_discount_type'],
            $product_input['flat_shipping_cost'],$product_input['colors_active'],$product_input['colors_active']);
            $product_tax                    = array_intersect_key($input_data, array_flip(['tax_id', 'tax', 'tax_type', 'product_id']));
            $flash_deal_input               = array_intersect_key($input_data, array_flip(['flash_deal_id', 'flash_discount', 'flash_discount_type']));
            $product_input['user_id']   = $this->session->userdata('SESS_USER_ID');
            $product_input['choice_options']=array();
            if(isset($product_input['choice_no'])){
                $product_input['attributes']=json_encode($product_input['choice_no']);
                $i=0;
                foreach($product_input['choice_no'] as $num){
                    // echo json_encode($product_input['choice_options_'.$num]);
                     $product_input['choice_options'][$i]["attribute_id"]=$num;
                     foreach($product_input['choice_options_'.$num] as $attr){
                         $product_input['choice_options'][$i]["values"][]=$attr;
                     }
                     $i=$i+1;
                     unset($product_input['choice_options_'.$num]);
                }
                $product_input['variant_product']=1;
                unset( $product_input['choice_attributes'],$product_input['choice_no']);
            }
            
            $product_input['choice_options']=json_encode($product_input['choice_options']);
            $validKeys = [ 'name', 'added_by', 'user_id', 'category_id', 'brand_id', 'photos', 
            'thumbnail_img', 'video_provider', 'video_link', 'tags', 'description', 'unit_price',
            'purchase_price', 'variant_product', 'attributes', 'choice_options', 'colors',
            'variations', 'todays_deal', 'published', 'approved', 'stock_visibility_state', 'cash_on_delivery',
            'featured', 'seller_featured', 'current_stock', 'unit', 'weight', 'min_qty', 'low_stock_quantity',
            'discount', 'discount_type', 'discount_start_date', 'discount_end_date', 'tax', 'tax_type',
            'shipping_type', 'shipping_cost', 'is_quantity_multiplied', 'est_shipping_days', 'num_of_sale',
            'meta_title', 'meta_description', 'meta_img', 'pdf', 'slug', 'rating', 'barcode', 'digital',
            'auction_product', 'file_name', 'file_path', 'external_link', 'external_link_btn',
            'item_options','market_segment_id','item_number', 'wholesale_product', 'item_option_values','card_description'];
            $valid_data     = array_intersect_key($product_input, array_flip($validKeys));
            $invalid_data   = array_diff_key($product_input, array_flip($validKeys));
            $product_to_stock=array();
            
            $product_id=  $this->admin_product_model->ADD_ROW_DATA('tbl_products',$valid_data);
            if($product_id){
                if(isset($invalid_data['variant_stock'])){
                    for($i=0;$i<count($invalid_data['variant_stock']);$i=$i+1){
                        $invalid_data['variant_stock'][$i]['product_id']=$product_id;
                         $invalid_data['variant_stock'][$i]['unit_options']=isset($invalid_data['variant_stock'][$i]['unit_options'])? json_encode($invalid_data['variant_stock'][$i]['unit_options']) : '[]';
                    }
                    $new_stock_id=$this->admin_product_model->ADD_BATCH_DATA('tbl_product_stocks', $invalid_data['variant_stock']);
                }
                if($product_id && !isset($invalid_data['variant_stock'])){
                    $stock=array();
                    $stock[]=array('product_id'=>$product_id,'price'=>$valid_data['unit_price'],'unit_options'=>$valid_data['item_option_values'],'image'=>$valid_data['photos'],'qty'=>$valid_data['current_stock'],'item_number'=>$valid_data['item_number']);
                    $new_stock_id=$this->admin_product_model->ADD_BATCH_DATA('tbl_product_stocks', $stock);
                }
            }
            // return;
            if($input_data['tax_id']){
                $product_tax['product_id']=$product_id;
                $product_tax_id=  $this->admin_product_model->ADD_NEW_DATA('tbl_product_taxes',$product_tax);
            }
            if(!empty( $flash_deal['flash_deal_id'])){
                 $flash_deal['product_id']=$product_id;
                 $flash_deal_id=  $this->admin_product_model->ADD_NEW_DATA('tbl_flash_deal_products',$flash_deal);
            }
            redirect('admins/products');
            
        }
    function edit($id){
        $data['PRODUCT']          = $this->admin_product_model->GET_PRODUCT($id);
        $data['CATEGORIES']       = $this->admin_product_model->GET_LIST_DATA('tbl_categories');
        $data['BRANDS']           = $this->admin_product_model->GET_LIST_DATA('tbl_brands');
        $data['COLORS']           = $this->admin_product_model->GET_LIST_DATA('tbl_colors');
        $data['MARKET_SEGMENTS']    = $this->admin_product_model->GET_LIST_DATA('tbl_market_segments');
        $data['PRODUCT_TAX']      = $this->admin_product_model->GET_PRODUCT_TAX($id);
        $data['ATTRIBUTES']         = $this->admin_product_model->GET_LIST_DATA('tbl_attributes');
        $data['ITEM_OPTIONS']       = $this->admin_product_model->GET_LIST_DATA('tbl_item_options');
        $data['PRODUCT']->product_variants=$this->admin_product_model->GET_STOCKS($id);
        $data['UNIT_OPTIONS']       = $this->admin_product_model->GET_ITEM_OPTIONS(json_decode($data['PRODUCT']->item_options));
        // echo '<pre>';
        //     var_dump($data['UNIT_OPTIONS']);
        // return;
        // if($data['C_PRODUCT']->digital==0){
        //     $this->load->view('modules/products/edit_product_views',$data);
        //     return;
        // }
        $this->template->load('templates/admin_layout', 'modules/admin/edit_product_views',$data);
    }
    private function  slug_name($slug){
        $product_slug   =  $this->admin_product_model->GET_SLUG_NAME($slug) ;
        echo '<pre>';
        // var_dump($product_slug);
        $temp_slug      =  $product_slug ? $product_slug->slug : $slug; 
        $matches=array();
        // Extract the numeric part from the original string
        preg_match('/(\d+)$/', $temp_slug, $matches);
        $currentNumber = isset($matches[1]) ? intval($matches[1]) : 1;
        $newNumber = $currentNumber + 1;
        $slug = $slug.'-'.$newNumber;
        return $slug;
    }
    function update($id){
            $input_data             = $this->input->post();
            $slug               =  strtolower(str_replace(' ', '-', $input_data['name']));
            $product_slug       = $this->admin_product_model->GET_DATA_ROW('tbl_products','id',$id);
            if($product_slug && preg_match('/'.$slug.'/',$product_slug->slug)===1){
                $slug=$product_slug->slug;
            }else{
                $slug=$this->slug_name($slug);
            }
            
            $input_data['slug']=$slug;
            $input_data['market_segment_id'] = isset($input_data['market_segment_id'])? json_encode($input_data['market_segment_id']) :'[]'; 
            $input_data['tags']     = empty($input_data['tags'][0])? '' : json_encode($input_data['tags']);
            $input_data['colors']   = isset($input_data['colors'])? json_encode($input_data['colors']):'[]';
            $input_data['item_options']   = isset($input_data['item_options'])? json_encode($input_data['item_options']):'[]';
            $input_data['item_option_values']   = isset($input_data['item_option_values'])? json_encode($input_data['item_option_values']):'[]';
            $input_data['category_id']   = isset($input_data['category_id'])? json_encode($input_data['category_id']):'[]';
            $date_range             = !empty($input_data['date_range'])? explode("to",$input_data['date_range']): false;
            $arr_tags               = !empty($input_data['tags'][0]) ? json_decode($input_data['tags']) : array();
            $arr_tags               = count($arr_tags)>0 ? json_decode($arr_tags[0])  : array();
            $tags                   = array_map(function($tag){
                return $tag->value;
            },$arr_tags);
            if($date_range){
                $input_data['discount_start_date']  = strtotime($date_range[0]);
                $input_data['discount_end_date']    = strtotime($date_range[1]);
            }
            // echo '<pre>';
            // var_dump( $input_data);
            // return;
            
            $string_tags            = implode(',',$tags);
            $input_data['tags']     = $string_tags;
            $product_input          = $input_data;
            unset($product_input['sku'],$product_input['button'],$product_input['choice'], $product_input['tax_id'], 
            $product_input['tax'],$product_input['tax_type'], $product_input['flash_deal_id'], 
            $product_input['flash_discount'], $product_input['date_range'],$product_input['files'],
            $product_input['flash_discount_type'],
            $product_input['flat_shipping_cost'],$product_input['colors_active'],$product_input['colors_active']);
            $product_tax                    = array_intersect_key($input_data, array_flip(['tax_id', 'tax', 'tax_type', 'product_id']));
            $flash_deal_input               = array_intersect_key($input_data, array_flip(['flash_deal_id', 'flash_discount', 'flash_discount_type']));
            $product_input['user_id']   = $this->session->userdata('SESS_USER_ID');
            $product_input['choice_options']=array();
            if(isset($product_input['choice_no'])){
                $product_input['attributes']=json_encode($product_input['choice_no']);
                $i=0;
                foreach($product_input['choice_no'] as $num){
                    // echo json_encode($product_input['choice_options_'.$num]);
                     $product_input['choice_options'][$i]["attribute_id"]=$num;
                     foreach($product_input['choice_options_'.$num] as $attr){
                         $product_input['choice_options'][$i]["values"][]=$attr;
                     }
                     $i=$i+1;
                     unset($product_input['choice_options_'.$num]);
                }
                $product_input['variant_product']=1;
                unset( $product_input['choice_attributes'],$product_input['choice_no']);
            }
            
            $product_input['choice_options']=json_encode($product_input['choice_options']);
            $validKeys = [ 'name', 'added_by', 'user_id', 'category_id', 'brand_id', 'photos', 
            'thumbnail_img', 'video_provider', 'video_link', 'tags', 'description', 'unit_price',
            'purchase_price', 'variant_product', 'attributes', 'choice_options', 'colors',
            'variations', 'todays_deal', 'published', 'approved', 'stock_visibility_state', 'cash_on_delivery',
            'featured', 'seller_featured', 'current_stock', 'unit', 'weight', 'min_qty', 'low_stock_quantity',
            'discount', 'discount_type', 'discount_start_date', 'discount_end_date', 'tax', 'tax_type',
            'shipping_type', 'shipping_cost', 'is_quantity_multiplied', 'est_shipping_days', 'num_of_sale',
            'meta_title', 'meta_description', 'meta_img', 'pdf', 'slug', 'rating', 'barcode', 'digital',
            'auction_product', 'file_name', 'file_path', 'external_link', 'external_link_btn','item_options',
            'market_segment_id','item_number', 'wholesale_product', 'item_option_values','card_description',
            ];
            $valid_data     = array_intersect_key($product_input, array_flip($validKeys));
            $invalid_data   = array_diff_key($product_input, array_flip($validKeys));
            $product_to_stock=array();
            $res=$this->admin_product_model->UPDATE_ROW_DATA('tbl_products',$valid_data,'id', $id);
            if($res){
                $is_deleted=$this->admin_product_model->DESTROY_ROW_DATA('tbl_product_stocks','product_id',$id);
                // echo '<pre>';
                // echo 'here';
                // var_dump($invalid_data['variant_stock']['unit_options']);
                // return;
                if($is_deleted && isset($invalid_data['variant_stock'])){
                    // for($i=0;$i<count($invalid_data['variant_stock']);$i=$i+1){
                    //     $invalid_data['variant_stock'][$i]['product_id']=$product_id;
                    // }
                    for($i=0;$i<count($invalid_data['variant_stock']);$i++){
                        $invalid_data['variant_stock'][$i]['unit_options']= isset($invalid_data['variant_stock'][$i]['unit_options'])? json_encode($invalid_data['variant_stock'][$i]['unit_options']) : '[]';
                    }
                    // $invalid_data['variant_stock']['unit_options'] = isset($invalid_data['variant_stock']['unit_options'])? json_encode($invalid_data['variant_stock']['unit_options']) : '[]';
                    $new_stock_id=$this->admin_product_model->ADD_BATCH_DATA('tbl_product_stocks', $invalid_data['variant_stock']);
                }
                if($is_deleted && !isset($invalid_data['variant_stock'] )){
                    $stock=array();
                    $stock[]=array('product_id'=>$id,'price'=>$valid_data['unit_price'],'unit_options'=>$valid_data['item_option_values'],'image'=>$valid_data['photos'],'qty'=>$valid_data['current_stock'],'item_number'=>$valid_data['item_number']);
                    $new_stock_id=$this->admin_product_model->ADD_BATCH_DATA('tbl_product_stocks', $stock);
                }
            }
            // if($input_data['tax_id']){
            //     $product_tax['product_id']=$product_id;
            //     $product_tax_id=  $this->admin_product_model->ADD_NEW_DATA('tbl_product_taxes',$product_tax);
            // }
            // if(!empty( $flash_deal['flash_deal_id'])){
            //      $flash_deal['product_id']=$product_id;
            //      $flash_deal_id=  $this->admin_product_model->ADD_NEW_DATA('tbl_flash_deal_products',$flash_deal);
            // }
            redirect('admins/products');
            
        }
    function add_more_choice_option(){
            $attribute_id=$this->input->post('attribute_id');
            $attribute_values=$this->admin_product_model->GET_LIST_ROW_DATA('tbl_attribute_values','attribute_id',$attribute_id);
            $product_attr=$this->input->post('product_attr')?$this->input->post('product_attr'): array();
            $html = '';
            // Loop through the attribute values and append to the html variable
            foreach ($attribute_values as $row) {
              $html .= '<option value="' . $row->value . '"' . (in_array($row->value, $product_attr) ? ' selected' : '') . '>' . $row->value . '</option>';
            }
            
            // Echo the html variable
           echo json_encode($html);
        }
    function sku_combination(){
        $input_data=$this->input->post();
        if(isset($input_data['item_options'])){
            $data['item_options']   = $this->admin_product_model->GET_ITEM_OPTIONS($input_data['item_options']);
        }
        else{
            $data['item_options']=array();
        }
        $options = array();
        if ($this->input->post('colors_active') && $this->input->post('colors') && count($this->input->post('colors')) > 0) {
          // Set the colors_active variable to 1
          $color_array=$this->input->post('colors');
          $colors_active = 1;
          $options = array_map(function ($item) {
                
                return [$item];
            }, $color_array);
          // Push the colors array to the options array
        } else {
          // Set the colors_active variable to 0
          $colors_active = 0;
        }
        // Get the unit price and product name from the request
        $unit_price = $this->input->post('unit_price');
        $product_name = $this->input->post('name');
        
        // Initialize the options array
        // Check if the request has the choice_no parameter and if it is not empty
        $attr_data = array();
        if ($this->input->post('choice_no')!=null) {
          // Loop through the choice_no array
          foreach ($this->input->post('choice_no') as $key => $no) {
            // Construct the name of the choice_options parameter
            // echo 'sss';
            $name = 'choice_options_' . $no;
            // Initialize the data array
            // Loop through the choice_options array and push to the data array
            if($this->input->post($name)!=null){
                  array_push($attr_data,$this->input->post($name));
                 
            }
          }
        }
        $result=array();
            if(count($options)>0){
                if(count($attr_data)>0){
                    foreach($options as $option){
                        // echo json_encode($option);
                        $temp_arr=generateCombinations($attr_data);
                        $temp= array_map(function ($item) use ($option,$result) {
                            array_unshift($item,$option[0]);
                            return $item;
                        }, $temp_arr);
                        foreach($temp as $attr){
                            $result[]=$attr;
                        }
                        
                    }
                    $options=$result;
                }
            }
            else{
                $outputArray    = generateCombinations($attr_data);
                $options        = $outputArray;
            }
        // $outputArray = generateCombinations($inputArray);
        // echo json_encode($attr_data);
        // Use the Combinations class to make combinations from the options array
        $data['combinations']   = $options;
        //  echo json_encode($result);
        // echo json_encode( $attr_data);
        $data['unit_price']      = $unit_price;
        $data['product_name']    = $product_name;
        $data['colors_active']   = $colors_active;
    //   return;
        // '';
        $this->load->view('modules/admin/partials/_attribute_values',$data);
    }
    function edit_sku_combination(){
        $input_data=$this->input->post();
        $id=$this->input->post('id');
        // echo $id;
        // return;
        if(isset($input_data['item_options'])){
            $data['item_options']   = $this->admin_product_model->GET_ITEM_OPTIONS($input_data['item_options']);
        }
        else{
            $data['item_options']=array();
        }
        $data['product']        = $this->admin_product_model->GET_PRODUCT($id);
        
        $options = array();
        if ($this->input->post('colors_active') && $this->input->post('colors') && count($this->input->post('colors')) > 0) {
          // Set the colors_active variable to 1
          $color_array=$this->input->post('colors');
          $colors_active = 1;
          $options = array_map(function ($item) {
                
                return [$item];
            }, $color_array);
          // Push the colors array to the options array
        } else {
          // Set the colors_active variable to 0
          $colors_active = 0;
        }
        // Get the unit price and product name from the request
        $unit_price = $this->input->post('unit_price');
        $product_name = $this->input->post('name');
        
        // Initialize the options array
        // Check if the request has the choice_no parameter and if it is not empty
        $attr_data = array();
        if ($this->input->post('choice_no')!=null) {
          // Loop through the choice_no array
          foreach ($this->input->post('choice_no') as $key => $no) {
            // Construct the name of the choice_options parameter
            // echo 'sss';
            $name = 'choice_options_' . $no;
            // Initialize the data array
            // Loop through the choice_options array and push to the data array
            if($this->input->post($name)!=null){
                  array_push($attr_data,$this->input->post($name));
                 
            }
          }
        }
        $result=array();
            if(count($options)>0){
                if(count($attr_data)>0){
                    foreach($options as $option){
                        // echo json_encode($option);
                        $temp_arr=generateCombinations($attr_data);
                        $temp= array_map(function ($item) use ($option,$result) {
                            array_unshift($item,$option[0]);
                            return $item;
                        }, $temp_arr);
                        foreach($temp as $attr){
                            $result[]=$attr;
                        }
                        
                    }
                    $options=$result;
                }
            }
            else{
                $outputArray    = generateCombinations($attr_data);
                $options        = $outputArray;
            }
        $data['combinations']   = $options;
        $data['unit_price']     = $unit_price;
        $data['product_name']   = $product_name;
        $data['colors_active']   = $colors_active;
        if(count($data['combinations'])==1){
            if(!$data['combinations'][0]){
                $data['combinations']=array();
            }
        }
        // echo json_encode($data['combinations']);
        $this->load->view('modules/admin/partials/_edit_attribute_values',$data);
    }
    function add_item_options(){
        $input_data     = $this->input->post();
        if(!isset($input_data['item_option_ids'])){
            echo '';
            return;
        }
        $item_options   = $this->admin_product_model->GET_ITEM_OPTIONS($input_data['item_option_ids']);
        $html               = "";
        $table_str_start    =   "
        <table class='table table-bordered aiz-table' id='tbody-unit_options'>
        <thead>
          <tr>
            <th>Unit Option</th>
            <th>Description</th>
            <th>Quantity Deduction</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody >
        ";
        $table_str_end="
                        </tbody>
                    </table>
                <div>Note: <span class='font-weight-bold'>Quantity Deduction</span> is the number of item to be deducted from the total current stocks. </div>    
                ";
        foreach($item_options as $index => $option){
            $str= " <tr>
                        <td>
                            <input type='hidden' name='item_option_values[$index][name]' value='$option->name' class='form-control'>
                            <input type='text' value='$option->name' disabled class='form-control'>
                        </td>
                        <td>
                            <input type='text' name='item_option_values[$index][unit]' class='form-control unit_option_tb' id=".$index.'-unit_'.$option->name.">
                        </td>
                        <td>
                            <input type='number' name='item_option_values[$index][pieces]' class='form-control'>
                        </td>
                        <td>
                            <input type='number' name='item_option_values[$index][price]' class='form-control'>
                        </td>
                    </tr>
                  ";
            $html.=$str;
            

        }
        echo $table_str_start.$html.$table_str_end;
    }
    function setup_options($id){
        $product_options    = $this->admin_product_model->GET_DATA_ROW('tbl_products','id',$id,'id,item_options');
        $item_options       = $this->admin_product_model->GET_ITEM_OPTIONS(json_decode($product_options->item_options));
        $product_stocks     = $this->admin_product_model->GET_STOCKS($id);
        // echo '<pre>';
        // var_dump($product_stocks);
        // return;
        $data['PRODUCT_STOCKS'] = $product_stocks;
        $data['ITEM_OPTIONS']   = $item_options;
        $this->template->load('templates/admin_layout', 'modules/admin/setup_product_option_views',$data);
    }
    function featured(){
        $input_data=$this->input->post();
        $res=$this->admin_product_model->UPDATE_FEATURED($input_data['id'],$input_data['table'],$input_data['status']);
        echo $res;
    }
    function assign_to_new(){
        $input_data=$this->input->post();
        $res=$this->admin_product_model->UPDATE_TO_NEW($input_data['id'],$input_data['table'],$input_data['status']);
        echo $res;
    }
    function destroy($id){
        $res= $this->admin_product_model->DESTROY_ROW_DATA('tbl_products','id',$id);
        if($res){
            $this->session->set_flashdata('alert',array('message'=>'Product has been deleted successfully','level'=>'success'));
            
        }else{
            $this->session->set_flashdata('alert',array('message'=>'Product deletion is unsuccessful','level'=>'error'));
        }
        redirect('admins/products');
    }
    
}

function generate_options($array, $level, $parent_id,$category=0) {
  // Loop through the array
  foreach ($array as $object) {
    // Check if the object's level and parent id match
    if ($object->level == $level && $object->parent_id == $parent_id) {
      // Initialize an empty dash variable
      $dash = "";
      // Loop from 1 to the current level
      for ($i = 1; $i <= $level; $i++) {
        // Append a dash to the dash variable
        $dash .= "--";
      }
      if($category->parent_id==$object->id){
          echo "<option value=\"$object->id\" selected >$dash$object->name</option>\n";
      }
      else{
          echo "<option value=\"$object->id\"  >$dash$object->name</option>\n";
      }
      // Output an option tag with the object's name and id, prefixed with dashes
    //   
      // Call the function again with an incremented level and the object's id as the new parent id
      generate_options($array, $level + 1, $object->id,$category);
    }
  }
}
function generateCombinations($arrays, $currentIndex = 0, $currentCombination = []) {
    if ($currentIndex == count($arrays)) {
        return [$currentCombination];
    }

    $result = [];

    foreach ($arrays[$currentIndex] as $item) {
        $newCombination = array_merge($currentCombination, [$item]);
        $result = array_merge($result, generateCombinations($arrays, $currentIndex + 1, $newCombination));
    }

    return $result;
}

function generate_options_add($array, $level, $parent_id,$category_id=0) {
  // Loop through the array
  
  $category_data = is_array($category_id) ? $category_id : array($category_id);

  foreach ($array as $object) {
    // Check if the object's level and parent id match
    if ($object->level == $level && $object->parent_id == $parent_id) {
      // Initialize an empty dash variable
      $dash = "";
      // Loop from 1 to the current level
      for ($i = 1; $i <= $level; $i++) {
        // Append a dash to the dash variable
        $dash .= "--";
      }
      // Output an option tag with the object's name and id, prefixed with dashes
      if(in_array($object->id,$category_data)){
          echo "<option value='$object->id' selected> $dash$object->name </option>";
      }
      else{
          echo "<option value='$object->id'> $dash$object->name </option>";
      }
    //   echo "<option value=\"$object->id\" $category_id ? 'selected' : '' >$dash.$object->name.'-'.$category_id</option>\n";
      // Call the function again with an incremented level and the object's id as the new parent id
      generate_options_add($array, $level + 1, $object->id,$category_id);
    }
  }
}