<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 
class Products extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        echo 'hello world';
    }
}