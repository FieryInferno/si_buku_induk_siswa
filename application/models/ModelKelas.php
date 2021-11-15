<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKelas extends CI_Model {
  
  public function tambah()
  {
    $this->db->insert('kelas', [
      'nama_kelas'      => $this->input->post('nama_kelas'),
      'nama_wali_kelas' => $this->input->post('nama_wali_kelas')
    ]);
  }

  public function getAll()
  {
    return $this->db->get('kelas')->result_array();
  }
  
	public function get($id_kelas)
	{
    return $this->db->get_where('kelas', ['id_kelas'  => $id_kelas])->row_array();
	}

  public function edit($id_kelas)
  {
    $this->db->update('kelas', ['nama_kelas'  => $this->input->post('nama_kelas')], ['id_kelas' => $id_kelas]);
  }

  public function hapus($id_kelas)
  {
    $this->db->delete('kelas', ['id_kelas' => $id_kelas]);
  }

  public function lihat($id_kelas)
  {
    return $this->db->get_where('siswa', ['kelas' => $id_kelas])->result_array();
  }

  public function siswaBelumPunyaKelas()
  {
    return $this->db->get_where('siswa', ['kelas'  => NULL])->result_array();
  }

  public function tambahAnggota($id_kelas)
  {
    foreach ($this->input->post('siswa') as $key) {
      $this->db->update('siswa', ['kelas' => $id_kelas], ['id_siswa'  => $key]);
    }
  }

  public function tambahMataPelajaran($id_kelas)
  {
    $this->db->insert('mata_pelajaran', [
      'nama_mata_pelajaran' => $this->input->post('nama_mata_pelajaran'),
      'nama_guru'           => $this->input->post('nama_guru'),
      'kelas_id'            => $id_kelas
    ]);
  }

  public function hapusAnggota($id_siswa)
  {
    $this->db->update('siswa', ['kelas' => NULL], ['id_siswa' => $id_siswa]);
  }

  public function mataPelajaran($id_kelas)
  {
    return $this->db->get_where('mata_pelajaran', ['kelas_id' => $id_kelas])->result_array();
  }

  public function naikKelas($id_kelas, $namaKelasBaru)
  {
    $this->db->update('kelas', ['nama_kelas'  => $namaKelasBaru], ['id_kelas' => $id_kelas]);
  }
}
