<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TataUsaha extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'tata_usaha/dashboard'; 
		$this->load->view('tata_usaha/template', $data);
	}
}
