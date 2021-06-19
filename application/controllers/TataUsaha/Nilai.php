<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'tata_usaha/nilai'; 
    $data['nilai']  = $this->ModelNilai->getAll();
		$this->load->view('tata_usaha/template', $data);
	}
  
	public function tambah($id_siswa)
	{
    if ($this->input->post()) {
      $this->ModelNilai->tambah($id_siswa);
      $this->session->set_flashdata('pesan', 
        '<div class="alert alert-success" role="alert">
          Berhasil tambah data
        </div>'
      );
      redirect('tata_usaha/nilai');
    }
    $data['id_siswa'] = $id_siswa;
    $data['konten']   = 'tata_usaha/inputNilai';
		$this->load->view('tata_usaha/template', $data);
	}
  
	public function edit($id_siswa)
	{
    if ($this->input->post()) {
      $this->ModelNilai->edit($id_siswa);
      $this->session->set_flashdata('pesan', 
        '<div class="alert alert-success" role="alert">
          Berhasil edit data
        </div>'
      );
      redirect('tata_usaha/nilai');
    }
    $data           = $this->ModelNilai->getById($id_siswa);
    $data['konten'] = 'tata_usaha/editNilai';
		$this->load->view('tata_usaha/template', $data);
	}
}
