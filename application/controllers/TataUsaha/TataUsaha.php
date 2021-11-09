<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TataUsaha extends CI_Controller {
  
	public function index()
	{
    $data                 = $this->ModelProfileSekolah->get();
    $data['siswaAktif']   = $this->ModelSiswa->getAll('aktif');
    $data['siswaAlumni']  = $this->ModelSiswa->getAll('alumni');
    $data['siswaPindah']  = $this->ModelSiswa->getAll('pindah');
    $data['konten']       = 'tata_usaha/dashboard'; 
		$this->load->view('tata_usaha/template', $data);
	}
}
