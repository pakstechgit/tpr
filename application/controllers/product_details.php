<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();
class product_details extends CI_Controller
{
    public function index()
    {
        $this->load->model('modules/products_category_model');

        $data['results'] = $this->products_category_model->GET_CATEGORY();

        // var_dump($data);

        $this->load->view('modules/product_category/category_views', $data);
    }

    public function add_new_category()
    {
        $this->load->view('modules/product_category/add_category_views');
    }

    public function edit_category()
    {
        $this->load->view('modules/product_category/edit_category_views');
    }

    public function update_feature()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $this->load->model('modules/products_category_model');

        $featureValue = $this->input->post('feature');

        $idValue = $this->input->post('id');

        $updateResult = $this->products_category_model->UPDATE_FEATURE($featureValue, $idValue);

        echo json_encode($updateResult);
    }

    public function add_category()
    {
        $name = $this->input->post('name');
        $parent = $this->input->post('parent');
        $level = $this->input->post('level');
        $name = $this->input->post('name');
        $name = $this->input->post('name');
    }
}
