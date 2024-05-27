<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 
class market_segments extends CI_Controller
{
    private $first_link = "<< ";
    private $last_link = " >>";
    private $next_link = " >";
    private $prev_link = "< ";
    private $pagination_config;
    function __construct(){
        parent::__construct();
        $this->load->model('modules/admin/admin_market_segment_model');
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
            $user                                    = $this->admin_market_segment_model->GET_USER($user_id);
            if($user->user_type=='customer'){
                redirect('users/profile');
                return;
            }
        }
    }
    function index(){
        
        $this->pagination_config['base_url']            = base_url('admins/market_segments');
        $page                                           = $this->input->get('page') ? ($this->input->get('page')-1)*$this->pagination_config['per_page']: 0 ;
        $data['MARKET_SEGMENTS_LIST']                   = $this->admin_market_segment_model->GET_MARKET_SEGMENTS($this->pagination_config['per_page'], $page);
        $this->pagination_config['total_rows']          = $this->admin_market_segment_model->GET_MARKET_SEGMENTS_COUNT();
        $data['CATEGORY_LIST']                          = $this->admin_market_segment_model->GET_LIST_DATA('tbl_categories','id,name');
        // Initialize the pagination library
        $this->pagination->initialize($this->pagination_config);
        $data['links']                                  = $this->pagination->create_links();
        // echo '<pre>';
        // var_dump($data['MARKET_SEGMENTS']);
        // return;
        $this->template->load('templates/admin_layout', 'modules/admin/market_segments_views',$data);
    }
    function save(){
        $input_data=$this->input->post();
        $input_data['category_ids']= $input_data['category_ids'] ? json_encode($input_data['category_ids']) : '[]' ;
        $res=$this->admin_market_segment_model->ADD_ROW_DATA('tbl_market_segments',$input_data);
        redirect('admins/market_segments');
    }
    function edit($id){
        $data['MARKET_SEGMENT_ROW']     = $this->admin_market_segment_model->GET_DATA_ROW('tbl_market_segments','id',$id);
        $data['CATEGORY_LIST']          = $this->admin_market_segment_model->GET_LIST_DATA('tbl_categories','id,name');
        $this->template->load('templates/admin_layout', 'modules/admin/edit_market_segment_views',$data);
    }
    function update($id){
        $input_data=$this->input->post();
        $input_data['category_ids']= $input_data['category_ids'] ? json_encode($input_data['category_ids']) : '[]' ;
        $res=$this->admin_market_segment_model->UPDATE_ROW_DATA('tbl_market_segments',$input_data,'id',$id);
        redirect('admins/market_segments');
    }
    function destroy($id){
        $res=$this->admin_market_segment_model->DESTROY_ROW_DATA('tbl_market_segments','id',$id);
        redirect('admins/market_segments');
    }
}