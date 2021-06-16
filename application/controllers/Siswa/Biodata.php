<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {
  
	public function index()
	{
    $data           = $this->ModelSiswa->getBiodata();
    $data['konten'] = 'siswa/biodata'; 
		$this->load->view('siswa/template', $data);
	}
}
