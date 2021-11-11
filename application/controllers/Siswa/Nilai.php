<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
  
	public function index()
	{
    $data           = $this->ModelSiswa->getByNisn($this->session->nisn);
    $data['konten'] = 'siswa/nilai';
    $data['nilai']  = $this->ModelNilai->getAll($data['id_siswa']);
		$this->load->view('siswa/template', $data);
	}
}
