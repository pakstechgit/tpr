<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller']    = 'home';
$route['contact-us']            ='home/contact_us';
$route['about-us']              ='home/about_us';
$route['become-a-dealer']       ='home/become_a_dealer';
$route['admin']                 ='admin';
$route['admins']                = 'admins/dashboards';
$route['admins/(:any)']             = 'admins/$1';
$route['admins/(:any)/(:any)']      = 'admins/$1/$2';
$route['admins/(:any)/(:any)/(:any)']   = 'admins/$1/$2/$3';
$route['upload/upload-files']       = 'aiz_uploader/upload_files';
// $route['admins/dashboard']          = 'admins/dashboards';
// $route['admins/dashboard/(:any)']   = 'admins/dashboards/$1';
// $route['admins/products']           = 'admins/products';
// $route['admins/products/(:any)']    = 'admins/products/$1';
// $route['admins/categories']         = 'admins/categories';
// $route['admins/categories/(:any)']  = 'admins/categories/$1';
// $route['admins/materials']          = 'admins/materials';
// $route['admins/materials/(:any)']   = 'admins/materials/$1';
$route['login']                 ='login';
$route['users']                 ='users';
$route['signup']                = 'users/signup';
// $route['admin/categories/:num'] = 'admin/categories';
$route['products']              ='products';
// $route['products/(:any)']       = 'products/item/$1';
$route['aiz-uploader']          ="aiz_uploader";
$route['aiz-uploader/get_file_by_ids']['post']  = 'aiz_uploader/get_preview_files';
$route['videos']                ="videos";
$route['404_override'] = 'errors/show_404';
$route['204_override'] = 'errors/show_204';
$route['translate_uri_dashes'] = TRUE;
