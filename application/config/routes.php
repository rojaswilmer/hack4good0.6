<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "website/home";

//WEBSITE
$route['team'] = "website/team";


$route['404_override'] = "welcome";

//USERS AUTH
$route['auth/auth'] = "welcome";

//USERS
$route['login'] = "users/login";
$route['users/logout'] = "website";
$route['users/signup'] = "website";
$route['users/forget'] = "website";

//DASHBOARD
$route['dashboard'] = "reports/dashboard";
$route['/infograph'] = "website";


//REPORTS
$route['reports'] = "reports/test";

//MAPS
$route['maps'] = "maps/lists";
$route['maps'] = "maps/view";
$route['maps/add'] = "maps/add";
$route['maps/getMeta'] = "maps/getMeta";
$route['maps/getImages/(:num)'] = "maps/getImageFromFolder/$1";


$route['tweet'] = "reports/tweet";


/* End of file routes.php */
/* Location: ./application/config/routes.php */
