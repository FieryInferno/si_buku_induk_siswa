<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelSiswa extends CI_Model {
  
	public function getAll()
	{
    return $this->db->get('siswa')->result_array();
	}
  
	public function get($id_siswa)
	{
    return $this->db->get_where('siswa', ['id_siswa'  => $id_siswa])->row_array();
	}

  public function tambah()
  {
    $this->db->insert('siswa', [
      'no_induk'  => $this->input->post('no_induk'),
      'nama'      => $this->input->post('nama'),
      'kelas'     => $this->input->post('kelas')
    ]);
  }

  public function edit($id_siswa)
  {
    $this->db->update('siswa', [
      'no_induk'  => $this->input->post('no_induk'),
      'nama'      => $this->input->post('nama'),
      'kelas'     => $this->input->post('kelas')
    ], ['id_siswa'  => $id_siswa]);
  }
}