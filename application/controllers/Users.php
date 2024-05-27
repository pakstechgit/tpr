<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

class users extends CI_Controller

{
    function __construct(){
        parent::__construct();
        $this->load->model('modules/user_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Template');
    }
    function index()
    {
        redirect('users/profile');
        // $data['title'] = 'TPR Login';
        // $this->template->load('templates/views_layout', 'client_page/login/login_views', $data);
    }
    private function check_user(){
        $user_id        = $this->session->userdata('SESS_USER_ID');
        if(!$user_id){
            redirect('login');
        }
    }

    function profile(){
        $this->check_user();
        $user_id        = $this->session->userdata('SESS_USER_ID');
        $data['USER']   = $this->user_model->GET_USER($user_id);
        $this->template->load('templates/client_template', 'client_page/users/user_profile_views', $data);
    }
    function personal_information(){
        $this->template->load('templates/views_layout', 'client_page/users/user_personal_information_views');
    }
    function address_book(){
        $this->template->load('templates/views_layout', 'client_page/users/user_address_book_views');
    }
    function payment_methods(){
        $this->template->load('templates/views_layout', 'client_page/users/user_payment_method_views');
    }
    function order_trackings(){
        $this->template->load('templates/views_layout', 'client_page/users/user_order_tracking_views');
    }
    function signup(){
        $this->template->load('templates/client_template', 'client_page/users/signup_user_views');
    }
    function create(){
        $input_data                 = $this->input->post();
        $this->load->helper(array('form', 'url'));
        // This function is called when user tried to create an account it will validates first the input before saving the data
        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('first_name', 'First Name', 'required|min_length[2]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|min_length[2]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_users.email]',
        array(
                'is_unique' => 'This email already exists.'
            )
        );
        
        if ($this->form_validation->run() == FALSE){
                echo '<pre>';
                var_dump(validation_errors());
                
                $email_error=form_error('email');
                $this->session->set_flashdata('email_err',$email_error);
                $this->session->set_tempdata('temp_fname',$input_data['first_name'], 300);
                $this->session->set_tempdata('temp_lname',$input_data['last_name'], 300);
                $this->session->set_tempdata('temp_email',$input_data['email'], 300);
                // echo $email_error;
                redirect('signup');
        }
        else{
            $salt                       = password_hash(uniqid(), PASSWORD_BCRYPT);
            $password                   = $input_data['password'];
            $encrypted_password         = password_hash($password . $salt, PASSWORD_BCRYPT);
            $post_data['first_name']    = $input_data['first_name'];
            $post_data['last_name']     = $input_data['last_name'];
            $post_data['email']         = $input_data['email'];
            $post_data['password']      = $encrypted_password;
            $post_data['salt_code']     = $salt;
            $post_data['name']          = $input_data['first_name'].' '.$input_data['last_name'];
            $res                        = $this->user_model->ADD_USER($post_data);
            $this->session->set_userdata('SESS_USER_ID', $res);
            if($res){
                redirect('users/profile');
            }
            // var_dump($post_data);
            // encrypt password if input are valid   
               
        }
    }
}