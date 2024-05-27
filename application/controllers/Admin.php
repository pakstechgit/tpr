<?php defined('BASEPATH') OR exit('No direct script access allowed');
// ob_start(); 
// class Admin extends CI_Controller
// {
//     private $first_link = "<< ";
//     private $last_link = " >>";
//     private $next_link = " >";
//     private $prev_link = "< ";
//     private $pagination_config;
//     function __construct(){
//         parent::__construct();
//         $this->load->model('modules/products_model');
//         $this->load->model('modules/admin_model');
//         $this->load->helper('form');
//         $this->load->library('session');
//         $this->load->library('Template');
//         $this->load->library('pagination');
//         $this->load->library('session');
        
//         $this->pagination_config['attributes']       = ['class' => 'page-link'];
//         $this->pagination_config['full_tag_open']    = '<nav><ul class="pagination">';
//         $this->pagination_config['full_tag_close']   = '</ul></nav>';
//         $this->pagination_config['cur_tag_open']     ='<li class="page-item active" aria-current="page"><a class="page-link" >';
//         $this->pagination_config['prev_tag_open']    = '<li class="page-item">';
//         $this->pagination_config['cur_tag_close']    = '</a></li>';
//         $this->pagination_config['prev_tag_close']   = '</li>';
//         $this->pagination_config['first_link']       = $this->first_link;
//         $this->pagination_config['last_link']        = $this->last_link;
//         $this->pagination_config['next_link']        = $this->next_link;
//         $this->pagination_config['prev_link']        = $this->prev_link;
//         $this->pagination_config['per_page']         = 1;
//         $user_id                                     = $this->session->userdata('SESS_USER_ID');
//         if(!$user_id){
//             redirect('login/admin');
//         }
//         if($user_id){
//             $user                                    = $this->admin_model->GET_USER($user_id);
//             if($user->user_type=='customer'){
//                 redirect('users/profile');
//                 return;
//             }
//         }
//     }
//     function index(){
//         $user_id                           = $this->session->userdata('SESS_USER_ID');
//         if(!$user_id){
//             $this->load->view('modules/admin/admin_login_views');
//             return;
//         }
//         $user                                    = $this->admin_model->GET_USER($user_id);
//         if($user->user_type=='admin'){
//             redirect('admin/dashboard');
//             return;
//         }else{
//             redirect('users/profile');
//             return;
//         }
    
//     }
//     function login(){
//         redirect('admin/dashboard');
//     }
//     function dashboard(){
//         $data['TOTAL_CUSTOMERS']        = $this->admin_model->GET_TOTAL_DATA('tbl_users');
//         $data['TOTAL_PRODUCT_CAT']      = $this->admin_model->GET_TOTAL_DATA('tbl_categories');
//         $data['TOTAL_ORDERS']           = $this->admin_model->GET_TOTAL_DATA('tbl_orders');
//         $data['TOTAL_PRODUCT_BRAND']    = $this->admin_model->GET_TOTAL_DATA('tbl_brands');
//         $dat['TOP_PRODUCTS']            = $this->admin_model->GET_TOP_PRODUCTS();
//         $this->template->load('templates/admin_layout', 'modules/admin/dashboard_views',$data);
//     }
//     function products(){
//         $this->pagination_config['base_url']         = base_url('admin/products');
//         $page                       = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
//         $data['PRODUCTS']           = $this->products_model-> GET_PRODUCTS_LISTS($this->pagination_config['per_page'], $page);
//         $this->pagination_config['total_rows']       = $this->products_model->GET_NUM_ALL_PRODUCTS();
//         // Initialize the pagination library
//         $this->pagination->initialize($this->pagination_config);
//         $data['links'] = $this->pagination->create_links();
//         for($i=0;$i<count($data['PRODUCTS']);$i=$i+1){
//             $data['PRODUCTS'][$i]->product_variants=$this->products_model->GET_STOCKS($data['PRODUCTS'][$i]->id);
//         }
        
