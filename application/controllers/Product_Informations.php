<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 
class product_informations extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->helper('form');
      $this->load->library('session');
      $this->load->library('Template');
    }

    public function index(){
        $data['title'] = 'My foo page';
        $this->template->load('views_layout', 'client_page/product_information_views', $data);
    }
}