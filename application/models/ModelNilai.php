<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelNilai extends CI_Model {
  
	public function getAll()
	{
    $data = $this->db->get_where('siswa', ['siswa.status' => 'aktif'])->result_array();
    for ($i=0; $i < count($data); $i++) {
      $key                = $data[$i];
      $this->db->join('mata_pelajaran', 'nilai.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran');
      $data[$i]['nilai']  = $this->db->get_where('nilai', ['id_siswa' => $key['id_siswa']])->result_array();
      $totalNilai         = 0;
      foreach ($data[$i]['nilai'] as $key) {
        $totalNilai += $key['nilai'];
      }

      if (count($data[$i]['nilai']) == 0) $data[$i]['rata']  = 0;
      else $data[$i]['rata']  = $totalNilai / count($data[$i]['nilai']);
    }
    return $data;
	}

  public function tambah($id_siswa)
  {
    foreach ($this->input->post() as $key => $value) {
      $this->db->insert('nilai', [
        'id_siswa'          => $id_siswa,
        'id_mata_pelajaran' => $key,
        'nilai'             => $value
      ]);
    }
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
