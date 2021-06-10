<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKelas extends CI_Model {
  
  public function tambah()
  {
    $this->db->insert('kelas', ['nama_kelas'  => $this->input->post('nama_kelas')]);
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
}
