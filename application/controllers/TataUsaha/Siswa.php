<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'tata_usaha/siswa'; 
    $data['siswa']  = $this->ModelSiswa->getAll();
		$this->load->view('tata_usaha/template', $data);
	}
  
	public function tambah()
	{
    if ($this->input->post()) {
      $this->form_validation->set_rules('no_induk', 'No Induk', 'trim|numeric|required');
      $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
      $this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
      if ($this->form_validation->run()) {
        $this->ModelSiswa->tambah();
        $this->session->set_flashdata('pesan', 
          '<div class="alert alert-success" role="alert">
            Berhasil tambah data
          </div>'
        );
        redirect('tata_usaha/siswa');
      } else {
        $this->session->set_flashdata('pesan', 
          '<div class="alert alert-danger" role="alert">'
            . validation_errors() . 
          '</div>'
        );
      }
    }
    $data['konten'] = 'tata_usaha/tambahSiswa';
		$this->load->view('tata_usaha/template', $data);
	}
  
	public function edit($id_siswa)
	{
    if ($this->input->post()) {
      $this->form_validation->set_rules('no_induk', 'No Induk', 'trim|numeric|required');
      $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
      $this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
      if ($this->form_validation->run()) {
        $this->ModelSiswa->edit($id_siswa);
        $this->session->set_flashdata('pesan', 
          '<div class="alert alert-success" role="alert">
            Berhasil edit data
          </div>'
        );
        redirect('tata_usaha/siswa');
      } else {
        $this->session->set_flashdata('pesan', 
          '<div class="alert alert-danger" role="alert">'
            . validation_errors() . 
          '</div>'
        );
      }
    }
    $data           = $this->ModelSiswa->get($id_siswa);
    $data['konten'] = 'tata_usaha/editSiswa';
		$this->load->view('tata_usaha/template', $data);
	}
}
