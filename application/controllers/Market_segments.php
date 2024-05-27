<?php defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

class market_segments extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('modules/market_segment_model');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Template');
    }


    function index() {
        $data['MARKET_SEGMET_LIST']     = array();
        $category_param                 = $this->input->get('category');
        $market_param                   = $this->input->get('market');
        $market_segments=$this->market_segment_model->GET_LIST_DATA('tbl_market_segments','id,name,category_ids',"name");
        foreach($market_segments as $segment){
            $segment_data=array();
            $segment_data['id']             = $segment->id;
            $segment_data['name']           = $segment->name;
            $segment_data['categories']     = $this->market_segment_model->GET_SEGMENT_CATEGORIES(json_decode($segment->category_ids));   
            $data['MARKET_SEGMET_LIST'][]   =$segment_data;
        }
        $categories         = array();
        $market_id_active   = '';
        // $data['MARKET_SEGMET_LIST'] ? $data['MARKET_SEGMET_LIST'][0]['categories'] : '';
        if($data['MARKET_SEGMET_LIST']){
            $categories=$data['MARKET_SEGMET_LIST'][0]['categories'];
            $market_id_active=$data['MARKET_SEGMET_LIST'][0]['id'];
        }
        $data['PRODUCTS']= array();
        foreach($categories as $category){
            if($category_param && $category->id==$category_param){
                $category->product=$this->market_segment_model->GET_PRODOCT_BY_CATEGORY($market_param,$category->id);
                $data['PRODUCTS'][]=$category;
                break;
            }
            if(!$category_param){
                $category->product=$this->market_segment_model->GET_PRODOCT_BY_CATEGORY($market_id_active,$category->id);
                $data['PRODUCTS'][]=$category;
            }
            
        }
        // echo '<pre>';
        // var_dump($categories);
        // return;
        $data['market_id']     = $market_param ? $market_param : $market_id_active ;
        $data['category_id']   = $category_param;
        // $category_arr = array_map("extractCategoryId", $categories);
        $this->template->load('templates/client_template', 'client_page/market_we_serve_views.php',$data);
    }
}
function extractCategoryId($category){
    return $category->id;
}