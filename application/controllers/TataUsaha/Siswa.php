<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
  
	public function index($status = null)
	{
    $data['konten'] = 'tata_usaha/siswa'; 
    $data['siswa']  = $this->ModelSiswa->getAll($status);
		$this->load->view('tata_usaha/template', $data);
	}
  
	public function tambah()
	{
    if ($this->input->post()) {
      $this->form_validation->set_rules('no_induk', 'No Induk', 'trim|numeric|required');
      $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
      $this->form_validation->set_rules('jenis', 'Jenis', 'trim|required');
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
  
	public function edit($id_user)
	{
    if ($this->input->post()) {
      $this->form_validation->set_rules('no_induk', 'No Induk', 'trim|numeric|required');
      $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
      if ($this->form_validation->run()) {
        $this->ModelSiswa->edit($id_user);
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
    $data           = $this->ModelSiswa->get($id_user);
    $data['konten'] = 'tata_usaha/editSiswa';
		$this->load->view('tata_usaha/template', $data);
	}

  public function hapus($id_user)
  {
    $this->ModelSiswa->hapus($id_user);
    $this->session->set_flashdata('pesan', 
      '<div class="alert alert-success" role="alert">
        Berhasil hapus data
      </div>'
    );
    redirect('tata_usaha/siswa');
  }

  public function registrasi($id_user)
  {
    $this->ModelSiswa->registrasi($id_user);
    $this->session->set_flashdata('pesan', 
      '<div class="alert alert-success" role="alert">
        Berhasil registrasi data
      </div>'
    );
    redirect('tata_usaha/siswa');
  }

  public function cetak($id_user)
  {
    $this->db->join('kelas', 'siswa.kelas = kelas.id_kelas', 'left');
    $data = $this->db->get_where('siswa', ['id_user'  => $id_user])->row_array();
		$this->load->view('tata_usaha/biodataSiswaPdf', $data);
  }

  public function siswaKeluar()
  {
    $data['konten'] = 'tata_usaha/siswaKeluar'; 
    $data['siswa']  = $this->ModelSiswa->getSiswaKeluar();
		$this->load->view('tata_usaha/template', $data);
  }

  public function usernamePassword()
  {
    $data['konten'] = 'tata_usaha/usernamePassword'; 
    $data['siswa']  = $this->ModelSiswa->getAll('aktif');
		$this->load->view('tata_usaha/template', $data);
  }

  public function editUsernamePassword($id_user)
  {
    if ($this->input->post()) {
      $this->db->update('user', [
        'username'  => $this->input->post('username'),
        'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
      ], ['id_user' => $id_user]);
      $this->session->set_flashdata('pesan', 
        '<div class="alert alert-success" role="alert">
          Berhasil edit username dan password
        </div>'
      );
      redirect('tata_usaha/username_password');
    }
    $data           = $this->ModelSiswa->get($id_user);
    $data['konten'] = 'tata_usaha/editUsernamePassword'; 
		$this->load->view('tata_usaha/template', $data);
  }
}
