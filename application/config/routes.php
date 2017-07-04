<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['edu/create'] ='edu/create';
$route['edu/view'] ='edu/view';
$route['edu/delete/(:any)'] = 'edu/delete/$1';
$route['edu/view/(:any)'] = 'edu/view/$1';



$route['upload/do_upload'] ='upload/do_upload';
$route['upload'] ='upload';

$route['member_level/view/(:any)/(:any)'] = 'member_level/view/$1/$2';
$route['member_level/levelup/(:any)/(:any)'] = 'member_level/levelup/$1/$2';
$route['member_level/update'] ='member_level/update';

$route['level_det/create'] = 'level_det/create';
$route['level_det/create/(:any)/(:any)'] = 'level_det/create/$1/$2';
//$route['level_det/create'] = 'level_det/create';
$route['level/create'] = 'level/create';
$route['level/edit/(:any)'] = 'level/edit/$1';
$route['level/delete/(:any)'] = 'level/delete/$1';
$route['level/view'] = 'level/view';
$route['level/update'] = 'level/update';
$route['level/leveldetDelete/(:any)/(:any)'] ='level/leveldetDelete/$1/$2';


$route['notices/view'] = 'notices/view';
$route['notices/view/(:any)'] = 'notices/view/$1';
$route['notices/view/(:any)/(:any)'] = 'notices/view/$1/$2';
$route['notices/create'] = 'notices/create';
$route['notices/delete/(:any)'] = 'notices/delete/$1';



$route['member/delete/(:any)'] = 'member/delete/$1';
$route['member/view/(:any)'] = 'member/view/$1';
$route['member/view'] = 'member/view';
$route['member'] = 'member';
$route['member/create'] = 'member/create';
$route['member/edit/(:any)'] = 'member/edit/$1';
$route['member/update'] = 'member/update';
$route['member/memberHonorDelete/(:any)/(:any)'] ='member/memberHonorDelete/$1/$2';

$route['honor/view'] = 'honor/view';
$route['honor/pickhonor'] = 'honor/pickhonor';
$route['honor/view/(:any)'] = 'honor/view/$1';
$route['honor/view/(:any)/(:any)'] = 'honor/view/$1/$2';

$route['user/checkout'] = 'user/checkout';
$route['user/login/(:any)'] = 'user/login/$1';
$route['user/edit/(:any)'] = 'user/edit/$1';
$route['user/login'] = 'user/login';
$route['user/delete/(:any)'] = 'user/delete/$1';
$route['user/view'] = 'user/view';
$route['user/create'] = 'user/create';
$route['user'] = 'user';
$route['user/update'] = 'user/update';


$route['news/create'] = 'news/create';
$route['news/view/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['(:any)'] = 'pages/view/$1';


$route['default_controller'] = 'user/login';


/* End of file routes.php */
/* Location: ./application/config/routes.php */