//         // echo '<pre>';
//         // var_dump($data['PRODUCTS']);
//         // return;
//         $this->template->load('templates/admin_layout', 'modules/admin/product_lists_views',$data);
//     }
//         function add_new_product(){
//             $data['CATEGORIES']         = $this->products_model->GET_LIST_DATA('tbl_categories');
//             $data['BRANDS']             = $this->products_model->GET_LIST_DATA('tbl_brands');
//             $data['COLORS']             = $this->products_model->GET_LIST_DATA('tbl_colors');
//             $data['MATERIALS']          = $this->products_model->GET_LIST_DATA('tbl_materials');
//             $data['ATTRIBUTES']         = $this->products_model->GET_LIST_DATA('tbl_attributes');
            
//             // echo '<pre>';
//             // var_dump($data['CATEGORIES']);
//             // return;
//             $this->template->load('templates/admin_layout', 'modules/admin/add_new_product_views',$data);
//         }
//             function add_more_choice_option(){
//                 $attribute_id=$this->input->post('attribute_id');
//                 $attribute_values=$this->admin_model->GET_LIST_DATA('tbl_attribute_values','attribute_id',$attribute_id);
//                 $product_attr=$this->input->post('product_attr')?$this->input->post('product_attr'): array();
//                 $html = '';
//                 // Loop through the attribute values and append to the html variable
//                 foreach ($attribute_values as $row) {
//                   $html .= '<option value="' . $row->value . '"' . (in_array($row->value, $product_attr) ? ' selected' : '') . '>' . $row->value . '</option>';
//                 }
                
//                 // Echo the html variable
//               echo json_encode($html);
//             }
//             function sku_combination(){
//                 $input_data=$this->input->post();
                
//                 $options = array();
//                 if ($this->input->post('colors_active') && $this->input->post('colors') && count($this->input->post('colors')) > 0) {
//                   // Set the colors_active variable to 1
//                   $color_array=$this->input->post('colors');
//                   $colors_active = 1;
//                   $options = array_map(function ($item) {
                        
//                         return [$item];
//                     }, $color_array);
//                   // Push the colors array to the options array
//                 } else {
//                   // Set the colors_active variable to 0
//                   $colors_active = 0;
//                 }
//                 // Get the unit price and product name from the request
//                 $unit_price = $this->input->post('unit_price');
//                 $product_name = $this->input->post('name');
                
//                 // Initialize the options array
//                 // Check if the request has the choice_no parameter and if it is not empty
//                 $attr_data = array();
//                 if ($this->input->post('choice_no')!=null) {
//                   // Loop through the choice_no array
//                   foreach ($this->input->post('choice_no') as $key => $no) {
//                     // Construct the name of the choice_options parameter
//                     // echo 'sss';
//                     $name = 'choice_options_' . $no;
//                     // Initialize the data array
//                     // Loop through the choice_options array and push to the data array
//                     if($this->input->post($name)!=null){
//                           array_push($attr_data,$this->input->post($name));
                         
//                     }
//                   }
//                 }
//                 $result=array();
//                     if(count($options)>0){
//                         if(count($attr_data)>0){
//                             foreach($options as $option){
//                                 // echo json_encode($option);
//                                 $temp_arr=generateCombinations($attr_data);
//                                 $temp= array_map(function ($item) use ($option,$result) {
//                                     array_unshift($item,$option[0]);
//                                     return $item;
//                                 }, $temp_arr);
//                                 foreach($temp as $attr){
//                                     $result[]=$attr;
//                                 }
                                
//                             }
//                             $options=$result;
//                         }
//                     }
//                     else{
//                         $outputArray    = generateCombinations($attr_data);
//                         $options        = $outputArray;
//                     }
//                 // $outputArray = generateCombinations($inputArray);
//                 // echo json_encode($attr_data);
//                 // Use the Combinations class to make combinations from the options array
//                 $data['combinations']   = $options;
//                 //  echo json_encode($result);
//                 // echo json_encode( $attr_data);
//                 $data['unit_price']     = $unit_price;
//                 $data['product_name']   = $product_name;
//                 $data['colors_active']   = $colors_active;
//             //   return;
//                 // '';
//                 $this->load->view('modules/admin/partials/_attribute_values',$data);
//             }
//             function edit_sku_combination(){
//                 $input_data=$this->input->post();
//                 $id=$this->input->post('id');
//                 // echo $id;
//                 // return;
//                 $data['product']=$this->products_model->GET_PRODUCT($id);
//                 $options = array();
//                 if ($this->input->post('colors_active') && $this->input->post('colors') && count($this->input->post('colors')) > 0) {
//                   // Set the colors_active variable to 1
//                   $color_array=$this->input->post('colors');
//                   $colors_active = 1;
//                   $options = array_map(function ($item) {
                        
