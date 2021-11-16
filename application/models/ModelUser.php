<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model {
  
	public function login()
	{
    $data = $this->db->get_where('user', ['username'  => $this->input->post('username')])->row_array();
    if ($data) {
      if ($data['status_user'] == 'aktif') {
        if (password_verify($this->input->post('password'), $data['password'])) {
          return $data;
        } else {
          return 'salah_password';
        }
      } else {
        return 'user_tidak_aktif';
      }
    } else {
      return 'salah_username';
    }
	}

  public function updateStatus($status, $id_user)
  {
    $this->db->update('user', ['status_user' => $status], ['id_user' => $id_user]);
  }

  public function get($id_user)
  {
    return $this->db->get_where('user', ['id_user' => $id_user])->row_array();
  }
}
