<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelMataPelajaran extends CI_Model {
  
	public function getAll()
	{
    return $this->db->get('mata_pelajaran')->result_array();
	}

  public function tambah()
  {
    $this->db->insert('mata_pelajaran', ['nama_mata_pelajaran' => $this->input->post('nama_mata_pelajaran')]);
  }

  public function edit($id_mata_pelajaran)
  {
    $this->db->update('mata_pelajaran', [
      'nama_mata_pelajaran' => $this->input->post('nama_mata_pelajaran'),
      'nama_guru'           => $this->input->post('nama_guru')
    ], ['id_mata_pelajaran'  => $id_mata_pelajaran]);
  }

  public function getById($id_mata_pelajaran)
  {
    return $this->db->get_where('mata_pelajaran', ['id_mata_pelajaran'  => $id_mata_pelajaran])->row_array();
  }

  public function hapus($id_mata_pelajaran)
  {
    $this->db->delete('mata_pelajaran', ['id_mata_pelajaran'  => $id_mata_pelajaran]);
  }
}
