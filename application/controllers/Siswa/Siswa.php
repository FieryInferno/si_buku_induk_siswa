<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
  
	public function index()
	{
    $data           = $this->ModelProfileSekolah->get();
    $data['konten'] = 'siswa/dashboard'; 
		$this->load->view('siswa/template', $data);
	}
}
