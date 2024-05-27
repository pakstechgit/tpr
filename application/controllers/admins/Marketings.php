<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 
class marketings extends CI_Controller
{
    private $first_link = "<< ";
    private $last_link = " >>";
    private $next_link = " >";
    private $prev_link = "< ";
    private $pagination_config;
    function __construct(){
        parent::__construct();
        $this->load->model('modules/admin/admin_marketing_model');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Template');
        $this->load->library('Technos_encryption');
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
            $user                                    = $this->admin_marketing_model->GET_USER($user_id);
            if($user->user_type=='customer'){
                redirect('users/profile');
                return;
            }
        }
    }
    function index(){
        
        $this->pagination_config['base_url']            = base_url('admins/attributes');
        $page                                           = $this->input->get('page') ? $this->input->get('page')-1 : 0 ;
        $data['FLASH_DEALS']                            = $this->admin_marketing_model->GET_FLASH_DEALS_LIST($this->pagination_config['per_page'], $page);
        $this->pagination_config['total_rows']          = $this->admin_marketing_model->GET_FLASH_DEALS_COUNT();
        // Initialize the pagination library
        $this->pagination->initialize($this->pagination_config);
        $data['links']                                  = $this->pagination->create_links();
        // echo '<pre>';
        // var_dump($data['ATTRIBUTES'] );
        // return;
        $this->template->load('templates/admin_layout', 'modules/admin/flash_deal_views',$data);
    }
    function new_flash_deals(){
        $data['PRODUCTS']           = $this->admin_marketing_model->GET_LIST_DATA('tbl_products','id,name');
        $this->template->load('templates/admin_layout', 'modules/admin/new_flash_deal_views',$data);
    }
    function save_flash_deals(){
        $input_data=$this->input->post();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('background_color', 'Backgound Color', 'required');
        $this->form_validation->set_rules('text_color', 'Text Color', 'required');
        $this->form_validation->set_rules('banner', 'Banner', 'required');
        $this->form_validation->set_rules('products[]', 'Products', 'required');
        $this->form_validation->set_rules('date_range', 'Date Range', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('alert',array('message'=>'Missing field make sure to fill out every required field','level'=>'error'));
            // echo '<pre>';
            // var_dump($input_data);
            // echo validation_errors('<div class="error">', '</div>');
        }
        else {
            // echo '<pre>';
            // var_dump($input_data);
            $date_range= explode(' to ',$input_data['date_range']);
            echo '<pre>';
            // var_dump($date_range);
            $flash_deal_data=array();
            $flash_deal_data['title']               = $input_data['title'];
            $flash_deal_data['start_date']          = strtotime($date_range[0]);
            $flash_deal_data['end_date']            = strtotime($date_range[1]);
            $flash_deal_data['background_color']    = $input_data['background_color'];
            $flash_deal_data['text_color']          = $input_data['text_color'];
            $flash_deal_data['banner']              = $input_data['banner'];
            $flash_deal_data['slug']                = strtolower(str_replace(' ', '-', $input_data['title']).'-'.generateRandomString());
            $flash_deal_data['created_at']          = date('Y-m-d H:i:s');
            $flash_deal_data['updated_at']          = date('Y-m-d H:i:s');
            $res= $this->admin_marketing_model->ADD_ROW_DATA('tbl_flash_deals',$flash_deal_data);
            // echo '<pre>';
            // var_dump($flash_deal_data);
            if($res){
                $discount=$input_data['discount'];
                for($i=0;$i<count($discount);$i++){
                    $discount[$i]['flash_deal_id']=$res;
                    $discount[$i]['created_at']=date('Y-m-d H:i:s');
                    $discount[$i]['updated_at']=date('Y-m-d H:i:s');
                }
                $this->admin_marketing_model->ADD_BATCH_DATA('tbl_flash_deal_products',$discount);
            }
            
        }
        redirect('admins/marketings/new_flash_deals');
    }
    function edit_flash_deal($id){
        $data['PRODUCTS']               = $this->admin_marketing_model->GET_LIST_DATA('tbl_products','id,name');
        $data['FLASH_DEAL']             = $this->admin_marketing_model->GET_ROW_FLASH_DEAL($id);
        $flash_deal_products            = $this->admin_marketing_model->GET_FLASH_DEAL_PRODUCTS($id);
        $flash_deal_product_ids         = array();
        foreach($flash_deal_products as $product){
            $flash_deal_product_ids[]=$product->product_id;
        }
        $data['FLASH_PRODUCTS_IDS']         = $flash_deal_product_ids;
        // echo '<pre>';
        // var_dump($data['FLASH_PRODUCTS_IDS']);
        // return;
        $this->template->load('templates/admin_layout', 'modules/admin/edit_flash_deal_views',$data);
    }
    function update_flash_deals($id){
        $flash_id=$this->technos_encryption->decryptData(urldecode($id));
        $input_data=$this->input->post();
        // echo '<pre>';
        // var_dump($input_data);
        // return;
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('background_color', 'Backgound Color', 'required');
        $this->form_validation->set_rules('text_color', 'Text Color', 'required');
        $this->form_validation->set_rules('banner', 'Banner', 'required');
        $this->form_validation->set_rules('products[]', 'Products', 'required');
        $this->form_validation->set_rules('date_range', 'Date Range', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('alert',array('message'=>'Missing field make sure to fill out every required field','level'=>'error'));
            // echo '<pre>';
            // var_dump($input_data);
            // echo validation_errors('<div class="error">', '</div>');
        }
        else {
            // echo '<pre>';
            // var_dump($input_data);
            $date_range= explode(' to ',$input_data['date_range']);
            echo '<pre>';
            // var_dump($date_range);
            $flash_deal_data=array();
            $flash_deal_data['title']               = $input_data['title'];
            $flash_deal_data['start_date']          = strtotime($date_range[0]);
            $flash_deal_data['end_date']            = strtotime($date_range[1]);
            $flash_deal_data['background_color']    = $input_data['background_color'];
            $flash_deal_data['text_color']          = $input_data['text_color'];
            $flash_deal_data['banner']              = $input_data['banner'];
            $flash_deal_data['updated_at']          = date('Y-m-d H:i:s');
            $res= $this->admin_marketing_model->UPDATE_ROW_DATA('tbl_flash_deals',$flash_deal_data,'id',$flash_id);
            // echo '<pre>';
            // var_dump($flash_deal_data);
            if($res){
                $is_deleted=$this->admin_marketing_model->DESTROY_ROW_DATA('tbl_flash_deal_products','flash_deal_id',$flash_id);
                if($is_deleted){
                    $discount=$input_data['discount'];
                    for($i=0;$i<count($discount);$i++){
                        $discount[$i]['flash_deal_id']=$flash_id;
                        $discount[$i]['created_at']=date('Y-m-d H:i:s');
                        $discount[$i]['updated_at']=date('Y-m-d H:i:s');
                    }
                    $this->admin_marketing_model->ADD_BATCH_DATA('tbl_flash_deal_products',$discount);
                }
                 $this->session->set_flashdata('alert',array('message'=>'Flash deal updated successfully','level'=>'success'));
            }
            
        }
        redirect('admins/marketings');
        
    }
    function update_status(){
        $input_data=$this->input->post();
        $raw_data['status']=$input_data['status'];
        $res=$this->admin_marketing_model->UPDATE_ROW_DATA($input_data['table'],$raw_data,'id',$input_data['id']);
        echo $res;
    }
    function update_featured(){
        $input_data=$this->input->post();
        $raw_data['featured']=$input_data['featured'];
        $res=$this->admin_marketing_model->UPDATE_ROW_DATA($input_data['table'],$raw_data,'id',$input_data['id']);
        echo $res;
    }
    function get_product_discount(){
        $input_data = $this->input->post();
        $products   = $this->admin_marketing_model->GET_PRODUCTS($input_data['product_ids']);
        $data['PRODUCTS']= $products;
        $this->load->view('modules/admin/partials/_product_flash_deals',$data);
    }
    function get_product_discount_edit(){
        $input_data = $this->input->post();
        // echo json_encode($input_data);
        // return;
        $products   = $this->admin_marketing_model->GET_FLASH_DEAL_PRODUCTS_LIST($input_data['flash_deal_id'],$input_data['product_ids']);
        $data['PRODUCTS']= $products;
        $this->load->view('modules/admin/partials/_product_flash_deals',$data);
    }
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomString;
}