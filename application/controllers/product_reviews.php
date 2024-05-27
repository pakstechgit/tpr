<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 


class product_reviews extends CI_Controller
{
    public function index()
    {
        $this->load->model('modules/product_reviews_model');
        
        $data['results'] = $this->product_reviews_model->GET_REVIEWS();

        $this->load->view('modules/product_reviews/product_review_views', $data);
    }


}