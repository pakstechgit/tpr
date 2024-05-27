<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 

class brands extends CI_Controller
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
    
        $this->template->load('templates/client_template', 'client_page/brand_views');
    }
}