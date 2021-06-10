<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'login';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['tata_usaha']                    = 'TataUsaha/TataUsaha';
$route['tata_usaha/siswa']              = 'TataUsaha/Siswa';
$route['tata_usaha/siswa/tambah']       = 'TataUsaha/Siswa/tambah';
$route['tata_usaha/siswa/edit/(:any)']  = 'TataUsaha/Siswa/edit/$1';