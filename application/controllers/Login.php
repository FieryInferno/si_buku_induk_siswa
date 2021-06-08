<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  
	public function index()
	{
    if ($this->input->post()) {
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      if ($this->form_validation->run() !== FALSE) {
        $data = $this->ModelUser->login();
        switch ($data) {
          case 'salah_password':
            $this->session->set_flashdata('pesan', 
              '<div class="alert alert-danger" role="alert">
                Password salah
              </div>'
            );
            break;

          case 'salah_username':
            $this->session->set_flashdata('pesan', 
              '<div class="alert alert-danger" role="alert">
                Username salah
              </div>'
            );
            break;
          
          default:
            $this->session->set_userdata([
              'username'  => $data['username'],
              'level'     => $data['level']
            ]);
            switch ($data['level']) {
              case 'tu':
                redirect('tata_usaha');
                break;

              case 'siswa':
                redirect('siswa');
                break;
              
              default:
                # code...
                break;
            }
            break;
        }
      } else {
        $this->session->set_flashdata('pesan', 
          '<div class="alert alert-danger" role="alert">'
            . validation_errors() . 
          '</div>'
        );
      }
      redirect('login');
    }
		$this->load->view('login');
	}
}
