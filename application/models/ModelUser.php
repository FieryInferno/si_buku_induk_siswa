<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model {
  
	public function login()
	{
    $data = $this->db->get_where('user', ['username'  => $this->input->post('username')])->row_array();
    if ($data) {
      if (password_verify($this->input->post('password'), $data['password'])) {
        return $data;
      } else {
        return 'salah_password';
      }
    } else {
      return 'salah_username';
    }
	}
}
