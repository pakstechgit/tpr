<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('Template');
        $this->load->library('session');
    }

    public function show_404() {
        $this->output->set_status_header('404');
        // $this->load->view('errors/404');
        $this->template->load('templates/views_layout', 'errors/404');
        // echo 'Something went wrong';
    }
    public function show_204() {
        $this->output->set_status_header('204');
        // $this->load->view('errors/404');
        $this->template->load('templates/views_layout', 'errors/404');
        // echo 'Something went wrong';
    }
}