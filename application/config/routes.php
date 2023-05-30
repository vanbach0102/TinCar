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
$route['default_controller'] = 'IndexController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Login
$route['login']['GET'] = 'LoginController/index';
$route['login-user']['POST'] = 'LoginController/login';
$route['login-customer']['POST'] = 'IndexController/login_customer';
$route['dang-xuat']['GET'] = 'IndexController/dang_xuat';
$route['dang-ky']['POST'] = 'IndexController/dang_ky';


//Dashboard
$route['dashboard']['GET'] = 'DashboardController/index';
$route['logout']['GET'] = 'DashboardController/logout';

//Brand
$route['brand/create']['GET'] = 'BrandController/create';
$route['brand/list']['GET'] = 'BrandController/index';	
$route['brand/store']['POST'] = 'BrandController/store';
$route['brand/edit/(:any)']['GET'] = 'BrandController/edit/$1';	
$route['brand/update/(:any)']['POST'] = 'BrandController/update/$1';	
$route['brand/delete/(:any)']['GET'] = 'BrandController/delete/$1';	

//Category
$route['category/create']['GET'] = 'CategoryController/create';
$route['category/list']['GET'] = 'CategoryController/index';	
$route['category/store']['POST'] = 'CategoryController/store';
$route['category/edit/(:any)']['GET'] = 'CategoryController/edit/$1';	
$route['category/update/(:any)']['POST'] = 'CategoryController/update/$1';	
$route['category/delete/(:any)']['GET'] = 'CategoryController/delete/$1';	

//Product
$route['product/create']['GET'] = 'ProductController/create';
$route['product/list']['GET'] = 'ProductController/index';	
$route['product/store']['POST'] = 'ProductController/store';
$route['product/edit/(:any)']['GET'] = 'ProductController/edit/$1';	
$route['product/update/(:any)']['POST'] = 'ProductController/update/$1';	
$route['product/delete/(:any)']['GET'] = 'ProductController/delete/$1';	

//Home
$route['danh-muc/(:any)/(:any)']['GET'] = 'IndexController/category/$1/$2';
$route['thuong-hieu/(:any)/(:any)']['GET'] = 'IndexController/brand/$1/$2';
$route['san-pham/(:any)/(:any)']['GET'] = 'IndexController/product/$1/$2';
$route['dang-nhap']['GET'] = 'IndexController/login';
$route['mua-ban']['GET'] = 'IndexController/shop';
$route['tim-kiem']['GET'] = 'IndexController/search';

//Cart
$route['gio-hang']['GET'] = 'IndexController/cart';
$route['them-gio-hang']['POST'] = 'IndexController/add_to_cart';
$route['delete-all-cart']['GET'] = 'IndexController/delete_all_cart';
$route['delete-item/(:any)']['GET'] = 'IndexController/delete_item/$1';
$route['success']['GET'] = 'IndexController/successPage';
$route['cap-nhat-gio-hang']['POST'] = 'IndexController/update_item';
$route['confirm-checkout']['POST'] = 'IndexController/confirm_checkout';

//Order
$route['order/list']['GET'] = 'OrderController/index';
$route['order/process']['POST'] = 'OrderController/process';
$route['order/view/(:any)']['GET'] = 'OrderController/view/$1';
$route['order/delete/(:any)']['GET'] = 'OrderController/delete/$1';

//pagination
$route['pagination/index/(:num)']['GET'] = 'IndexController/index/$1';
$route['pagination/index']['GET'] = 'IndexController/index';
 
//email
$route['send-mail'] = 'IndexController/mail';

//comment
$route['comment/send']['POST'] = 'IndexController/comment_send';

//Post
$route['post/create']['GET'] = 'PostController/create';
$route['ost/list']['GET'] = 'PostController/index';	
$route['post/store']['POST'] = 'PostController/store';
$route['post/edit/(:any)']['GET'] = 'PostController/edit/$1';	
$route['post/update/(:any)']['POST'] = 'PostController/update/$1';	
$route['post/delete/(:any)']['GET'] = 'PostController/delete/$1';	

//Blog
$route['category/news/create']['GET'] = 'NewsController/create';
$route['category/news/list']['GET'] = 'NewsController/index';	
$route['category/news/store']['POST'] = 'NewsController/store';
$route['category/news/edit/(:any)']['GET'] = 'NewsController/edit/$1';	
$route['category/news/update/(:any)']['POST'] = 'NewsController/update/$1';	
$route['category/news/delete/(:any)']['GET'] = 'NewsController/delete/$1';	
