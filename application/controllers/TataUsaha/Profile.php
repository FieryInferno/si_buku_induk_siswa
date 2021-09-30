<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
  
  public function index()
  {
    $data           = $this->ModelProfile->get();
    $data['konten'] = 'tata_usaha/profile/index';
		$this->load->view('tata_usaha/template', $data);
  }

  public function update()
  {
    $this->ModelProfile->update();
    $this->session->set_flashdata('pesan', 'Berhasil tambah data');
    redirect('tata_usaha/profile_sekolah');
  }
}