//                         return [$item];
//                     }, $color_array);
//                   // Push the colors array to the options array
//                 } else {
//                   // Set the colors_active variable to 0
//                   $colors_active = 0;
//                 }
//                 // Get the unit price and product name from the request
//                 $unit_price = $this->input->post('unit_price');
//                 $product_name = $this->input->post('name');
                
//                 // Initialize the options array
//                 // Check if the request has the choice_no parameter and if it is not empty
//                 $attr_data = array();
//                 if ($this->input->post('choice_no')!=null) {
//                   // Loop through the choice_no array
//                   foreach ($this->input->post('choice_no') as $key => $no) {
//                     // Construct the name of the choice_options parameter
//                     // echo 'sss';
//                     $name = 'choice_options_' . $no;
//                     // Initialize the data array
//                     // Loop through the choice_options array and push to the data array
//                     if($this->input->post($name)!=null){
//                           array_push($attr_data,$this->input->post($name));
                         
//                     }
//                   }
//                 }
//                 $result=array();
//                     if(count($options)>0){
//                         if(count($attr_data)>0){
//                             foreach($options as $option){
//                                 // echo json_encode($option);
//                                 $temp_arr=generateCombinations($attr_data);
//                                 $temp= array_map(function ($item) use ($option,$result) {
//                                     array_unshift($item,$option[0]);
//                                     return $item;
//                                 }, $temp_arr);
//                                 foreach($temp as $attr){
//                                     $result[]=$attr;
//                                 }
                                
//                             }
//                             $options=$result;
//                         }
//                     }
//                     else{
//                         $outputArray    = generateCombinations($attr_data);
//                         $options        = $outputArray;
//                     }
//                 $data['combinations']   = $options;
//                 $data['unit_price']     = $unit_price;
//                 $data['product_name']   = $product_name;
//                 $data['colors_active']   = $colors_active;
//                 if(count($data['combinations'])==1){
//                     if(!$data['combinations'][0]){
//                         $data['combinations']=array();
//                     }
//                 }
//                 // echo json_encode($data['combinations']);
//                 $this->load->view('modules/admin/partials/_edit_attribute_values',$data);
//             }
            
       
//         function product_edit($id){
//             $data['PRODUCT']          = $this->products_model->GET_PRODUCT($id);
//             $data['CATEGORIES']       = $this->products_model->GET_LIST_DATA('tbl_categories');
//             $data['BRANDS']           = $this->products_model->GET_LIST_DATA('tbl_brands');
//             $data['COLORS']           = $this->products_model->GET_LIST_DATA('tbl_colors');
//             $data['PRODUCT_TAX']      = $this->products_model->GET_PRODUCT_TAX($id);
//             $data['ATTRIBUTES']         = $this->products_model->GET_LIST_DATA('tbl_attributes');
//             $data['PRODUCT']->product_variants=$this->products_model->GET_STOCKS($id);
//             // echo '<pre>';
//             //     var_dump($data['PRODUCT']);
//             // return;
//             // if($data['C_PRODUCT']->digital==0){
//             //     $this->load->view('modules/products/edit_product_views',$data);
//             //     return;
//             // }
//             $this->template->load('templates/admin_layout', 'modules/admin/edit_product_views',$data);
//             // $this->load->view('modules/products/edit_digital_product_views',$data);
//         }
//     function delete_product($id){
//         $res= $this->products_model->DELETE_PRODUCT($id);
//         if($res){
//             $this->session->set_flashdata('alert',array('message'=>'Product has been deleted successfully','level'=>'success'));
            
