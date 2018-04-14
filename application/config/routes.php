<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Forum';
$route['forum'] = 'Forum/index';
$route['forum/tambah'] = 'Forum/tambah';
$route['forum/edit/(:num)'] = 'Forum/form_edit/$1';
$route['forum/ubah'] = 'Forum/ubah';
$route['forum/hapus/(:num)'] = 'Forum/hapus/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

