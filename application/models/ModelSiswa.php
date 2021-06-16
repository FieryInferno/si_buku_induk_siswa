<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelSiswa extends CI_Model {
  
	public function getAll($status)
	{
    $this->db->join('kelas', 'siswa.kelas = kelas.id_kelas', 'left outer');
    if ($status) {
      $this->db->where('status', $status);
    }
    return $this->db->get('siswa')->result_array();
	}
  
	public function get($id_siswa)
	{
    return $this->db->get_where('siswa', ['id_siswa'  => $id_siswa])->row_array();
	}

  public function tambah()
  {
    $id_user  = uniqid();
    $this->db->insert('siswa', [
      'no_induk'  => $this->input->post('no_induk'),
      'nama'      => $this->input->post('nama'),
      'id_user'   => $id_user
    ]);

    $this->db->insert('user', [
      'username'  => $this->input->post('username'),
      'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'level'     => 'siswa',
      'id_user'   => $id_user
    ]);
  }

  public function edit($id_siswa)
  {
    $this->db->update('siswa', [
      'no_induk'  => $this->input->post('no_induk'),
      'nama'      => $this->input->post('nama'),
      'status'    => $this->input->post('status')
    ], ['id_siswa'  => $id_siswa]);
  }

  public function hapus($id_siswa)
  {
    $this->db->delete('siswa', ['id_siswa'  => $id_siswa]);
  }

  public function getBiodata()
  {
    $this->db->join('kelas', 'siswa.kelas = kelas.id_kelas', 'left outer');
    $this->db->join('user', 'siswa.id_user = user.id_user');
    return $this->db->get_where('siswa', ['siswa.id_user'  => $this->session->id_user])->row_array();
  }
}
