<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages']   = array();
$autoload['libraries']  = array('form_validation', 'session', 'database');
$autoload['drivers']    = array();
$autoload['helper']     = array('url');
$autoload['config']     = array();
$autoload['language']   = array();
$autoload['model']      = array('ModelUser', 'ModelSiswa', 'ModelNilai', 'ModelKelas');
