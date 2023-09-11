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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



$route['provider/login'] = 'provider/login';
$route['viewDashboard']='providerController/viewDashboard';
$route['registration']='provider/registration';
$route['login']='provider/login';
$route['providerRegistration']='providerController/providerRegistration';
$route['dashboard']='providerController/dashboard';
$route['providerUpdateRegistration']='providerController/providerUpdateRegistration';
$route['jobViewTable']='providerController/jobViewTable';
$route['matchedCandidate']='providerController/matchedCandidate';
$route['providerAddJob']='providerController/providerAddJob';
$route['jobMatchedTable']='providerController/jobMatchedTable';
$route['updateAddNew']='providerController/updateAddNew';
$route['deleteAddJob']='providerController/deleteAddJob';
$route['update_record']='providerController/update_record';
$route['insertJob']='providerController/insertJob';
$route['updateInsert']='providerController/updateInsert';
$route['resumeCard']='providerController/resumeCard';
$route['resumeCard']='providerController/resumeCard';
$route['filterAllCandidate']='providerController/filterAllCandidate';
$route['resumeCard']='providerController/resumeCard';
$route['filterAllCandidate']='providerController/filterAllCandidate';
$route['resumeCard']='providerController/resumeCard';
$route['filterAllCandidate']='providerController/filterAllCandidate';
$route['resumeCard']='providerController/resumeCard';



          // seeker routes

$route['seekerLogin']='seekerController/seekerLogin';
$route['registration']='seekerController/registration';
$route['registration']='seekerController/registration';
$route['login']='seekerController/login';
$route['basicDetails']='seekerController/basicDetails';
$route['educationalDetails']='seekerController/educationalDetails';
$route['experienceDetails']='seekerController/experienceDetails';
$route['projectDetails']='seekerController/projectDetails';
$route['areaOfInterest']='seekerController/areaOfInterest';
$route['skills']='seekerController/skills';
$route['resume']='seekerController/resume';
$route['updateBasicDetails']='seekerController/updateBasicDetails';
$route['updateEducationDetails']='seekerController/updateEducationDetails';
$route['updateExperienceDetails']='seekerController/updateExperienceDetails';
$route['updateProjectDetails']='seekerController/updateProjectDetails';
$route['updateAreaOfInterest']='seekerController/updateAreaOfInterest';
$route['updateskills']='seekerController/updateskills';
$route['resume']='seekerController/resume';
$route['educationTable']='seekerController/educationTable';







// $route['providerController']='providerController/update_record';
// $route['providerRegistration']='customer';
// // $route['providerUpdateRegistration'] = 'providerController/providerUpdateRegistration';
// $route['providerController/update_record'] = "providerController/update_record";
// // $route['Registration/update_profile'] = 'Registration/update_profile';
// $route['providerController/jobViewTable'] = "providerController/jobViewTable";
// $route['providerController/providerAddJob'] = "providerController/providerAddJob";
// $route['providerController/insertJob'] = "providerController/insertJob";
// $route['providerController/add_provider_job'] = "providerController/add_provider_job";
// $route['providerController/jobMatchedTable'] = "providerController/jobMatchedTable";
// $route['providerController/updateAddNew'] = "providerController/updateAddNew";
// $route['providerController/updateInsert'] = "providerController/updateInsert";




$route['seekerLogin']='seekerController/seekerLogin';
$route['registration'] = 'seekerController/registration';
$route['login'] = 'seekerController/index';
$route['dashboard'] = 'seekerController/dash';
$route['profile'] = 'seekerController/basicDetails';
$route['educational_details'] = 'seekerController/educationalDetails';


