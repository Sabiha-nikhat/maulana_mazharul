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
$route['default_controller'] = 'MaulanaController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['frontend/index'] = 'MaulanaController/index';
$route['frontend/about'] = 'MaulanaController/about';
$route['frontend/vision_mission'] = 'MaulanaController/vision_mission';
$route['frontend/visitor'] = 'MaulanaController/visitor';
$route['frontend/chancellor'] = 'MaulanaController/chancellor';
$route['frontend/vc'] = 'MaulanaController/vc';
$route['frontend/legacy'] = 'MaulanaController/legacy';
$route['frontend/logo'] = 'MaulanaController/logo';
$route['frontend/act_statutes'] = 'MaulanaController/act_statutes';
$route['frontend/ordinances'] = 'MaulanaController/ordinances';
$route['frontend/chancellor_1'] = 'MaulanaController/chancellor_1';
$route['frontend/university_authority'] = 'MaulanaController/university_authority';
$route['frontend/statutory_bodies'] = 'MaulanaController/statutory_bodies';
$route['frontend/university_officers'] = 'MaulanaController/university_officers';
$route['frontend/directory'] = 'MaulanaController/directory';
$route['frontend/school_of_commerce_management_sciences'] = 'MaulanaController/school_of_commerce_management_sciences';
$route['frontend/department_of_commerce'] = 'MaulanaController/department_of_commerce';
$route['frontend/department_of_management_sciences'] = 'MaulanaController/department_of_management_sciences';
$route['frontend/school_of_computational_sciences'] = 'MaulanaController/school_of_computational_sciences';
$route['frontend/department_of_computer_science'] = 'MaulanaController/department_of_computer_science';
$route['frontend/department_of_library_science'] = 'MaulanaController/department_of_library_science';

$route['frontend/list_of_bed_college'] = 'MaulanaController/list_of_bed_college';

$route['frontend/school_of_education'] = 'MaulanaController/school_of_education';
$route['frontend/department_of_education'] = 'MaulanaController/department_of_education';
$route['frontend/school_of_Humanities_and_Languages'] = 'MaulanaController/school_of_Humanities_and_Languages';
$route['frontend/department_of_english'] = 'MaulanaController/department_of_english';
$route['frontend/department_of_hindi'] = 'MaulanaController/department_of_hindi';
$route['frontend/department_of_sanskrit'] = 'MaulanaController/department_of_sanskrit';
$route['frontend/school_of_life_sciences'] = 'MaulanaController/school_of_life_sciences';
$route['frontend/department_of_biotechnology'] = 'MaulanaController/department_of_biotechnology';
$route['frontend/department_of_botany'] = 'MaulanaController/department_of_botany';
$route['frontend/department_of_zoology'] = 'MaulanaController/department_of_zoology';
$route['frontend/school_of_physical_sciences'] = 'MaulanaController/school_of_physical_sciences';
$route['frontend/department_of_chemistry'] = 'MaulanaController/department_of_chemistry';
$route['frontend/department_of_mathematics'] = 'MaulanaController/department_of_mathematics';
$route['frontend/department_of_physics'] = 'MaulanaController/department_of_physics';
$route['frontend/school_of_social_sciences'] = 'MaulanaController/school_of_social_sciences';
$route['frontend/department_of_economics'] = 'MaulanaController/department_of_economics';
$route['frontend/department_of_gandhian'] = 'MaulanaController/department_of_gandhian';
$route['frontend/department_of_social_work'] = 'MaulanaController/department_of_social_work';
$route['frontend/department_of_political_science'] = 'MaulanaController/department_of_political_science';
$route['frontend/department_of_sociology'] = 'MaulanaController/department_of_sociology';
$route['frontend/library'] = 'MaulanaController/library';
$route['frontend/mou'] = 'MaulanaController/mou';
$route['frontend/facilities'] = 'MaulanaController/facilities';
$route['frontend/books_research_publication'] = 'MaulanaController/books_research_publication';
$route['frontend/e_news_letter'] = 'MaulanaController/e_news_letter';
$route['frontend/reports'] = 'MaulanaController/reports';
$route['frontend/annual_magazine'] = 'MaulanaController/annual_magazine';
$route['frontend/documentation'] = 'MaulanaController/documentation';
$route['frontend/newspaper_clippings'] = 'MaulanaController/newspaper_clippings';
$route['frontend/proceedings'] = 'MaulanaController/proceedings';
$route['frontend/admission'] = 'MaulanaController/admission';
$route['frontend/examination'] = 'MaulanaController/examination';
$route['frontend/syllabus'] = 'MaulanaController/syllabus';
$route['frontend/eVimarsh'] = 'MaulanaController/eVimarsh';
$route['frontend/attendance'] = 'MaulanaController/attendance';
$route['frontend/contact_us'] = 'MaulanaController/contact_us';
$route['frontend/address'] = 'MaulanaController/address';
$route['frontend/how_to_reach'] = 'MaulanaController/how_to_reach';
$route['frontend/disclaimer'] = 'MaulanaController/disclaimer';
$route['frontend/website_policy'] = 'MaulanaController/website_policy';
$route['frontend/gallery_thum'] = 'MaulanaController/gallery_thum';
$route['frontend/tender'] = 'MaulanaController/tender';
$route['frontend/downloads'] = 'MaulanaController/downloads';

$route['frontend/sc_st'] = 'MaulanaController/sc_st';
$route['frontend/recruitments'] = 'MaulanaController/recruitments';
$route['frontend/recruitments_archives'] = 'MaulanaController/recruitments_archives';
$route['frontend/iqac'] = 'MaulanaController/iqac';
$route['frontend/committees'] = 'MaulanaController/committees';
$route['frontend/eResources'] = 'MaulanaController/eResources';
$route['frontend/rti'] = 'MaulanaController/rti';
$route['frontend/archives'] = 'MaulanaController/archives';
$route['frontend/alumni'] = 'MaulanaController/alumni';
$route['frontend/azadi_ka_amrit_mahotsav'] = 'MaulanaController/azadi_ka_amrit_mahotsav';
$route['frontend/fit_india_movement'] = 'MaulanaController/fit_india_movement';
$route['frontend/ebsb'] = 'MaulanaController/ebsb';
$route['frontend/G20'] = 'MaulanaController/G20';











































































