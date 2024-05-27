<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start(); 
class Orders extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        echo 'hello world';
    }
}