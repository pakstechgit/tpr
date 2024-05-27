<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 
class Aiz_uploader extends CI_Controller
{
    private $first_link = "<< ";
    private $last_link = " >>";
    private $next_link = " >";
    private $prev_link = "< ";
    private $pagination_config;
    function __construct()
    {
      parent::__construct();
        $this->load->model('modules/uploads_model');
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
            $user                                    = $this->uploads_model->GET_USER($user_id);
            if($user->user_type=='customer'){
                redirect('users/profile');
                return;
            }
        }
    }

    public function index(){
        $this->load->view('modules/aiz_uploader/aiz_uploader_views');
    }
    function get_uploaded_files(){
        $search = $this->input->get('search');
        $sort   = $this->input->get('sort');
        $data['data']=$this->uploads_model->GET_LIST_FILES($search,$sort);
        echo json_encode($data);
        
    }
    function get_preview_files() {
        $ids= $this->input->post('ids');
        $file=$this->uploads_model->GET_FILE($ids);
        echo json_encode($file);
        // $ids = explode(',', >get('ids'));
        // $files = $this->Upload_model->where_in('id', $ids)->get_all();
        // $new_file_array = [];
        // Your code to process the files and populate the new file array
    }
    function upload(){
        $csrfToken = $this->input->get_request_header('X-CSRF-TOKEN', TRUE);

        if ($csrfToken !== $this->security->get_csrf_hash()) {
            // CSRF token verification failed
            $this->output->set_status_header(403);
            echo json_encode(['error' => 'CSRF token verification failed']);
            return;
        }
        $file=$_FILES['aiz_file'];
        $config['upload_path']          = './uploads/all';
        $config['allowed_types']        = '*';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('aiz_file'))
        {
            $response =  $this->upload->data();
            $data['file_name']          = 'uploads/all/'.$response['orig_name'];
            $data['file_original_name'] = $response['raw_name'];
            $data['file_size']          = $response['file_size'];
            $data['extension']          = trim($response['file_ext'], ".");
            $data['type']               = $response['is_image']? 'image':trim($response['file_ext'], ".");  
            $this->uploads_model->UPLOAD_DATA($data);
            echo json_encode($response);
        }
       
    }
    function upload_files(){
        $this->pagination_config['base_url']            = base_url('upload/upload-files');
        $page                                           = $this->input->get('page') ? $this->input->get('page')-1 : 0 ;
        $data['FILES']                                  = $this->uploads_model->GET_UPLOADED_FILES($this->pagination_config['per_page'], $page);
        $this->pagination_config['total_rows']          = $this->uploads_model->GET_TOTAL_UPLOADED_FILES_COUNT();
        // Initialize the pagination library
        $this->pagination->initialize($this->pagination_config);
        $data['links']                                  = $this->pagination->create_links();
        $this->template->load('templates/admin_layout', 'modules/admin/upload_file_views',$data);
    }
}