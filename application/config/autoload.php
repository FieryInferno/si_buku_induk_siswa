<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages']   = array();
$autoload['libraries']  = array('form_validation', 'session', 'database', 'upload');
$autoload['drivers']    = array();
$autoload['helper']     = array('url', 'tanggal_helper');
$autoload['config']     = array();
$autoload['language']   = array();
$autoload['model']      = array('ModelUser', 'ModelSiswa', 'ModelNilai', 'ModelKelas', 'ModelMataPelajaran', 'ModelProfileSekolah', 'ModelProfile');
