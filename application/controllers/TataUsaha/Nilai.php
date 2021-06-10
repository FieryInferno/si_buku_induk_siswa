<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'tata_usaha/nilai'; 
    $data['nilai']  = $this->ModelNilai->getAll();
		$this->load->view('tata_usaha/template', $data);
	}
  
	public function tambah()
	{
    if ($this->input->post()) {
      $this->form_validation->set_rules('nilai', 'Nilai', 'trim|numeric|required');
      if ($this->form_validation->run()) {
        $this->ModelNilai->tambah();
        $this->session->set_flashdata('pesan', 
          '<div class="alert alert-success" role="alert">
            Berhasil tambah data
          </div>'
        );
        redirect('tata_usaha/nilai');
      } else {
        $this->session->set_flashdata('pesan', 
          '<div class="alert alert-danger" role="alert">'
            . validation_errors() . 
          '</div>'
        );
      }
    }
    $data['konten'] = 'tata_usaha/nilai'; 
    $data['nilai']  = $this->ModelNilai->getAll();
		$this->load->view('tata_usaha/template', $data);
	}
  
	public function edit()
	{
    if ($this->input->post()) {
      $this->form_validation->set_rules('nilai', 'Nilai', 'trim|numeric|required');
      if ($this->form_validation->run()) {
        $this->ModelNilai->edit();
        $this->session->set_flashdata('pesan', 
          '<div class="alert alert-success" role="alert">
            Berhasil edit data
          </div>'
        );
        redirect('tata_usaha/nilai');
      } else {
        $this->session->set_flashdata('pesan', 
          '<div class="alert alert-danger" role="alert">'
            . validation_errors() . 
          '</div>'
        );
      }
    }
    $data['konten'] = 'tata_usaha/nilai'; 
    $data['nilai']  = $this->ModelNilai->getAll();
		$this->load->view('tata_usaha/template', $data);
	}
}
