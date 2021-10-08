<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelNilai extends CI_Model {
  
  public function store($id_siswa, $semester)
  {
    $id_nilai = uniqid();

    $this->db->insert('nilai', [
      'id_nilai'      => $id_nilai,
      'siswa_id'      => $id_siswa,
      'nama_semester' => $semester
    ]);

    return $id_nilai;
  }

  public function storeDetail($id_nilai, $mata_pelajaran, $nilai)
  {
    $this->db->insert('detail_nilai', [
      'nilai_id'        => $id_nilai,
      'mata_pelajaran'  => $mata_pelajaran,
      'nilai'           => $nilai
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

  public function getAll($id_siswa)
  {
    $this->db->select('id_nilai, nama_semester');
    $nilai  = $this->db->get_where('nilai', ['siswa_id'  => $id_siswa])->result_array();

    for ($i=0; $i < count($nilai); $i++) {
      $key    = $nilai[$i];
      $detail = $this->db->get_where('detail_nilai', ['nilai_id' => $key['id_nilai']])->result_array();
      $jumlah = 0;

      foreach ($detail as $value) {
        $jumlah += $value['nilai'];
      }

      $nilai[$i]['jumlah_mata_pelajaran'] = count($detail);
      $nilai[$i]['rata']                  = $jumlah / count($detail);
      $nilai[$i]['detail']                = $detail;
    }

    return $nilai;
  }

  public function getById($id_siswa)
  {
    $this->db->select('id_nilai, nama_semester');
    $nilai  = $this->db->get_where('nilai', ['siswa_id'  => $id_siswa])->row_array();

    $detail = $this->db->get_where('detail_nilai', ['nilai_id' => $nilai['id_nilai']])->result_array();
    $jumlah = 0;

    foreach ($detail as $value) {
      $jumlah += $value['nilai'];
    }

    $nilai['jumlah_mata_pelajaran'] = count($detail);
    $nilai['rata']                  = $jumlah / count($detail);
    $nilai['detail']                = $detail;

    return $nilai;
  }
}
