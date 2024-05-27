<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 
class setups extends CI_Controller
{
    private $first_link = "<< ";
    private $last_link = " >>";
    private $next_link = " >";
    private $prev_link = "< ";
    private $pagination_config;
    function __construct(){
        parent::__construct();
        $this->load->model('modules/admin/admin_setup_model');
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
            $user                                    = $this->admin_setup_model->GET_USER($user_id);
            if($user->user_type=='customer'){
                redirect('users/profile');
                return;
            }
        }
    }
    function index(){
        
        $this->pagination_config['base_url']            = base_url('admins/setups');
        $page                                           = $this->input->get('page') ? $this->input->get('page')-1 : 0 ;
        $data['ATTRIBUTES']                             = $this->admin_setup_model->GET_ATTRIBUTE_LIST($this->pagination_config['per_page'], $page);
        $this->pagination_config['total_rows']          = $this->admin_setup_model-> GET_TOTAL_COUNT('tbl_attributes');
        // Initialize the pagination library
        $this->pagination->initialize($this->pagination_config);
        $data['links']                                  = $this->pagination->create_links();
        // echo '<pre>';
        // var_dump($data['ATTRIBUTES'] );
        // return;
        $this->template->load('templates/admin_layout', 'modules/admin/admin_attribute_views',$data);
    }
    function shipping_configuration(){
        $data=array();
        $this->template->load('templates/admin_layout', 'modules/admin/shipping_configuration_views',$data);
    }
    
    function shipping_countries(){
        $this->pagination_config['base_url']            = base_url('admins/setups/shipping_countries');
        $page                                           = $this->input->get('page') ? $this->input->get('page')-1 : 0 ;
        $search                                         = $this->input->get('sort_country');
        $data['COUNTRIES']                              = $this->admin_setup_model->GET_LIST_COUNTRIES($this->pagination_config['per_page'], $page,$search);
        $this->pagination_config['total_rows']          = $this->admin_setup_model->GET_TOTAL_COUNT('tbl_countries',$search);
        // Initialize the pagination library
        $this->pagination->initialize($this->pagination_config);
        $data['links']                                  = $this->pagination->create_links();
        $this->template->load('templates/admin_layout', 'modules/admin/shipping_country_views',$data);
    }
    function update_country_status(){
        $input_data=$this->input->post();
        $res=$this->admin_setup_model->UPDATE_ROW_DATA('tbl_countries',$input_data,'id',$input_data['id']);
        echo $res;
        
    }
    function shipping_states(){
        $this->pagination_config['base_url']            = base_url('admins/setups/shipping_states');
        $page                                           = $this->input->get('page') ? $this->input->get('page')-1 : 0 ;
        $country_id                                     = $this->input->get('sort_country'); 
        $state                                          = $this->input->get('sort_state');
        if($state || $country_id){
            $this->pagination_config['base_url']            = base_url('admins/setups/shipping_states?sort_state='.$state.'&sort_country='.$country_id);
        }
        $data['STATES']                                 = $this->admin_setup_model->GET_LIST_STATES($this->pagination_config['per_page'], $page,$country_id,$state);
        $this->pagination_config['total_rows']          = $this->admin_setup_model->GET_TOTAL_STATE_COUNT($country_id,$state);
        $data['COUNTRIES']                              = $this->admin_setup_model->GET_COUNTRIES();
        $data['COUNTRY_ID']                             = $country_id;
        // Initialize the pagination library
        $this->pagination->initialize($this->pagination_config);
        $data['links']                                  = $this->pagination->create_links();
        $this->template->load('templates/admin_layout', 'modules/admin/shipping_state_views',$data);
    }
    function add_state(){
        $input_data=$this->input->post();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('name', 'State Name', 'required');
        $this->form_validation->set_rules('country_id', 'Country', 'required');
        if ($this->form_validation->run() == FALSE){
            // redirect('admins/setups/shipping_states');
        }
        else{
            $input_data['created_at']=date('Y-m-d H:i:s');
            $input_data['updated_at']=date('Y-m-d H:i:s');
            $res=$this->admin_setup_model->ADD_ROW_DATA('tbl_states',$input_data);
            if($res){
                $this->session->set_flashdata('alert',array('message'=>'New state added successfully','level'=>'success'));
            
            }else{
                $this->session->set_flashdata('alert',array('message'=>'Unable to add new state','level'=>'error'));
            }
        }
        redirect('admins/setups/shipping_states');
        
}
    function edit_shipping_state($id){
        $data['COUNTRIES']          = $this->admin_setup_model->GET_COUNTRIES();
        $data['STATE']              = $this->admin_setup_model->GET_DATA_ROW('tbl_states','id',$id,$columns='id,name,country_id');
        $this->template->load('templates/admin_layout', 'modules/admin/edit_shipping_state_views',$data);
    }
    function update_shipping_state($id){
        $input_data=$this->input->post();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('name', 'State Name', 'required');
        $this->form_validation->set_rules('country_id', 'Country', 'required');
        if ($this->form_validation->run() == FALSE){
            // redirect('admins/setups/shipping_states');
        }
        else{
            $input_data['updated_at']=date('Y-m-d H:i:s');
            $res=$this->admin_setup_model->UPDATE_ROW_DATA('tbl_states',$input_data,'id',$id);
            if($res){
                $this->session->set_flashdata('alert',array('message'=>'State updated successfully','level'=>'success'));
            
            }else{
                $this->session->set_flashdata('alert',array('message'=>'Unable to update state','level'=>'error'));
            }
        }
        redirect('admins/setups/shipping_states');
    }
    function update_status(){
        $input_data=$this->input->post();
        $table=$input_data['table'];
        unset($input_data['table']);
        $input_data['updated_at']=date('Y-m-d H:i:s');
        $res=$this->admin_setup_model->UPDATE_ROW_DATA($table,$input_data,'id',$input_data['id']);
        echo $res;
        
    }
}