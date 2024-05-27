<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

class forgot_password extends CI_Controller

{
    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Template');
      }

    public function index()
    {
        $data['title'] = 'TPR Login';
        $this->template->load('views_layout', 'client_page/login/forgot_password_views', $data);
    }
    public function otp()
    {
        $data['title'] = 'TPR OTP';
        $this->template->load('views_layout', 'client_page/login/otp_views', $data);
    }
}