<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelSiswa extends CI_Model {
  
	public function getAll()
	{
    return $this->db->get('siswa')->result_array();
	}
}
