<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

class product_attributes extends CI_Controller
{
    public function index()
    {
        $this->load->model('modules/product_attribute_model');

        $data['results'] = $this->product_attribute_model->GET_ATTRIBUTES();

        $grouped_results = array();
        foreach ($data['results'] as $result) {
            $attribute_id = $result->id;
            if (!isset($grouped_results[$attribute_id])) {
                $grouped_results[$attribute_id] = new stdClass();
                $grouped_results[$attribute_id]->id = $result->id;
                $grouped_results[$attribute_id]->name = $result->name;
                $grouped_results[$attribute_id]->values = array($result->value);
            } else {
                $grouped_results[$attribute_id]->values[] = $result->value;
            }
        }

        // Convert the associative array back to a sequential array
        $data['results'] = array_values($grouped_results);

        var_dump($data);

        $this->load->view('modules/product_attributes/product_attribute_views', $data);
    }
    

    public function edit_attribute($attribute_id)
    {
        $this->load->model('modules/product_attribute_model');

        $data['results'] = $this->product_attribute_model->GET_SPECIFIC_ATTR($attribute_id);

        $this->load->view('modules/product_attributes/edit_attribute_views', $data);

    }
}
