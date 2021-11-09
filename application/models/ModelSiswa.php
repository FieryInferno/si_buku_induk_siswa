<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelSiswa extends CI_Model {
  
	public function getAll($status)
	{
    $this->db->join('kelas', 'siswa.kelas = kelas.id_kelas', 'left outer'); 
    $this->db->join('user', 'siswa.user_id = user.id_user');
    if ($status) {
      $this->db->where('status', $status);
    }
    return $this->db->get('siswa')->result_array();
	}

  public function tambah()
  {
    $id_user  = uniqid();
    $username = preg_replace("/[^a-zA-Z]/", "", $this->input->post('nama'));
    $foto     = $this->uploadFoto();

    $this->db->insert('user', [
      'id_user'     => $id_user,
      'username'    => $username,
      'password'    => password_hash($username, PASSWORD_DEFAULT),
      'level'       => 'siswa',
      'created_at'  => date('Y-m-d h:i:s')
    ]);
    
    $this->db->insert('siswa', [
      'user_id'             => $id_user,
      'nama'                => $this->input->post('nama'),
      'jenis_kelamin'       => $this->input->post('jenis_kelamin'),
      'nisn'                => $this->input->post('nisn'),
      'nis'                 => $this->input->post('nis'),
      'nik'                 => $this->input->post('nik'),
      'tempat_lahir'        => $this->input->post('tempat_lahir'),
      'tanggal_lahir'       => $this->input->post('tanggal_lahir'),
      'alamat'              => $this->input->post('alamat'),
      'anak_ke'             => $this->input->post('anak_ke'),
      'nama_ayah'           => $this->input->post('nama_ayah'),
      'nik_ayah'            => $this->input->post('nik_ayah'),
      'tanggal_lahir_ayah'  => $this->input->post('tanggal_lahir_ayah'),
      'nama_ibu'            => $this->input->post('nama_ibu'),
      'nik_ibu'             => $this->input->post('nik_ibu'),
      'tanggal_lahir_ibu'   => $this->input->post('tanggal_lahir_ibu'),
      'foto'                => $foto,
      'created_at'          => date('Y-m-d h:i:s'),
      'tanggal_masuk'       => $this->input->post('tanggal_masuk'),
      'asal_sekolah'        => $this->input->post('asal_sekolah'),
      'no_ijazah'           => $this->input->post('no_ijazah'),
      'no_akte'             => $this->input->post('no_akte')
    ]);
  }

  public function edit($id_siswa)
  {
    if ($_FILES['foto']['name'] !== '') {
      $foto = $this->uploadFoto();
      file_exists('assets/images/' . $this->input->post('foto_lama')) ? unlink('assets/images/' . $this->input->post('foto_lama')) : '';
    } else {
      $foto = $this->input->post('foto_lama');
    }

    $siswa    = $this->find($id_siswa);
    $username = preg_replace("/[^a-zA-Z]/", "", $this->input->post('nama'));

    $this->db->update('user', [
      'username'    => $username,
      'password'    => password_hash($username, PASSWORD_DEFAULT),
      'updated_at'  => date('Y-m-d h:i:s')
    ], ['id_user' => $siswa['id_user']]);

    $this->db->update('siswa', [
      'nama'                => $this->input->post('nama'),
      'jenis_kelamin'       => $this->input->post('jenis_kelamin'),
      'nisn'                => $this->input->post('nisn'),
      'nis'                 => $this->input->post('nis'),
      'nik'                 => $this->input->post('nik'),
      'tempat_lahir'        => $this->input->post('tempat_lahir'),
      'tanggal_lahir'       => $this->input->post('tanggal_lahir'),
      'alamat'              => $this->input->post('alamat'),
      'anak_ke'             => $this->input->post('anak_ke'),
      'nama_ayah'           => $this->input->post('nama_ayah'),
      'nik_ayah'            => $this->input->post('nik_ayah'),
      'tanggal_lahir_ayah'  => $this->input->post('tanggal_lahir_ayah'),
      'nama_ibu'            => $this->input->post('nama_ibu'),
      'nik_ibu'             => $this->input->post('nik_ibu'),
      'tanggal_lahir_ibu'   => $this->input->post('tanggal_lahir_ibu'),
      'foto'                => $foto,
      'updated_at'          => date('Y-m-d h:i:s'),
      'tanggal_masuk'       => $this->input->post('tanggal_masuk'),
      'asal_sekolah'        => $this->input->post('asal_sekolah'),
      'no_ijazah'           => $this->input->post('no_ijazah'),
      'no_akte'             => $this->input->post('no_akte')
    ], ['id_siswa'  => $id_siswa]);
  }

  public function hapus($id_siswa)
  {
    $siswa  = $this->find($id_siswa);
    $this->db->delete('siswa', ['id_siswa'  => $siswa['id_siswa']]);
    $this->db->delete('user', ['id_user' => $siswa['user_id']]);
  }

  public function registrasi($id_siswa)
  {
    $this->db->update('siswa', [
      'status'  => $this->input->post('alasan'),
      'tanggal_siswa_keluar'  => $this->input->post('tanggal_siswa_keluar')
    ], ['id_siswa'  => $id_siswa]);
  }

  public function getBiodata()
  {
    $this->db->join('kelas', 'siswa.kelas = kelas.id_kelas', 'left outer');
    $this->db->join('user', 'siswa.id_user = user.id_user');
    return $this->db->get_where('siswa', ['siswa.id_user'  => $this->session->id_user])->row_array();
  }

  public function getSiswaKeluar()
  {
    $this->db->join('kelas', 'siswa.kelas = kelas.id_kelas', 'left outer');
    $this->db->where('status !=', 'aktif');
    return $this->db->get('siswa')->result_array();
  }

  public function mataPelajaran($id_siswa)
  {
    $this->db->join('siswa', 'kelas_mata_pelajaran.id_kelas = siswa.kelas');
    $this->db->join('mata_pelajaran', 'kelas_mata_pelajaran.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran');
    return $this->db->get_where('kelas_mata_pelajaran', ['siswa.id_siswa' => $id_siswa])->result_array();
  }

  private function uploadFoto()
  {
    $config['upload_path']          = './assets/images';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';

    $this->upload->initialize($config);

    if (!$this->upload->do_upload('foto'))
    {
      $this->session->set_flashdata('pesan', 
        '<div class="alert alert-danger" role="alert">'
          . $this->upload->display_errors() . 
        '</div>'
      );
      redirect('tata_usaha/siswa/tambah');
    } else {
      return $this->upload->data('file_name');
    }
  }

  public function find($id_siswa)
  {
    return $this->db->get_where('siswa', ['id_siswa'  => $id_siswa])->row_array();
  }

  public function getByNisn($nisn)
  {
    return $this->db->get_where('siswa', ['nisn' => $nisn])->row_array();
  }
}
