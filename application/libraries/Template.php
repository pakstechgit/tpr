<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Template {
    var $template_data = array();
    function __construct(){
            $this->CI =& get_instance();
            $this->CI->load->model('modules/header_model');
    }
    function set($name, $value) {
        $this->template_data[$name] = $value;
    }
    function load($template = '', $view = '', $view_data = array(), $return = FALSE){
    //   $this->CI = &get_instance();
    // GET_DATA_ROW($table,$item,$value,$columns='*')
    $disposable     = $this->CI->header_model->GET_DATA_ROW('tbl_categories','name','Disposable Medical Supplies',"id,name");
    $durable        = $this->CI->header_model->GET_DATA_ROW('tbl_categories','name','Durable Medical Equipment',"id,name");
    $market_segments= $this->CI->header_model->GET_LIST_DATA('tbl_market_segments',"id,name","name","asc");
    $brand_list     = $this->CI->header_model->GET_LIST_DATA('tbl_brands','id,name,category_ids',"name","asc");
    $view_data['DISPOSABLES']= $disposable ? $disposable  : array();
    if(!empty($view_data['DISPOSABLES'])){
     $view_data['DISPOSABLES']->SUBCATEGORIES=array();   
    }
   
    $view_data['DURABLES']= $durable? $durable : array();
    if(!empty($view_data['DURABLES'])){
     $view_data['DURABLES']->SUBCATEGORIES=array();  
    }
    $view_data['MARKET_SEGMENTS']= $market_segments ? $market_segments : array();
    if($view_data['DISPOSABLES']){
         $view_data['DISPOSABLES']->SUB_CATEGORIES=$this->CI->header_model-> GET_PRODUCT_BY_PARENT_ID($view_data['DISPOSABLES']->id);
    }
    if($view_data['DURABLES']){
         $view_data['DURABLES']->SUB_CATEGORIES=$this->CI->header_model->GET_PRODUCT_BY_PARENT_ID($view_data['DURABLES']->id);
    }
    // return;
    $view_data['BRAND_TABS']        = array();
    $view_data['BRAND_TAB_CONTENT'] = array();
    foreach($brand_list as $brand){
      $brand_tab                        = array();
      $brand_tab_content                = array();
      $tab_id                           = str_replace(' ', '_', strtolower($brand->name.'-'.$brand->id));
      $brand_tab['tab_id']              = $tab_id;
      $brand_tab['name']                = $brand->name;
      $categories                       = $this->CI->header_model->GET_BRAND_CATEGORIES(json_decode($brand->category_ids));
      $brand_tab_content['tab_id']      = $tab_id;
      $brand_tab_content['categories']  = $categories;

      // var_dump($categories);
      $view_data['BRAND_TABS'][]        = $brand_tab;
      $view_data['BRAND_TAB_CONTENT'][] = $brand_tab_content;
    }
      $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));   
      return $this->CI->load->view($template, $this->template_data, $return);
    }
}
/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */