<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 
class Home extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->helper('form');
      $this->load->library('session');
      $this->load->library('Template');
      $this->load->model('modules/home_model');
    }

    public function index(){
        $feature_categories            = $this->home_model->GET_FEATURED_CATEGORIES();
        $data['FEATURED_CAT']          = array();
        $data['FEATURED_TAB']          = array();
        $index=0; 
        foreach($feature_categories as $category){
            $data['FEATURED_CAT'][]=array('category_name'=>$category->name,
            'products'=>$this->home_model->GET_FEATURED_PRODUCTS($category->name),
            'tab_id'=>str_replace(' ', '_', strtolower($category->name))
            );
            $data['FEATURED_TAB'][$index]['tab_id']=str_replace(' ', '_', strtolower($category->name));   
            $data['FEATURED_TAB'][$index]['tab_name']=$category->name;
            $index++; 
        }
        $home_banners               = $this->home_model->GET_DATA_ROW('tbl_business_settings','type','home_banners','id,type,value') ;
        $home_physician_care        = $this->home_model->GET_DATA_ROW('tbl_business_settings','type','home_physician_care','id,type,value') ;
        $data['HOME_BANNERS']       = array();
        $data['PHYCIAN_CARE']       = array();
        if($home_banners){
            $banners=json_decode($home_banners->value);
            foreach($banners as $banner){
                $banner_image= $this->home_model->GET_DATA_ROW('tbl_uploads','id',$banner->image,'id,file_name');
                if($banner_image){
                    $banner->image=$banner_image->file_name;
                    $data['HOME_BANNERS'][]=$banner;
                }
                
            }
        }
        $data['NEW_PRODUCTS']       = $this->home_model->GET_NEW_PRODUCTS();
        if($home_physician_care){
            // $value=json_decode($home_physician_care->value);
            $data['PHYCIAN_CARE']=json_decode($home_physician_care->value);
            $cover_image= $this->home_model->GET_DATA_ROW('tbl_uploads','id',$data['PHYCIAN_CARE']->cover_image,'id,file_name');
            $data['PHYCIAN_CARE']->cover_image=$cover_image->file_name;
            foreach($data['PHYCIAN_CARE']->images as $index => $image){
                $image_file= $this->home_model->GET_DATA_ROW('tbl_uploads','id',$image->image,'id,file_name');
                $data['PHYCIAN_CARE']->images[$index]->image= $image_file? $image_file->file_name:'';
            }
        }
        
        // echo '<pre>';
        // var_dump($data['PHYCIAN_CARE']);
        // return;
        $this->template->load('templates/client_template', 'client_page/homepage/homepage_2_views',$data);
        // $this->template->load('templates/views_layout', 'client_page/homepage/homepage_views',$data);
        
    }
    function home_tailwind(){
        $this->template->load('templates/client_template', 'client_page/homepage/homepage_2_views');
    }
    public function about_us()
    {
    
        $this->template->load('templates/views_layout', 'client_page/about_us/about_us_views');
    }

    public function become_a_dealer()
    {
        $this->template->load('templates/client_template', 'client_page/become_a_dealer/become_a_dealer_views');
    
        // $this->template->load('templates/views_layout', 'client_page/become_a_dealer/become_a_dealer_views');
    }

    public function latest_news()
    {
        $this->template->load('templates/views_layout', 'client_page/latest_news/latest_news_views');
    }

    public function shop_all_products()
    {
        $this->template->load('templates/views_layout', 'client_page/shop_all_product/shop_all_product_views');
    }

    public function contact_us()
    {
        $this->template->load('templates/client_template', 'client_page/contact_us/contact_us_views');
        // $this->template->load('templates/views_layout', 'client_page/contact_us/contact_us_views');
    }
    
}