//         }else{
//             $this->session->set_flashdata('alert',array('message'=>'Product deletion is unsuccessful','level'=>'error'));
//         }
//         redirect('admin/products');
//     }
//     function categories(){
//         $this->pagination_config['base_url']            = base_url('admin/categories');
//         $page                                           = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
//         $data['CATEGORIES']                             = $this->admin_model->GET_CATEGORY_LIST($this->pagination_config['per_page'], $page);
//         $this->pagination_config['total_rows']          = $this->admin_model->GET_CATEGORY_COUNT();
//         // Initialize the pagination library
//         $this->pagination->initialize($this->pagination_config);
//         $data['links']                                  = $this->pagination->create_links();
//         // echo '<pre>';
//         // var_dump($data['CATEGORIES']);
//         // return;
//         $this->template->load('templates/admin_layout', 'modules/admin/admin_category_views',$data);
//     }
//         function create_categories(){
//             $data['CATEGORIES'] =  $this->admin_model->GET_FORMATTED_CATEGORY();
//             // echo '<pre>';
//             // var_dump($data['CATEGORIES']);
//             // return;
//             $this->template->load('templates/admin_layout', 'modules/admin/create_category_views',$data);
//         }
//             function add_category(){
//                 $input_data=$this->input->post();
//                 $input_data['level']=0;
//                 if($input_data['parent_id']>0){
//                     $category=$this->admin_model->GET_CATEGORY($input_data['parent_id']);
//                     $input_data['level']=$category->level+1;
//                 }
//                 $res=$this->admin_model->ADD_CATEGORY($input_data);
//                 redirect('admin/categories');
//             }
//         function edit_category($id){
//             $data['CATEGORIES']  = $this->admin_model->GET_FORMATTED_CATEGORY();
//             $data['CATEGORY']    = $this->admin_model->GET_CATEGORY($id);
//             // generate_options($data['CATEGORIES'], 0, 0,$data['CATEGORY']);
//             // echo '<pre>';
//             // // var_dump($data['CATEGORY']);
//             // return;
//             $this->template->load('templates/admin_layout', 'modules/admin/edit_category_views',$data);
//         }
//             function update_category($id){
//                 $input_data=$this->input->post();
//                 $input_data['level']=0;
//                 if($input_data['parent_id']>0){
//                     $category=$this->admin_model->GET_CATEGORY($input_data['parent_id']);
//                     $input_data['level']=$category->level+1;
//                 }
//                 $res=$this->admin_model->UPDATE_CATEGORY($input_data,$id);
//                 redirect('admin/categories');
//             }
//         function delete_category($id){
//             $res=$this->admin_model->DELETE_CATEGORY($id);
//             $this->session->set_flashdata('alert',array('message'=>'Category has been deleted successfully','level'=>'success'));
//             redirect('admin/categories');
//         }
// function featured(){
//     $input_data=$this->input->post();
//     $res=$this->admin_model->UPDATE_FEATURED($input_data['id'],$input_data['table'],$input_data['status']);
//     echo $res;
// }
        
//     function brands(){
//         $this->pagination_config['base_url']            = base_url('admin/brands');
//         $page                                           = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
//         $data['BRANDS']                                 = $this->admin_model->GET_BRAND_LIST($this->pagination_config['per_page'], $page);
//         $this->pagination_config['total_rows']          = $this->admin_model-> GET_TOTAL_COUNT('tbl_brands');
//         // Initialize the pagination library
//         $this->pagination->initialize($this->pagination_config);
//         $data['links']                                  = $this->pagination->create_links();
//         // echo '<pre>';
//         // var_dump($data['BRANDS']);
//         // return;
//         $this->template->load('templates/admin_layout', 'modules/admin/admin_brand_views',$data);
//     }
//         function add_brand(){
//             $input_data=$this->input->post();
//             $this->admin_model->ADD_DATA('tbl_brands',$input_data);
//             $this->session->set_flashdata('alert',array('message'=>'Brand has been inserted successfully','level'=>'success'));
//             redirect('admin/brands');
//         }
//         function edit_brand($id){
//             $data['BRAND']=$this->admin_model->GET_DATA('tbl_brands',$id);
//             $this->template->load('templates/admin_layout', 'modules/admin/edit_brand_views',$data);
//         }
//             function update_brand($id){
//                 $input_data=$this->input->post();
//                 $res=$this->admin_model->UPDATE_DATA('tbl_brands',$id,$input_data);
//                 $this->session->set_flashdata('alert',array('message'=>'Brand has been updated successfully','level'=>'success'));
//                 redirect('admin/brands');
//             }
//         function delete_brand($id){
//              $res=$this->admin_model->DELETE_DATA('tbl_brands',$id);
//              if($res){
//                  $this->session->set_flashdata('alert',array('message'=>'Brand has been deleted successfully','level'=>'success'));
//              }else{
//                  $this->session->set_flashdata('alert',array('message'=>'Brand has deleted unsuccessfully','level'=>'error'));
//              }
//              redirect('admin/brands');
//         }
//     function attributes(){
        
