<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'login';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['tata_usaha']                                    = 'TataUsaha/TataUsaha';
$route['tata_usaha/siswa']                              = 'TataUsaha/Siswa';
$route['tata_usaha/siswa/tambah']                       = 'TataUsaha/Siswa/tambah';
$route['tata_usaha/siswa/(:any)']                       = 'TataUsaha/Siswa/index/$1';
$route['tata_usaha/siswa/edit/(:any)']                  = 'TataUsaha/Siswa/edit/$1';
$route['tata_usaha/siswa/hapus/(:any)']                 = 'TataUsaha/Siswa/hapus/$1';
$route['tata_usaha/siswa/registrasi/(:any)']            = 'TataUsaha/Siswa/registrasi/$1';
$route['tata_usaha/siswa/cetak/(:any)']                 = 'TataUsaha/Siswa/cetak/$1';
$route['tata_usaha/siswa_keluar']                       = 'TataUsaha/SiswaKeluar';
$route['tata_usaha/siswa_keluar/detail/(:any)']         = 'TataUsaha/SiswaKeluar/detail/$1';
$route['tata_usaha/nilai']                              = 'TataUsaha/Nilai';
$route['tata_usaha/nilai/tambah/(:any)']                = 'TataUsaha/nilai/tambah/$1';
$route['tata_usaha/nilai/edit/(:any)']                  = 'TataUsaha/nilai/edit/$1';
$route['tata_usaha/nilai/cetak']                        = 'TataUsaha/nilai/cetak';
$route['tata_usaha/kelas']                              = 'TataUsaha/Kelas';
$route['tata_usaha/kelas/tambah']                       = 'TataUsaha/Kelas/tambah';
$route['tata_usaha/kelas/edit/(:any)']                  = 'TataUsaha/Kelas/edit/$1';
$route['tata_usaha/kelas/hapus/(:any)']                 = 'TataUsaha/kelas/hapus/$1';
$route['tata_usaha/kelas/lihat/(:any)']                 = 'TataUsaha/kelas/lihat/$1';
$route['tata_usaha/kelas/anggota/tambah/(:any)']        = 'TataUsaha/kelas/tambahAnggota/$1';
$route['tata_usaha/kelas/anggota/hapus/(:any)/(:any)']  = 'TataUsaha/kelas/hapusAnggota/$1/$2';
$route['tata_usaha/mata_pelajaran']                     = 'TataUsaha/MataPelajaran';
$route['tata_usaha/mata_pelajaran/tambah']              = 'TataUsaha/MataPelajaran/tambah';
$route['tata_usaha/mata_pelajaran/edit/(:any)']         = 'TataUsaha/MataPelajaran/edit/$1';
$route['tata_usaha/mata_pelajaran/hapus/(:any)']        = 'TataUsaha/MataPelajaran/hapus/$1';

$route['siswa'] = 'Siswa/Siswa';