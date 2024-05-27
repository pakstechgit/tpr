<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

class login extends CI_Controller

{
    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Template');
        $this->load->model('modules/login_model');
      }

    public function index()
    {
        $user_id        = $this->session->userdata('SESS_USER_ID');
        if($user_id){
            redirect('users/profile');
            return;
        }
        $this->template->load('templates/client_template', 'client_page/login/login_views');
        // $this->template->load('templates/views_layout', 'client_page/login/login_views');
    }
    function login_user(){
        $this->load->library('user_agent');
        $this->load->helper('url');
        $input_data = $this->input->post();
        $user       = $this->login_model->GET_USER_BY_EMAIL($input_data['email']);
        // echo '<pre>';
        // var_dump($user);
        // return;
        // echo '<pre>';
        // var_dump($input_data);
        // var_dump($user);
        // echo $input_data['email'];
        // return;
        if(!$user){
            $this->session->set_flashdata('ERR','No user found');
            redirect('login');
            return;
        }
        
        if(password_verify($input_data['password'] . $user->salt_code, $user->password)){
            $this->session->set_userdata('SESS_USER_ID', $user->id);
            if($user->user_type=='customer'){
                redirect('users/profile');
                return;
            }
            if($user->user_type=='admin'){
                redirect('admins/dashboard');
            }
           
            
        }else{
            $this->session->set_flashdata('ERR','Wrong password');
        }
        redirect($this->agent->referrer());
    }
    function admin(){
        $user_id                           = $this->session->userdata('SESS_USER_ID');
        if(!$user_id){
            $this->load->view('modules/admin/admin_login_views');
            return;
        }
    }
    function admin_logout(){
        $this->session->sess_destroy();
        redirect('admin');
    }
    function logout_user(){
        $this->session->sess_destroy();
        redirect('login');
    }
}