//         $this->pagination_config['base_url']            = base_url('admin/attributes');
//         $page                                           = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
//         $data['ATTRIBUTES']                             = $this->admin_model->GET_ATTRIBUTE_LIST($this->pagination_config['per_page'], $page);
//         $this->pagination_config['total_rows']          = $this->admin_model-> GET_TOTAL_COUNT('tbl_attributes');
//         // Initialize the pagination library
//         $this->pagination->initialize($this->pagination_config);
//         $data['links']                                  = $this->pagination->create_links();
//         // echo '<pre>';
//         // var_dump($data['ATTRIBUTES'] );
//         // return;
//         $this->template->load('templates/admin_layout', 'modules/admin/admin_attribute_views',$data);
//     }
//         function add_attribute(){
//             $input_data=$this->input->post();
//             $this->admin_model->ADD_DATA('tbl_attributes',$input_data);
//             $this->session->set_flashdata('alert',array('message'=>'Attribute has been inserted successfully','level'=>'success'));
//             redirect('admin/attributes');
//         }
//         function edit_attribute($id){
//             $data['ATTRIBUTE']=$this->admin_model->GET_DATA('tbl_attributes',$id);
//             $this->template->load('templates/admin_layout', 'modules/admin/edit_attribute_views',$data);
//         }
//             function update_attribute($id){
//                 $input_data=$this->input->post();
//                 $res=$this->admin_model->UPDATE_DATA('tbl_attributes',$id,$input_data);
//                 $this->session->set_flashdata('alert',array('message'=>'Attribute has been updated successfully','level'=>'success'));
//                 redirect('admin/attributes');
//             }
//         function delete_attribute($id){
//             $res=$this->admin_model->DELETE_DATA('tbl_attributes',$id);
//              if($res){
//                  $this->session->set_flashdata('alert',array('message'=>'Attribute has been deleted successfully','level'=>'success'));
//              }else{
//                  $this->session->set_flashdata('alert',array('message'=>'Attribute has deleted unsuccessfully','level'=>'error'));
//              }
//              redirect('admin/attributes');
//         }
//         function setup_attribute($id){
//             $data['ATTRIBUTE_VALUES']=$this->admin_model->GET_LIST_DATA('tbl_attribute_values','attribute_id',$id);
//             $data['ATTRIBUTE']=$this->admin_model->GET_DATA('tbl_attributes',$id);
//             $this->template->load('templates/admin_layout', 'modules/admin/setup_attribute_views',$data);
//         }
//             function add_attribute_vallues(){
//                 $input_data=$this->input->post();
//                 $this->admin_model->ADD_DATA('tbl_attribute_values',$input_data);
//                 $this->session->set_flashdata('alert',array('message'=>'Attribute has been inserted successfully','level'=>'success'));
//                 redirect('admin/setup_attribute/'.$input_data['attribute_id']);
//             }
//             function edit_attribute_value($id){
//                 $data['ATTRIBUTE_VALUE']=$this->admin_model->GET_DATA('tbl_attribute_values',$id);
//                 $this->template->load('templates/admin_layout', 'modules/admin/edit_attribute_value_views',$data);
//             }
//                 function update_attribute_value($id){
//                     $input_data=$this->input->post();
//                     $res=$this->admin_model->UPDATE_DATA('tbl_attribute_values',$id,$input_data);
//                     $this->session->set_flashdata('alert',array('message'=>'Attribute value has been updated successfully','level'=>'success'));
//                     redirect('admin/setup_attribute/'.$input_data['attribute_id']);
//                 }
//             function delete_attribute_value($id){
//                 $attr_id=$this->input->get('attr-val');
//                 $res=$this->admin_model->DELETE_DATA('tbl_attribute_values',$id);
//                 if($res){
//                      $this->session->set_flashdata('alert',array('message'=>'Attribute value has been deleted successfully','level'=>'success'));
//                 }else{
//                      $this->session->set_flashdata('alert',array('message'=>'Attribute value has deleted unsuccessfully','level'=>'error'));
//                 }
//                 redirect('admin/setup_attribute/'.$attr_id);
//             }
//     function materials(){
//         $this->pagination_config['base_url']            = base_url('admin/brands');
//         $page                                           = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
//         $data['MATERIALS']                              = $this->admin_model->GET_MATERIAL_LIST($this->pagination_config['per_page'], $page);
//         $this->pagination_config['total_rows']          = $this->admin_model-> GET_TOTAL_COUNT('tbl_materials');
//         // Initialize the pagination library
//         $this->pagination->initialize($this->pagination_config);
//         $data['links']                                  = $this->pagination->create_links();
//         $this->template->load('templates/admin_layout', 'modules/admin/admin_material_views',$data);
//     }
//         function add_material(){
//             $input_data=$this->input->post();
//             $this->admin_model->ADD_DATA('tbl_materials',$input_data);
//             $this->session->set_flashdata('alert',array('message'=>'Material has been inserted successfully','level'=>'success'));
//             redirect('admin/materials');
//         }
//         function edit_material($id){
//             $data['MATERIAL']=$this->admin_model->GET_DATA('tbl_materials',$id);
//             $this->template->load('templates/admin_layout', 'modules/admin/edit_material_views',$data);
//         }
//             function update_material($id){
//                 $input_data=$this->input->post();
//                 $res=$this->admin_model->UPDATE_DATA('tbl_materials',$id,$input_data);
//                 $this->session->set_flashdata('alert',array('message'=>'Material has been updated successfully','level'=>'success'));
//                 redirect('admin/materials');
//             }
//         function delete_material($id){
//             $res=$this->admin_model->DELETE_DATA('tbl_materials',$id);
//             if($res){
//                  $this->session->set_flashdata('alert',array('message'=>'Material has been deleted successfully','level'=>'success'));
//             }else{
//                  $this->session->set_flashdata('alert',array('message'=>'Material has deleted unsuccessfully','level'=>'error'));
//             }
//             redirect('admin/materials');
//         }
// }

