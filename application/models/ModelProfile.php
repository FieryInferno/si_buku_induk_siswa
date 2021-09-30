<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelProfile extends CI_Model {

  public function get()
  {
    return $this->db->get_where('user', ['id_user'  => $this->session->id_user])->row_array();
  }

  public function update()
  {
    $data['username']   = $this->input->post('username');
    $data['updated_at'] = date('Y-m-d');

    if ($this->input->post('password')) {
      $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
    }

    $this->db->update('user', $data, ['id_user'  => $this->session->id_user]);
  }
}
