<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 
class attributes extends CI_Controller
{
    private $first_link = "<< ";
    private $last_link = " >>";
    private $next_link = " >";
    private $prev_link = "< ";
    private $pagination_config;
    function __construct(){
        parent::__construct();
        $this->load->model('modules/admin/admin_attribute_model');
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
            $user                                    = $this->admin_attribute_model->GET_USER($user_id);
            if($user->user_type=='customer'){
                redirect('users/profile');
                return;
            }
        }
    }
    function index(){
        
        $this->pagination_config['base_url']            = base_url('admins/attributes');
        $page                                           = $this->input->get('page') ? $this->input->get('page')-1 : 0 ;
        $data['ATTRIBUTES']                             = $this->admin_attribute_model->GET_ATTRIBUTE_LIST($this->pagination_config['per_page'], $page);
        $this->pagination_config['total_rows']          = $this->admin_attribute_model-> GET_TOTAL_COUNT('tbl_attributes');
        // Initialize the pagination library
        $this->pagination->initialize($this->pagination_config);
        $data['links']                                  = $this->pagination->create_links();
        // echo '<pre>';
        // var_dump($data['ATTRIBUTES'] );
        // return;
        $this->template->load('templates/admin_layout', 'modules/admin/admin_attribute_views',$data);
    }
    function save(){
        $input_data=$this->input->post();
        $this->admin_attribute_model->ADD_DATA('tbl_attributes',$input_data);
        $this->session->set_flashdata('alert',array('message'=>'Attribute has been inserted successfully','level'=>'success'));
        redirect('admins/attributes');
    }
    function edit($id){
        $data['ATTRIBUTE']=$this->admin_attribute_model->GET_DATA_ROW('tbl_attributes','id',$id);
        $this->template->load('templates/admin_layout', 'modules/admin/edit_attribute_views',$data);
    }
    function update($id){
        $input_data=$this->input->post();
        $res=$this->admin_attribute_model->UPDATE_ROW_DATA('tbl_attributes',$input_data,'id',$id);
        $this->session->set_flashdata('alert',array('message'=>'Attribute has been updated successfully','level'=>'success'));
        redirect('admins/attributes');
    }
    function destroy($id){
        $res=$this->admin_attribute_model->DESTROY_ROW_DATA('tbl_attributes','id',$id);
         if($res){
             $this->session->set_flashdata('alert',array('message'=>'Attribute has been deleted successfully','level'=>'success'));
         }else{
             $this->session->set_flashdata('alert',array('message'=>'Attribute has deleted unsuccessfully','level'=>'error'));
         }
         redirect('admins/attributes');
    }
    function setup($id){
        $data['ATTRIBUTE_VALUES']=$this->admin_attribute_model->GET_ATTRIBUTE_VALUES($id);
        $data['ATTRIBUTE']=$this->admin_attribute_model->GET_DATA_ROW('tbl_attributes','id',$id);
        $this->template->load('templates/admin_layout', 'modules/admin/setup_attribute_views',$data);
    }
    function add_attribute_vallues(){
        $input_data=$this->input->post();
        $this->admin_attribute_model->ADD_DATA('tbl_attribute_values',$input_data);
        $this->session->set_flashdata('alert',array('message'=>'Attribute has been inserted successfully','level'=>'success'));
        redirect('admins/attributes/setup/'.$input_data['attribute_id']);
    }
    function edit_attribute_value($id){
        $data['ATTRIBUTE_VALUE']=$this->admin_attribute_model->GET_DATA_ROW('tbl_attribute_values','id',$id);
        $this->template->load('templates/admin_layout', 'modules/admin/edit_attribute_value_views',$data);
    }
        function update_attribute_value($id){
            $input_data=$this->input->post();
            $res=$this->admin_attribute_model->UPDATE_ROW_DATA('tbl_attribute_values',$input_data,'id',$id);
            $this->session->set_flashdata('alert',array('message'=>'Attribute value has been updated successfully','level'=>'success'));
            redirect('admins/attributes/setup/'.$input_data['attribute_id']);
        }
    function delete_attribute_value($id){
        $attr_id=$this->input->get('attr-val');
        $res=$this->admin_attribute_model->DESTROY_ROW_DATA('tbl_attribute_values','id',$id);
        if($res){
             $this->session->set_flashdata('alert',array('message'=>'Attribute value has been deleted successfully','level'=>'success'));
        }else{
             $this->session->set_flashdata('alert',array('message'=>'Attribute value has deleted unsuccessfully','level'=>'error'));
        }
        redirect('admins/attributes/setup/'.$attr_id);
    }
}