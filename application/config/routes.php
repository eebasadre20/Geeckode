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

$route = array(
    'default_controller'    => "home",
    'main'                  => "home",
    'team'                  => "home/about",
    'team/geeckode'         => "homeuser/aboutUs",
    'leaderboards'          => "home/lead",
    'verify'                => "verifyLogin",
    'home'                  => "homeuser",
    'profile'               => "homeuser/prof",
    'main1'                 => "homeuser/logout",
    'user/signup'           => "register/createCoderForm1",
    'user/signup1'          => "register/createCoderForm2",
    'user/profile1'         => "register/do_upload",
    'user/profile2'         => "register/skip_upload",
    'user/save-records'     => "register/createCoder",
    'update/profile'        => "update/update_pic",
    'user/challenges'       => "homeuser/userchallenges",
    'user/challenge/(:num)' => "homeuser/userChallenge/$1",
    "user/challenge"        => "homeuser/checkProblem",
    "user/leaderboard"      => "homeuser/usrlead",
    '404_override'          => ""
    );
/*$route['default_controller'] = "home";
$route['404_override'] = '';*/


/* End of file routes.php */
/* Location: ./application/config/routes.php */