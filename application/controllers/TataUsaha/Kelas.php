<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
  
  public function index()
  {
    $data['konten'] = 'tata_usaha/kelas'; 
    $data['kelas']  = $this->ModelKelas->getAll();
		$this->load->view('tata_usaha/template', $data);
  }
  
	public function tambah()
	{
    if ($this->input->post()) {
      $this->form_validation->set_rules('nama_kelas', 'Kelas', 'trim|required|is_unique[kelas.nama_kelas]', ['is_unique' => 'Kelas sudah ada']);
      if ($this->form_validation->run()) {
        $this->ModelKelas->tambah();
        $this->session->set_flashdata('pesan', 
          '<div class="alert alert-success" role="alert">
            Berhasil tambah data
          </div>'
        );
        redirect('tata_usaha/kelas');
      } else {
        $this->session->set_flashdata('pesan', 
          '<div class="alert alert-danger" role="alert">'
            . validation_errors() . 
          '</div>'
        );
      }
    }
    $data['konten'] = 'tata_usaha/tambahKelas';
		$this->load->view('tata_usaha/template', $data);
	}
  
	public function edit($id_kelas)
	{
    if ($this->input->post()) {
      $this->form_validation->set_rules('nama_kelas', 'Kelas', 'trim|required|is_unique[kelas.nama_kelas]', ['is_unique' => 'Kelas sudah ada']);
      if ($this->form_validation->run()) {
        $this->ModelKelas->edit($id_kelas);
        $this->session->set_flashdata('pesan', 
          '<div class="alert alert-success" role="alert">
            Berhasil edit data
          </div>'
        );
        redirect('tata_usaha/kelas');
      } else {
        $this->session->set_flashdata('pesan', 
          '<div class="alert alert-danger" role="alert">'
            . validation_errors() . 
          '</div>'
        );
      }
    }
    $data           = $this->ModelKelas->get($id_kelas);
    $data['konten'] = 'tata_usaha/editKelas';
		$this->load->view('tata_usaha/template', $data);
	}

  public function hapus($id_kelas)
  {
    $this->ModelKelas->hapus($id_kelas);
    $this->session->set_flashdata('pesan', 
      '<div class="alert alert-success" role="alert">
        Berhasil hapus data
      </div>'
    );
    redirect('tata_usaha/kelas');
  }

  public function lihat($id_kelas)
  {
    $data['konten'] = 'tata_usaha/lihatKelas'; 
    $data['kelas']  = $this->ModelKelas->lihat($id_kelas);
		$this->load->view('tata_usaha/template', $data);
  }
}