// function generate_options($array, $level, $parent_id,$category=0) {
//   // Loop through the array
//   foreach ($array as $object) {
//     // Check if the object's level and parent id match
//     if ($object->level == $level && $object->parent_id == $parent_id) {
//       // Initialize an empty dash variable
//       $dash = "";
//       // Loop from 1 to the current level
//       for ($i = 1; $i <= $level; $i++) {
//         // Append a dash to the dash variable
//         $dash .= "--";
//       }
//       if($category->parent_id==$object->id){
//           echo "<option value=\"$object->id\" selected >$dash$object->name</option>\n";
//       }
//       else{
//           echo "<option value=\"$object->id\"  >$dash$object->name</option>\n";
//       }
//       // Output an option tag with the object's name and id, prefixed with dashes
//     //   
//       // Call the function again with an incremented level and the object's id as the new parent id
//       generate_options($array, $level + 1, $object->id,$category);
//     }
//   }
// }
// function generateCombinations($arrays, $currentIndex = 0, $currentCombination = []) {
//     if ($currentIndex == count($arrays)) {
//         return [$currentCombination];
//     }

//     $result = [];

//     foreach ($arrays[$currentIndex] as $item) {
//         $newCombination = array_merge($currentCombination, [$item]);
//         $result = array_merge($result, generateCombinations($arrays, $currentIndex + 1, $newCombination));
//     }

//     return $result;
// }

// function generate_options_add($array, $level, $parent_id,$category_id=0) {
//   // Loop through the array
//   foreach ($array as $object) {
//     // Check if the object's level and parent id match
//     if ($object->level == $level && $object->parent_id == $parent_id) {
//       // Initialize an empty dash variable
//       $dash = "";
//       // Loop from 1 to the current level
//       for ($i = 1; $i <= $level; $i++) {
//         // Append a dash to the dash variable
//         $dash .= "--";
//       }
//       // Output an option tag with the object's name and id, prefixed with dashes
//       if($object->id==$category_id){
//           echo "<option value='$object->id' selected> $dash$object->name </option>";
//       }
//       else{
//           echo "<option value='$object->id'> $dash$object->name </option>";
//       }
//     //   echo "<option value=\"$object->id\" $category_id ? 'selected' : '' >$dash.$object->name.'-'.$category_id</option>\n";
//       // Call the function again with an incremented level and the object's id as the new parent id
//       generate_options_add($array, $level + 1, $object->id,$category_id);
//     }
//   }
// }