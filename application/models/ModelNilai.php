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

  public function store($id_siswa, $mata_pelajaran, $nilai)
  {
    $this->db->insert('nilai', [
      'siswa_id'            => $id_siswa,
      'nama_mata_pelajaran' => $mata_pelajaran,
      'nilai'               => $nilai
    ]);
  }

  public function edit($id_siswa)
  {
    foreach ($this->input->post() as $key => $value) {
      $data = $this->db->get_where('nilai', [
        'id_mata_pelajaran' => $key,
        'id_siswa'          => $id_siswa
      ])->row_array();
      if ($data) {
        $this->db->update('nilai', [
          'id_mata_pelajaran' => $key,
          'nilai'             => $value
        ], [
          'id_siswa'          => $id_siswa,
          'id_mata_pelajaran' => $key
        ]);
      } else {
        $this->db->insert('nilai', [
          'id_siswa'          => $id_siswa,
          'id_mata_pelajaran' => $key,
          'nilai'             => $value
        ]);
      }
    }
  }

  public function getById($id_siswa)
  {
    $siswa  = $this->db->get_where('siswa', ['id_siswa' => $id_siswa])->row_array();
    $this->db->join('mata_pelajaran', 'kelas_mata_pelajaran.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran');
    $this->db->join('nilai', 'nilai.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran', 'left outer');
    $this->db->where('nilai.id_siswa', $id_siswa);
    $this->db->select('mata_pelajaran.id_mata_pelajaran, mata_pelajaran.nama_mata_pelajaran, nilai.nilai');
    return $this->db->get_where('kelas_mata_pelajaran', [
      'nilai.id_siswa'                => $id_siswa,
      'kelas_mata_pelajaran.id_kelas' => $siswa['kelas']
    ])->result_array();
  }
}
