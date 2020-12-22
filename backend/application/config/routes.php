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
$route['default_controller'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'AuthController';
$route['authentication'] = 'AuthController/doLogin';
$route['logout'] = 'AuthController/doLogout';

$route['dashboard'] = 'DashboardController';

$route['category'] = 'CategoryController';
$route['category/filter'] = 'CategoryController/filter';
$route['category/add'] = 'CategoryController/add';
$route['category/save'] = 'CategoryController/save';
$route['category/edit/(:any)'] = 'CategoryController/edit/$1';
$route['category/update/(:any)'] = 'CategoryController/update/$1';
$route['category/delete/(:any)'] = 'CategoryController/delete/$1';

$route['product'] = 'ProductController';
$route['product/filter'] = 'ProductController/filter';
$route['product/add'] = 'ProductController/add';
$route['product/save'] = 'ProductController/save';
$route['product/edit/(:any)'] = 'ProductController/edit/$1';
$route['product/update/(:any)'] = 'ProductController/update/$1';
$route['product/delete/(:any)'] = 'ProductController/delete/$1';
$route['product/upload-cover'] = "ProductController/photo_upload";

$route['product-images/(:any)'] = 'ProductImagesController/index/$1';
$route['product-images/filter/(:any)'] = 'ProductImagesController/filter/$1';
$route['product-images/add/(:any)'] = 'ProductImagesController/add/$1';
$route['product-images/save/(:any)'] = 'ProductImagesController/save/$1';
$route['product-images/edit/(:any)/(:any)'] = 'ProductImagesController/edit/$1/$2';
$route['product-images/update/(:any)/(:any)'] = 'ProductImagesController/update/$1/$2';
$route['product-images/delete/(:any)/(:any)'] = 'ProductImagesController/delete/$1/$2';
$route['product-images/upload-cover/(:any)'] = "ProductImagesController/photo_upload/$1";

$route['notification/view/(:any)/(:any)'] = 'ArsipController/notification/$1/$2';

$route['user'] = 'UserController';
$route['user/add'] = 'UserController/add';
$route['user/save'] = 'UserController/save';
$route['user/edit/(:any)'] = 'UserController/edit/$1';
$route['user/profile'] = 'UserController/profile';
$route['user/update/(:any)'] = 'UserController/update/$1';
$route['user/update_profile/(:any)'] = 'UserController/update_profile/$1';
$route['user/change_password/(:any)'] = 'UserController/change_password/$1';
$route['user/change_password'] = 'UserController/change_password_myuser';
$route['user/update_password/(:any)'] = 'UserController/update_password/$1';
$route['user/delete/(:any)'] = 'UserController/delete/$1';

$route['event'] = "EventController";
$route['event/add'] = "EventController/add";
$route['event/save'] = "EventController/save";
$route['event/edit/(:any)'] = "EventController/edit/$1";
$route['event/update'] = "EventController/update";
$route['event/upload'] = "EventController/photo_upload";
$route['event/upload-peserta/(:any)'] = "EventController/upload_peserta/$1";
$route['event/upload-proccess/(:any)'] = "EventController/upload_proccess/$1";
$route['event/save-peserta/(:any)/(:any)'] = "EventController/save_peserta/$1/$2";
$route['event/delete/(:any)'] = 'EventController/delete/$1';
$route['event/set-fitur/(:any)'] = 'EventController/set_fitur/$1';
$route['event/selection/(:any)'] = 'EventController/selection/$1';
$route['event/restore/(:any)'] = 'EventController/restore/$1';
$route['event/update-createdat/(:any)'] = 'EventController/update_createdat/$1';

$route['contact'] = "ContactController";

$route['reschedule-event'] = "RescheduleEventController";

$route['cancel-event'] = "CancelEventController";
$route['cancel-event/approve/(:any)'] = "CancelEventController/approve/$1";

$route['closed-event'] = "ClosedEventController";
$route['closed-event/approve/(:any)'] = "ClosedEventController/approve/$1";

$route['balance'] = "BalanceController";
$route['balance/approve/(:any)'] = "BalanceController/approve/$1";

$route['legal'] = "LegalController";
$route['legal/approve/(:any)'] = "LegalController/approve/$1";
$route['legal/reject/(:any)'] = "LegalController/reject/$1";
$route['legal/download/(:any)'] = "LegalController/download/$1";

$route['event/peserta/(:any)'] = "PesertaController/index/$1";

$route['event-selection'] = "EventSelectionController";
$route['event-selection/restore/(:any)'] = 'EventSelectionController/restore/$1';

$route['sales-order'] = "SalesOrderController";
$route['sales-order/view/(:any)'] = "SalesOrderController/view/$1";
$route['sales-order/update-status/(:any)'] = "SalesOrderController/update_status/$1";
$route['sales-order/restore/(:any)'] = "SalesOrderController/restore/$1";
$route['sales-order/lengkapi-data/(:any)'] = "SalesOrderController/lengkapi_data/$1";
$route['sales-order/cek-link/(:any)'] = 'SalesOrderController/cek_link/$1';
$route['sales-order/save-lengkapi-data/(:any)'] = "SalesOrderController/save_lengkapi_data/$1";
$route['sales-order/product-images/(:any)'] = "SalesOrderController/product_images/$1";
$route['sales-order/product-images/edit/(:any)/(:any)'] = "SalesOrderController/edit_product_images/$1/$2";
$route['sales-order/product-images/update/(:any)/(:any)'] = "SalesOrderController/update_product_images/$1/$2";
$route['sales-order/product-images/upload-cover/(:any)/(:any)'] = "SalesOrderController/photo_upload/$1/$2";

$route['member'] = 'MemberController';
$route['member/add'] = 'MemberController/add';
$route['member/save'] = 'MemberController/save';
$route['member/edit/(:any)'] = 'MemberController/edit/$1';
$route['member/profile'] = 'MemberController/profile';
$route['member/update/(:any)'] = 'MemberController/update/$1';
$route['member/update_profile/(:any)'] = 'MemberController/update_profile/$1';
$route['member/change_password/(:any)'] = 'MemberController/change_password/$1';
$route['member/change_password'] = 'MemberController/change_password_myuser';
$route['member/update_password/(:any)'] = 'MemberController/update_password/$1';
$route['member/delete/(:any)'] = 'MemberController/delete/$1';