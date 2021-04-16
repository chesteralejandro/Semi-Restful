<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'products';
$route['new'] = 'products/new';
$route['show/(:any)'] = 'products/show/$1';
$route['edit/(:any)'] = 'products/edit/$1';

$route['create'] = 'products/create';
$route['destroy'] = 'products/destroy';
$route['update'] = 'products/update';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
