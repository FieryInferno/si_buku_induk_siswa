<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileSekolah extends CI_Controller {
  
  public function index()
  {
    $data           = $this->ModelProfileSekolah->get();
    $data['konten'] = 'tata_usaha/profile_sekolah/index';
		$this->load->view('tata_usaha/template', $data);
  }

  public function edit()
  {
    $data           = $this->ModelProfileSekolah->get();
    $data['konten'] = 'tata_usaha/profile_sekolah/edit';
		$this->load->view('tata_usaha/template', $data);
  }

  public function update()
  {
    $this->ModelProfileSekolah->update();
    $this->session->set_flashdata('pesan', 'Berhasil edit profile sekolah');
    redirect('tata_usaha/profile');
  }
}
