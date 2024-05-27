<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 
class customers extends CI_Controller
{
    private $first_link = "<< ";
    private $last_link = " >>";
    private $next_link = " >";
    private $prev_link = "< ";
    private $pagination_config;
    function __construct(){
        parent::__construct();
        $this->load->model('modules/admin/admin_customer_model');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Template');
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('Technos_encryption');
        
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
            $user                                    = $this->admin_customer_model->GET_USER($user_id);
            if($user->user_type=='customer'){
                redirect('users/profile');
                return;
            }
        }
    }
    function index(){
        
        $this->pagination_config['base_url']            = base_url('admins/customers');
        $page                                           = $this->input->get('page') ? $this->input->get('page')-1 : 0 ;
        $data['CUSTOMERS']                              = $this->admin_customer_model->GET_CUSTOMER_LIST($this->pagination_config['per_page'], $page);
        $this->pagination_config['total_rows']          = $this->admin_customer_model->GET_TOTAL_COUNT('tbl_users');
        // Initialize the pagination library
        $this->pagination->initialize($this->pagination_config);
        $data['links']                                  = $this->pagination->create_links();
        // echo '<pre>';
        // var_dump($data['ATTRIBUTES'] );
        // return;
        $this->template->load('templates/admin_layout', 'modules/admin/customer_list_views',$data);
    }
    function login($user){
        // $user_id=$this->input->get('user');
        $user_id=$this->technos_encryption->decryptData(urldecode($user));
        $this->session->set_userdata('SESS_USER_ID',$user_id);
        redirect('users/profile');
    }
    function customer_ban($user){
         $user_id   = $this->technos_encryption->decryptData(urldecode($user));
         
         $user_data      = $this->admin_customer_model->GET_DATA_ROW('tbl_users','id',$user_id,'id,banned');
         if($user_data){
            $is_banned  = $user_data->banned ? 0 : 1;
           
            $data=array('banned'=>$is_banned);
            $res        = $this->admin_customer_model-> UPDATE_ROW_DATA('tbl_users',$data,'id',$user_id);
            $text_ban   = $is_banned == 0 ? 'unbanned' : 'banned';
            if($res){
                 $this->session->set_flashdata('alert',array('message'=>'Customer '.$text_ban.' successfully ' ,'level'=>'success'));
             }else{
                 $this->session->set_flashdata('alert',array('message'=>'Unsuccessful process. Try again','level'=>'error'));
             }
         }
         redirect('admins/customers');
    }
    function destroy($user){
         $user_id=$this->technos_encryption->decryptData(urldecode($user));
         $res=$this->admin_customer_model->DELETE_DATA('tbl_users','id',$user_id);
         if($res){
             $this->session->set_flashdata('alert',array('message'=>'Customer Deleted successfully ' ,'level'=>'success'));
         }else{
             $this->session->set_flashdata('alert',array('message'=>'Unsuccessful process. Try again','level'=>'error'));
         }
         redirect('admins/customers');
    }
}