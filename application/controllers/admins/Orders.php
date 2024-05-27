<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 
// admin

// include 'system/libraries/QRcode/qrimage.php'; 

class Orders extends CI_Controller
{
    private $first_link = "<< ";
    private $last_link = " >>";
    private $next_link = " >";
    private $prev_link = "< ";
    private $pagination_config;
    function __construct(){
        parent::__construct();
        $this->load->model('modules/admin/admin_order_model');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Template');
        $this->load->library('Technos_encryption');
        $this->load->library('QRCodeLib');
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
            $user                                    = $this->admin_order_model->GET_USER($user_id);
            if($user->user_type=='customer'){
                redirect('users/profile');
                return;
            }
        }
    }
    function index(){
        
        $this->pagination_config['base_url']         = base_url('admins/orders');
        $page                       = $this->input->get('page') ? ($this->input->get('page')-1)*$this->pagination_config['per_page'] : 0 ;
        $data['ORDERS']             = $this->admin_order_model->GET_ORDER_LISTS($this->pagination_config['per_page'], $page);
        $this->pagination_config['total_rows']       = $this->admin_order_model->GET_NUM_ALL_ORDER();
        // Initialize the pagination library
        $this->pagination->initialize($this->pagination_config);
        $data['links'] = $this->pagination->create_links();
        
        // echo '<pre>';
        // var_dump($data['ORDERS']);
        // return;
        $this->template->load('templates/admin_layout', 'modules/admin/order_lists_views',$data);
    }
    function product($param){
        $order_id=$this->technos_encryption->decryptData($param);
        $data['ORDER']=$this->admin_order_model->GET_ORDER_USER_DATA($order_id);
        $data['ORDER_DETAILS']=$this->admin_order_model->GET_ORDER_DETAILS($order_id);
        // echo '<pre>';
        // var_dump($data['ORDER_DETAILS']);
        // return;
        $this->template->load('templates/admin_layout', 'modules/admin/show_customer_order_views',$data);
    }
}