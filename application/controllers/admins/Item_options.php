<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 
// admin
class item_options extends CI_Controller
{
    private $first_link = "<< ";
    private $last_link = " >>";
    private $next_link = " >";
    private $prev_link = "< ";
    private $pagination_config;
    function __construct(){
        parent::__construct();
        $this->load->model('modules/admin/admin_item_option_model');
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
            $user                                    = $this->admin_item_option_model->GET_USER($user_id);
            if($user->user_type=='customer'){
                redirect('users/profile');
                return;
            }
        }
    }
    function index(){
        
        $this->pagination_config['base_url']         = base_url('admins/item_options');
        $page                       = $this->input->get('page') ? $this->input->get('page')-1 : 0 ;
        $data['OPTIONS']            = $this->admin_item_option_model-> GET_ITEM_OPTIONS($this->pagination_config['per_page'], $page);
        $this->pagination_config['total_rows']       = $this->admin_item_option_model->GET_ITEM_OPTIONS_COUNT();
        // Initialize the pagination library
        $this->pagination->initialize($this->pagination_config);
        $data['links'] = $this->pagination->create_links();
        $this->template->load('templates/admin_layout', 'modules/admin/item_options_views',$data);
    }
    function save(){
        $input_data=$this->input->post();
        $this->admin_item_option_model->ADD_ROW_DATA('tbl_item_options',$input_data);
        $this->session->set_flashdata('alert',array('message'=>'Item Option has been inserted successfully','level'=>'success'));
        redirect('admins/item_options');
    }
    function edit($id){
        $data['OPTION']=$this->admin_item_option_model->GET_DATA_ROW('tbl_item_options','id',$id);
        $this->template->load('templates/admin_layout', 'modules/admin/edit_item_option_views',$data);
    }
    function update($id){
        $input_data=$this->input->post();

        $res=$this->admin_item_option_model->UPDATE_ROW_DATA('tbl_item_options',$input_data,'id',$id);
        $this->session->set_flashdata('alert',array('message'=>'Item Option has been updated successfully','level'=>'success'));
        redirect('admins/item_options');
    }
    function destroy($id){
        $res=$this->admin_item_option_model->DESTROY_ROW_DATA('tbl_item_options','id',$id);
        if($res){
            $this->session->set_flashdata('alert',array('message'=>'Item Option has been deleted successfully','level'=>'success'));
        }else{
            $this->session->set_flashdata('alert',array('message'=>'Item Option has deleted unsuccessfully','level'=>'error'));
        }
        redirect('admins/item_options');
   }
}