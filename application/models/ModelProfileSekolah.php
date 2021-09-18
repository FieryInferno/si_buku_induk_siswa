<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelProfileSekolah extends CI_Model {

  public function get()
  {
    return $this->db->get('profile_sekolah')->row_array();
  }
}
