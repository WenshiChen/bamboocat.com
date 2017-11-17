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
|	https://codeigniter.com/user_guide/general/routing.html
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
 

$route['ordertop/(:any)']='index/ordertop/$1';
$route['order/(:any)']='index/order/$1';
$route['useralloder/(:any)']='index/useralloder/$1';

 $route['productlist/classid/(:any)']= "index/productlist/classid/$1";
 $route['productlist/classid/(:any)/(:any)']= "index/productlist/classid/$1/$2";
 $route['productlist/(:any)']= "index/productlist/$1";
 $route['esun']="index/esun";

 $route['reorder/(:any)']='index/ReOrder/$1';

//文章首頁

 $route['post']= "post/index";
 //全部分類頁數
 $route['post/(:num)']= "post/index/$1";
 //分類 頁數
 $route['post/(:num)/(:num)']= "post/index/$1/$2";

 


 
$route['product/(:any)']="index/product/$1";

$route['test/index2/(:any)']= "test/index2/$1";

$route['admin/productedit/(:any)'] = 'admin/productedit/$1';

$route['admin/orderdetal/(:any)'] = 'admin/orderdetal/$1';
$route['admin/product/createsp'] = 'admin/createsp';
$route['admin/product/create'] = 'admin/product_create';

//http://a.604.com.tw/oderdetaluseoderid/2017100509215521


 
$route['admin/product/createcategories'] = 'admin/createcategories';


 
$route['checklogin'] = 'index/checklogin';
$route['logout'] = 'index/logout';
$route['login'] = 'index/login';
$route['useralloder'] = 'index/useralloder';
$route['getorderforusertest'] = 'index/getorderforusertest';
$route['oktoorder'] = 'index/oktoorder';
$route['writetodborder'] = 'index/writetodborder';
$route['checkview'] = 'index/checkview';
$route['ckbynow'] = 'index/ckbynow';
$route['chekout'] = 'index/chekout';
$route['goorder'] = 'index/goorder';
$route['productlist'] = 'index/productlist';
$route['addcart'] = 'index/addcart';
$route['checkout'] = 'index/checkout';
$route['fblogin']='index/fblogin';
$route['register']='index/register';
$route['ordertop']='index/ordertop';
 




$route['goto711'] = 'index/goto711';
$route['gotook'] = 'index/gotook';
 
 

$route['default_controller'] = 'index';
$route['404_override'] = 'index';
$route['translate_uri_dashes'] = FALSE;
