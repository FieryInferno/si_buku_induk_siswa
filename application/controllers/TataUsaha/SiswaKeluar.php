<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiswaKeluar extends CI_Controller {

  public function index()
  {
    $data['konten'] = 'tata_usaha/siswaKeluar'; 
    $data['siswa']  = $this->ModelSiswa->getSiswaKeluar();
		$this->load->view('tata_usaha/template', $data);
  }

  public function detail($id_user)
  {
    $data = $this->ModelSiswa->get($id_user);
    $data['konten'] = 'tata_usaha/detailSiswaKeluar';
		$this->load->view('tata_usaha/template', $data);
  }
}
