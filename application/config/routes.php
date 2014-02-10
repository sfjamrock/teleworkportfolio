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

$route['default_controller'] = 'home';
$route['404_override'] = 'home';
$route['sign_up'] = "account/sign_up";
$route['sign_in'] = "account/sign_in";
$route['forgot_password'] = "account/forgot_password";
$route['account_settings'] = "account/account_settings";
$route['account/connect_facebook'] = "account/connect_facebook";
$route['connect_facebook'] = "account/connect_facebook";
$route['account/connect_google'] = "account/connect_google";
$route['connect_google'] = "account/connect_google";
$route['account_password'] = "account/account_password";
$route['account_profile'] = "account/account_profile";
$route['account/account_profile'] = "account/account_profile";
$route['email'] = "email";
$route['tickets'] = "users/tickets";
$route['account_linked'] = "account/account_linked";
$route['account/sign_out'] = "account/sign_out";
$route['company/profile/join'] = "company/profile/join";
$route['iptest'] = "iptest";
$route['business'] = "business";
$route['employee'] = "employee";
$route['terms'] = "terms";
$route['contact_us'] = "contact_us";
$route['contact_us/send_contact_us_info'] = "contact_us/send_contact_us_info";
$route['about_us'] = "about_us";
$route['policy'] = "policy";
$route['sendmail'] = "sendmail";
$route['find'] = "find";
$route['users/dashboard/close_ticket'] = "users/dashboard/close_ticket";
$route['users/profile/follow'] = "users/profile/follow";
$route['teleworkwizard/SelfEvaluation'] = "teleworkwizard/SelfEvaluation";


$route['teleworkwizard/savings/clockin'] = "teleworkwizard/savings/clockin";
$route['teleworkwizard/savings/clockout'] = "teleworkwizard/savings/clockout";

$route['teleworkwizard/clockin'] = "teleworkwizard/clockin";
$route['teleworkwizard/clockout'] = "teleworkwizard/clockout";

$route['dashboard'] = "users/dashboard";
$route['history'] = "users/history";
$route['message'] = "users/message";
$route['stats'] = "users/stats";
$route['badges/(:any)'] = "users/badges/lookup";
$route['follower/(:any)'] = "users/follower/lookup";
$route['following/(:any)'] = "users/following/lookup";
$route['profile/(:any)'] = "users/profile/lookup";
$route['teleworker/(:any)'] = "users/teleworker/lookup";
$route['teleworkwizard'] = "teleworkwizard";
$route['users/dashboard/update_status'] = "users/dashboard/update_status";
$route['company/analytics/accept'] = "company/analytics/accept";
$route['company/analytics/reject'] = "company/analytics/reject";
$route['teleworkwizard/savings'] = "teleworkwizard/savings";
$route['teleworkwizard/savings/saving_tracker'] = "teleworkwizard/savings/saving_tracker";
$route['teleworkwizard/suggestions'] = "teleworkwizard/suggestions";
$route['teleworkwizard/GetJobEvaluation'] = "teleworkwizard/GetJobEvaluation";



$route['company/profile/week'] = "company/profile/week";
$route['start'] = "company/start";
$route['(:any)/analytics'] = "company/analytics";
$route['(:any)/dashboard'] = "company/dashboard";
$route['(:any)'] = "company/profile";





/* End of file routes.php */
/* Location: ./application/config/routes.php */