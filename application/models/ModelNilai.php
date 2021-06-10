<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelNilai extends CI_Model {
  
	public function getAll()
	{
    $this->db->join('siswa', 'nilai.id_siswa = siswa.id_siswa', 'right outer');
    return $this->db->get('nilai')->result_array();
	}

  public function tambah()
  {
    $this->db->insert('nilai', [
      'id_siswa'  => $this->input->post('id_siswa'),
      'nilai'     => $this->input->post('nilai')
    ]);
  }

  public function edit()
  {
    $this->db->update('nilai', ['nilai' => $this->input->post('nilai')], ['id_nilai'  => $this->input->post('id_nilai')]);
  }
}
