<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelSiswa extends CI_Model {
  
	public function getAll($status)
	{
    $this->db->join('kelas', 'siswa.kelas = kelas.id_kelas', 'left outer');
    $this->db->join('orang_tua', 'siswa.id_user = orang_tua.id_user', 'left outer');
    $this->db->join('user', 'siswa.id_user = user.id_user');
    if ($status) {
      $this->db->where('status', $status);
    }
    return $this->db->get('siswa')->result_array();
	}
  
	public function get($id_user)
	{
    $this->db->join('kelas', 'siswa.kelas = kelas.id_kelas', 'left outer');
    $this->db->join('orang_tua', 'siswa.id_user = orang_tua.id_user', 'left outer');
    $this->db->join('user', 'siswa.id_user = user.id_user');
    return $this->db->get_where('siswa', ['siswa.id_user'  => $id_user])->row_array();
	}

  public function tambah()
  {
    $id_user  = uniqid();
    $this->db->insert('siswa', [
      'no_induk'      => $this->input->post('no_induk'),
      'nama'          => $this->input->post('nama'),
      'alamat'        => $this->input->post('alamat'),
      'tempat_lahir'  => $this->input->post('tempat_lahir'),
      'tanggal_lahir' => $this->input->post('tanggal_lahir'),
      'id_user'       => $id_user,
      'jenis'         => $this->input->post('jenis')
    ]);

    $this->db->insert('user', [
      'username'  => $this->input->post('username'),
      'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'level'     => 'siswa',
      'id_user'   => $id_user
    ]);

    $this->db->insert('orang_tua', [
      'nama_orang_tua'          => $this->input->post('nama_orang_tua'),
      'tempat_lahir_orang_tua'  => $this->input->post('tempat_lahir_orang_tua'),
      'tanggal_lahir_orang_tua' => $this->input->post('tanggal_lahir_orang_tua'),
      'id_user'                 => $id_user
    ]);
  }

  public function edit($id_user)
  {
    $this->db->update('siswa', [
      'no_induk'      => $this->input->post('no_induk'),
      'nama'          => $this->input->post('nama'),
      'alamat'        => $this->input->post('alamat'),
      'tempat_lahir'  => $this->input->post('tempat_lahir'),
      'tanggal_lahir' => $this->input->post('tanggal_lahir'),
    ], ['id_user'     => $id_user]);

    $this->db->update('orang_tua', [
      'nama_orang_tua'          => $this->input->post('nama_orang_tua'),
      'tempat_lahir_orang_tua'  => $this->input->post('tempat_lahir_orang_tua'),
      'tanggal_lahir_orang_tua' => $this->input->post('tanggal_lahir_orang_tua'),
    ], ['id_user' => $id_user]);
  }

  public function hapus($id_user)
  {
    $this->db->delete('siswa', ['id_user'  => $id_user]);
    $this->db->delete('orang_tua', ['id_user' => $id_user]);
    $this->db->delete('user', ['id_user' => $id_user]);
  }

  public function registrasi($id_user)
  {
    $this->db->update('siswa', ['status'  => $this->input->post('status')], ['id_user'  => $id_user]);

    if ($this->input->post('status') == 'pindah' || $this->input->post('status') == 'alumni') {
      $siswa_keluar = $this->db->get_where('siswa_keluar', ['id_user' => $id_user])->row_array();
      if ($siswa_keluar) {
        $this->db->update('siswa_keluar', ['tanggal_siswa_keluar'  => date('Y-m-d')], ['id_user' => $id_user]);
      } else {
        $this->db->insert('siswa_keluar', [
          'id_user'               => $id_user,
          'tanggal_siswa_keluar'  => date('Y-m-d')
        ]);
      }
    } else {
      $this->db->delete('siswa_keluar', ['id_user'  => $id_user]);
    }
  }

  public function getBiodata()
  {
    $this->db->join('kelas', 'siswa.kelas = kelas.id_kelas', 'left outer');
    $this->db->join('user', 'siswa.id_user = user.id_user');
    return $this->db->get_where('siswa', ['siswa.id_user'  => $this->session->id_user])->row_array();
  }

  public function getSiswaKeluar()
  {
    $this->db->join('siswa', 'siswa.id_user = siswa_keluar.id_user');
    $this->db->join('kelas', 'siswa.kelas = kelas.id_kelas', 'left outer');
    if ($this->input->get('tahun')) $this->db->where('year(tanggal_siswa_keluar)', $this->input->get('tahun'));
    return $this->db->get('siswa_keluar')->result_array();
  }

  public function mataPelajaran($id_siswa)
  {
    $this->db->join('siswa', 'kelas_mata_pelajaran.id_kelas = siswa.kelas');
    $this->db->join('mata_pelajaran', 'kelas_mata_pelajaran.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran');
    return $this->db->get_where('kelas_mata_pelajaran', ['siswa.id_siswa' => $id_siswa])->result_array();
  }
}
