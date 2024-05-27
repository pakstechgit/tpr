<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 

class product_brands extends CI_Controller
{
    public function index()
    {
        $this->load->model('modules/product_brands_model');

        $data['results'] = $this->product_brands_model->GET_ALL_BRAND_INFO();

        $this->load->view('modules/product_brand/brand_views', $data);
    }

    public function edit_brand($brand_id)
    {
        $this->load->model('modules/product_brands_model');

        $data['results'] = $this->product_brands_model->GET_BRAND_INFO($brand_id);

        var_dump($data);

        $this->load->view('modules/product_brand/edit_brand_views', $data);
    }

    public function create_brand()
    {
        $this->load->model('modules/product_brands_model');

        $name = $this->input->post('name');
        $logo = $this->input->post('logo');
        $meta_title = $this->input->post('meta_title');
        $meta_description = $this->input->post('meta_description');

        $this->product_brands_model->INSERT_NEW_BRAND($name, $logo, $meta_title, $meta_description);

        // redirect('modules/product_brand/brand_views');
    }
}