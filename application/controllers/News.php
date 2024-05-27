<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 

class news extends CI_Controller
{
     function __construct()
    {
      parent::__construct();
      $this->load->model('modules/products_model');
      $this->load->helper('form');
      $this->load->library('session');
      $this->load->library('Template');
    }

    public function index(){
      // $this->load->view('client_page/news_views');
      $this->template->load('templates/client_template', 'client_page/news_views');
    }

}