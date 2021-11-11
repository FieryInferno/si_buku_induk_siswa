<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    if ($this->session->level) {
      switch ($this->session->level) {
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
    }
  }
  
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

            case 'user_tidak_aktif':
              $this->session->set_flashdata('pesan', 
                '<div class="alert alert-danger" role="alert">
                  User tidak aktif
                </div>'
              );
              break;
          
          default:
            $this->session->set_userdata([
              'username'  => $data['username'],
              'level'     => $data['level'],
              'id_user'   => $data['id_user']
            ]);
            if ($data['level']  == 'siswa') {
              $siswa  = $this->db->get_where('siswa', ['user_id'  => $data['id_user']])->row_array();
              $this->session->set_userdata(['id_kelas'  => $siswa['kelas']]);
            }
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
