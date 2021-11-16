<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
  
	public function index($status = 'aktif')
	{
    $data['konten'] = 'tata_usaha/siswa/index'; 
    $data['siswa']  = $this->ModelSiswa->getAll($status);
		$this->load->view('tata_usaha/template', $data);
	}
  
	public function create()
	{
    $data['konten'] = 'tata_usaha/siswa/tambah';
		$this->load->view('tata_usaha/template', $data);
	}

  public function store()
  {
    $this->ModelSiswa->tambah();
    $this->session->set_flashdata('pesan', 
      '<div class="alert alert-success" role="alert">
        Berhasil tambah data
      </div>'
    );
    redirect('tata_usaha/siswa');
  }

  public function show($id_siswa)
  {
    $data           = $this->ModelSiswa->find($id_siswa);
    $data['konten'] = 'tata_usaha/siswa/detail'; 
		$this->load->view('tata_usaha/template', $data);
  }
  
	public function edit($id_siswa)
	{
    $data           = $this->ModelSiswa->find($id_siswa);
    $data['konten'] = 'tata_usaha/siswa/edit';
		$this->load->view('tata_usaha/template', $data);
	}

  public function update($id_siswa)
  { 
    $this->ModelSiswa->edit($id_siswa);
    $this->session->set_flashdata('pesan', 
      '<div class="alert alert-success" role="alert">
        Berhasil edit data
      </div>'
    );
    redirect('tata_usaha/siswa');
  }

  public function destroy($id_siswa)
  {
    $this->ModelSiswa->hapus($id_siswa);
    $this->session->set_flashdata('pesan', 
      '<div class="alert alert-success" role="alert">
        Berhasil hapus data
      </div>'
    );
    redirect('tata_usaha/siswa');
  }

  public function registrasi($id_siswa)
  {
    $this->ModelSiswa->registrasi($id_siswa);
    $this->session->set_flashdata('pesan', 
      '<div class="alert alert-success" role="alert">
        Berhasil registrasi data
      </div>'
    );
    redirect('tata_usaha/siswa');
  }

  public function cetak($id_siswa)
  {
    $this->db->join('kelas', 'siswa.kelas = kelas.id_kelas', 'left');
    $data             = $this->db->get_where('siswa', ['id_siswa'  => $id_siswa])->row_array();
    $data['sekolah']  = $this->ModelProfileSekolah->get();
		$this->load->view('tata_usaha/siswa/cetak', $data);
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

  public function updateStatus($status, $id_user)
  {
    $this->ModelUser->updateStatus($status, $id_user);
    $this->session->set_flashdata('pesan', 
      '<div class="alert alert-success" role="alert">
        Berhasil update status
      </div>'
    );
    redirect('tata_usaha/username_password');
  }
}
