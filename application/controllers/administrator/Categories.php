<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 
class Categories extends CI_Controller{
    private $first_link = "<< ";
    private $last_link = " >>";
    private $next_link = " >";
    private $prev_link = "< ";
    private $pagination_config;
    function __construct(){
        parent::__construct();
        $this->load->model('modules/admin_model');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('Template');
        $this->load->library('pagination');
        $this->load->library('session');
        $this->pagination_config['attributes']       = ['class' => 'page-link'];
        $this->pagination_config['full_tag_open']    = '<nav><ul class="pagination">';
        $this->pagination_config['full_tag_close']   = '</ul></nav>';
        $this->pagination_config['cur_tag_open']     ='<li class="page-item active" aria-current="page"><a class="page-link" >';
        $this->pagination_config['prev_tag_open']    = '<li class="page-item">';
        $this->pagination_config['cur_tag_close']    = '</a></li>';
        $this->pagination_config['prev_tag_close']   = '</li>';
        $this->pagination_config['first_link']       = $this->first_link;
        $this->pagination_config['last_link']        = $this->last_link;
        $this->pagination_config['next_link']        = $this->next_link;
        $this->pagination_config['prev_link']        = $this->prev_link;
        $this->pagination_config['per_page']         = 10;
    }
    function index(){
        $this->pagination_config['base_url']            = base_url('admin/categories');
        $page                                           = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['CATEGORIES']                             = $this->admin_model->GET_CATEGORY_LIST($this->pagination_config['per_page'], $page);
        $this->pagination_config['total_rows']          = $this->admin_model->GET_CATEGORY_COUNT();
        // Initialize the pagination library
        $this->pagination->initialize($this->pagination_config);
        $data['links']                                  = $this->pagination->create_links();
        // echo '<pre>';
        // var_dump($data['CATEGORIES']);
        // return;
        $this->template->load('templates/admin_layout', 'modules/admin/admin_category_views',$data);
    }
        function create(){
            $data['CATEGORIES'] =  $this->admin_model->GET_FORMATTED_CATEGORY();
            // echo '<pre>';
            // var_dump($data['CATEGORIES']);
            // return;
            $this->template->load('templates/admin_layout', 'modules/admin/create_category_views',$data);
        }
            function add(){
                $input_data=$this->input->post();
                $input_data['level']=0;
                if($input_data['parent_id']>0){
                    $category=$this->admin_model->GET_CATEGORY($input_data['parent_id']);
                    $input_data['level']=$category->level+1;
                }
                $res=$this->admin_model->ADD_CATEGORY($input_data);
                redirect('admin/categories');
            }
        function edit($id){
            $data['CATEGORIES']  = $this->admin_model->GET_FORMATTED_CATEGORY();
            $data['CATEGORY']    = $this->admin_model->GET_CATEGORY($id);
            // generate_options($data['CATEGORIES'], 0, 0,$data['CATEGORY']);
            // echo '<pre>';
            // // var_dump($data['CATEGORY']);
            // return;
            $this->template->load('templates/admin_layout', 'modules/admin/edit_category_views',$data);
        }
            function update($id){
                $input_data=$this->input->post();
                $input_data['level']=0;
                if($input_data['parent_id']>0){
                    $category=$this->admin_model->GET_CATEGORY($input_data['parent_id']);
                    $input_data['level']=$category->level+1;
                }
                $res=$this->admin_model->UPDATE_CATEGORY($input_data,$id);
                redirect('admin/categories');
            }
        function destroy($id){
            $res=$this->admin_model->DELETE_CATEGORY($id);
            $this->session->set_flashdata('alert',array('message'=>'Category has been deleted successfully','level'=>'success'));
            redirect('admin/categories');
        }
}
function generate_options($array, $level, $parent_id,$category) {
  // Loop through the array
  foreach ($array as $object) {
    // Check if the object's level and parent id match
    if ($object->level == $level && $object->parent_id == $parent_id) {
      // Initialize an empty dash variable
      $dash = "";
      // Loop from 1 to the current level
      for ($i = 1; $i <= $level; $i++) {
        // Append a dash to the dash variable
        $dash .= "--";
      }
      if($category->parent_id==$object->id){
          echo "<option value=\"$object->id\" selected >$dash$object->name</option>\n";
      }
      else{
          echo "<option value=\"$object->id\"  >$dash$object->name</option>\n";
      }
      // Output an option tag with the object's name and id, prefixed with dashes
    //   
      // Call the function again with an incremented level and the object's id as the new parent id
      generate_options($array, $level + 1, $object->id,$category);
    }
  }
} 
function generate_options_add($array, $level, $parent_id) {
  // Loop through the array
  foreach ($array as $object) {
    // Check if the object's level and parent id match
    if ($object->level == $level && $object->parent_id == $parent_id) {
      // Initialize an empty dash variable
      $dash = "";
      // Loop from 1 to the current level
      for ($i = 1; $i <= $level; $i++) {
        // Append a dash to the dash variable
        $dash .= "--";
      }
      // Output an option tag with the object's name and id, prefixed with dashes
      echo "<option value=\"$object->id\">$dash$object->name</option>\n";
      // Call the function again with an incremented level and the object's id as the new parent id
      generate_options_add($array, $level + 1, $object->id);
    }
  }
}