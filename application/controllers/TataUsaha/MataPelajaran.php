<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MataPelajaran extends CI_Controller {
  
	public function index()
	{
    $data['konten']         = 'tata_usaha/mataPelajaran'; 
    $data['mata_pelajaran'] = $this->ModelMataPelajaran->getAll();
		$this->load->view('tata_usaha/template', $data);
	}
  
	public function tambah()
	{
    if ($this->input->post()) {
      $this->ModelMataPelajaran->tambah();
      $this->session->set_flashdata('pesan', 
        '<div class="alert alert-success" role="alert">
          Berhasil tambah data
        </div>'
      );
      redirect('tata_usaha/mata_pelajaran');
    }
    $data['konten'] = 'tata_usaha/tambahMataPelajaran';
		$this->load->view('tata_usaha/template', $data);
	}
  
	public function edit($id_mata_pelajaran)
	{
    if ($this->input->post()) {
      $this->ModelMataPelajaran->edit($id_mata_pelajaran);
      $this->session->set_flashdata('pesan', 
        '<div class="alert alert-success" role="alert">
          Berhasil edit data
        </div>'
      );
      redirect('tata_usaha/mata_pelajaran');
    }
    $data           = $this->ModelMataPelajaran->getById($id_mata_pelajaran);
    $data['konten'] = 'tata_usaha/editMataPelajaran';
		$this->load->view('tata_usaha/template', $data);
	}

  public function hapus($id_mata_pelajaran)
  {
    $this->ModelMataPelajaran->hapus($id_mata_pelajaran);
    $this->session->set_flashdata('pesan', 
      '<div class="alert alert-success" role="alert">
        Berhasil hapus data
      </div>'
    );
    redirect('tata_usaha/mata_pelajaran');
  }
}
