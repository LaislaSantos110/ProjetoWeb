<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['eventos'] = 'eventos/index';
$route['eventos/create'] = 'eventos/create';
$route['eventos/(:any)'] = 'eventos/$1';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
