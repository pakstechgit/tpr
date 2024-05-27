<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 
class Videos extends CI_Controller
{
     function __construct()
    {
      parent::__construct();
      $this->load->model('modules/products_model');
      $this->load->helper('form');
      $this->load->library('session');
      $this->load->library('Template');
    }

    function index(){
         $this->template->load('views_layout', 'client_page/video_views');
    }
}