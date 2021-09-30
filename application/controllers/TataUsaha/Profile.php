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
    $this->form_validation->set_rules('username', 'Username', 'required');
    if ($this->input->post('password')) {
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('password_konfirmasi', 'Password Confirmation', 'matches[password]');
    }

    if ($this->form_validation->run() !== FALSE) {
      $this->ModelProfile->update();
      $this->session->set_flashdata('pesan', 'Berhasil edit data profile');
    } else {
      $this->session->set_flashdata('error', validation_errors());
    }
    redirect('tata_usaha/profile'); 
  }
}
