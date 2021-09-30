<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelProfile extends CI_Model {

  public function get()
  {
    return $this->db->get_where('user', ['id_user'  => $this->session->id_user])->row_array();
  }

  public function update()
  {
    $this->db->update('profile_sekolah', [
      'npsn'              => $this->input->post('npsn'),
      'bentuk_pendidikan' => $this->input->post('bentuk_pendidikan'),
      'status'            => $this->input->post('status'),
      'provinsi'          => $this->input->post('provinsi'),
      'kabupaten'         => $this->input->post('kabupaten'),
      'kecamatan'         => $this->input->post('kecamatan'),
      'email'             => $this->input->post('email'),
      'operator'          => $this->input->post('operator'),
      'kepala_sekolah'    => $this->input->post('kepala_sekolah'),
    ], ['id_profile_sekolah'  => '1']);
  }
}
