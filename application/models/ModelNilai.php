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
  
  public function update($id_nilai, $semester)
  {
    $this->db->update('nilai', [
      'nama_semester' => $semester
    ], ['id_nilai'  => $id_nilai]);
  }

  public function storeDetail($id_nilai, $mata_pelajaran, $pengetahuan, $keterampilan)
  {
    $this->db->insert('detail_nilai', [
      'nilai_id'        => $id_nilai,
      'mata_pelajaran'  => $mata_pelajaran,
      'pengetahuan'     => $pengetahuan,
      'keterampilan'    => $keterampilan
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
      $key                  = $nilai[$i];
      $detail               = $this->db->get_where('detail_nilai', ['nilai_id' => $key['id_nilai']])->result_array();
      $jumlah_pengetahuan   = 0;
      $jumlah_keterampilan  = 0;

      foreach ($detail as $value) {
        $jumlah_pengetahuan   += $value['pengetahuan'];
        $jumlah_keterampilan  += $value['keterampilan'];
      }

      $nilai[$i]['jumlah_mata_pelajaran'] = count($detail);
      $nilai[$i]['rata_pengetahuan']      = $jumlah_pengetahuan / count($detail);
      $nilai[$i]['rata_keterampilan']     = $jumlah_keterampilan / count($detail);
      $nilai[$i]['detail']                = $detail;
    }

    return $nilai;
  }

  public function getById($id_siswa)
  {
    $this->db->select('id_nilai, nama_semester');
    $nilai  = $this->db->get_where('nilai', ['siswa_id'  => $id_siswa])->row_array();

    $detail = $this->db->get_where('detail_nilai', ['nilai_id' => $nilai['id_nilai']])->result_array();
    $jumlah_pengetahuan   = 0;
    $jumlah_keterampilan  = 0;

    foreach ($detail as $value) {
      $jumlah_pengetahuan   += $value['pengetahuan'];
      $jumlah_keterampilan  += $value['keterampilan'];
    }

    $nilai['jumlah_mata_pelajaran'] = count($detail);
    $nilai['rata_pengetahuan']      = $jumlah_pengetahuan / count($detail);
    $nilai['rata_keterampilan']     = $jumlah_keterampilan / count($detail);
    $nilai['detail']                = $detail;

    return $nilai;
  }

  public function deleteDetail($id_nilai)
  {
    $this->db->delete('detail_nilai', ['nilai_id' => $id_nilai]);
  }
}
