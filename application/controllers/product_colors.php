<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 


class product_colors extends CI_Controller
{
    public function index()
    {
        $this->load->model('modules/product_color_model');
        
        $data['results'] = $this->product_color_model->GET_ALL_COLORS();

        $this->load->view('modules/product_colors/product_color_views', $data);
    }

    public function edit_color($color_id)
    {
        $this->load->model('modules/product_color_model');

        $data['results'] = $this->product_color_model->GET_COLOR($color_id);

        // var_dump($data);

        $this->load->view('modules/product_colors/edit_color_views', $data);
    }

    public function update_color()
    {
        $this->load->model('modules/product_color_model');

        $color_id = $this->input->post('id');
        $name = $this->input->post('name');
        $code = $this->input->post('code');

        $this->product_color_model->UPDATE_COLOR( $color_id, $name, $code);

        redirect('product_colors');

    }


    public function add_color()
    {
        $this->load->model('modules/product_color_model');

        $name = $this->input->post('name');
        $code = $this->input->post('code');

        $this->product_color_model->ADD_COLOR($name, $code);

        redirect('product_colors');

    }

    public function delete_color($color_id)
    {
        $this->load->model('modules/product_color_model');
        $this->product_color_model->DELETE_COLOR($color_id);

    
        redirect('product_colors');
    }


}