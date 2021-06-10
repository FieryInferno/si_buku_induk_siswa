<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'login';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['tata_usaha']                                    = 'TataUsaha/TataUsaha';
$route['tata_usaha/siswa']                              = 'TataUsaha/Siswa';
$route['tata_usaha/siswa/tambah']                       = 'TataUsaha/Siswa/tambah';
$route['tata_usaha/siswa/edit/(:any)']                  = 'TataUsaha/Siswa/edit/$1';
$route['tata_usaha/siswa/hapus/(:any)']                 = 'TataUsaha/Siswa/hapus/$1';
$route['tata_usaha/nilai']                              = 'TataUsaha/Nilai';
$route['tata_usaha/nilai/tambah']                       = 'TataUsaha/nilai/tambah';
$route['tata_usaha/nilai/edit']                         = 'TataUsaha/nilai/edit';
$route['tata_usaha/kelas']                              = 'TataUsaha/Kelas';
$route['tata_usaha/kelas/tambah']                       = 'TataUsaha/Kelas/tambah';
$route['tata_usaha/kelas/edit/(:any)']                  = 'TataUsaha/Kelas/edit/$1';
$route['tata_usaha/kelas/hapus/(:any)']                 = 'TataUsaha/kelas/hapus/$1';
$route['tata_usaha/kelas/lihat/(:any)']                 = 'TataUsaha/kelas/lihat/$1';
$route['tata_usaha/kelas/anggota/tambah/(:any)']        = 'TataUsaha/kelas/tambahAnggota/$1';
$route['tata_usaha/kelas/anggota/hapus/(:any)/(:any)']  = 'TataUsaha/kelas/hapusAnggota/$1/$2';