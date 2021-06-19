<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelNilai extends CI_Model {
  
	public function getAll()
	{
    $this->db->join('siswa', 'nilai.id_siswa = siswa.id_siswa', 'right outer');
    return $this->db->get_where('nilai', ['siswa.status'  => 'aktif'])->result_array();
	}

  public function tambah($id_siswa)
  {
    $nilai_rata_rata  = ($this->input->post('pendidikan_agama') + $this->input->post('pkn') + $this->input->post('bahasa_indonesia') + $this->input->post('matematika_wajib') + $this->input->post('sejarah_indonesia') + $this->input->post('bahasa_inggris') + $this->input->post('seni_budaya') + $this->input->post('penjaskes')) / 8;
    $this->db->insert('nilai', [
      'id_siswa'          => $id_siswa,
      'pendidikan_agama'  => $this->input->post('pendidikan_agama'),
      'pkn'               => $this->input->post('pkn'),
      'bahasa_indonesia'  => $this->input->post('bahasa_indonesia'),
      'matematika'        => $this->input->post('matematika_wajib'),
      'sejarah_indonesia' => $this->input->post('sejarah_indonesia'),
      'bahasa_inggris'    => $this->input->post('bahasa_inggris'),
      'seni_budaya'       => $this->input->post('seni_budaya'),
      'penjaskes'         => $this->input->post('penjaskes'),
      'nilai_rata_rata'   => $nilai_rata_rata
    ]);
  }

  public function edit($id_siswa)
  {
    $nilai_rata_rata  = ($this->input->post('pendidikan_agama') + $this->input->post('pkn') + $this->input->post('bahasa_indonesia') + $this->input->post('matematika_wajib') + $this->input->post('sejarah_indonesia') + $this->input->post('bahasa_inggris') + $this->input->post('seni_budaya') + $this->input->post('penjaskes')) / 8;
    $this->db->update('nilai', [
      'pendidikan_agama'  => $this->input->post('pendidikan_agama'),
      'pkn'               => $this->input->post('pkn'),
      'bahasa_indonesia'  => $this->input->post('bahasa_indonesia'),
      'matematika'        => $this->input->post('matematika_wajib'),
      'sejarah_indonesia' => $this->input->post('sejarah_indonesia'),
      'bahasa_inggris'    => $this->input->post('bahasa_inggris'),
      'seni_budaya'       => $this->input->post('seni_budaya'),
      'penjaskes'         => $this->input->post('penjaskes'),
      'nilai_rata_rata'   => $nilai_rata_rata
    ], ['id_siswa'  => $id_siswa]);
  }

  public function getById($id_siswa)
  {
    $this->db->join('siswa', 'nilai.id_siswa = siswa.id_siswa');
    return $this->db->get_where('nilai', ['nilai.id_siswa'  => $id_siswa])->row_array();
  }
}
