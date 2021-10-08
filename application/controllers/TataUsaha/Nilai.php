<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/autoload.php");
use Dompdf\Dompdf;
use Dompdf\Options;

class Nilai extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'tata_usaha/nilai/index';
		$this->load->view('tata_usaha/template', $data);
	}

  public function cariSiswa()
  {
    $data           = $this->ModelSiswa->getByNisn($this->input->get('nisn'));
    $data['konten'] = 'tata_usaha/nilai/tampil_siswa';
    $data['nilai']  = $this->ModelNilai->getAll($data['id_siswa']);
		$this->load->view('tata_usaha/template', $data);
  }

  public function tambahSemester()
  {
    $data           = $this->ModelSiswa->getByNisn($this->input->get('nisn'));
    $data['konten'] = 'tata_usaha/nilai/tambah_semester';
		$this->load->view('tata_usaha/template', $data);
  }

  public function storeSemester()
  {
    $mata_pelajaran = $this->input->post('mata_pelajaran');
    $nilai          = $this->input->post('nilai');

    $id_nilai = $this->ModelNilai->store($this->input->post('id_siswa'), $this->input->post('semester'));
    
    for ($i=0; $i < count($mata_pelajaran); $i++) {
      $this->ModelNilai->storeDetail($id_nilai, $mata_pelajaran[$i], $nilai[$i]);
    }
    
    $this->session->set_flashdata('sukses', 'Berhasil tambah data semester');
    redirect('tata_usaha/nilai/cari_siswa?nisn=' . $this->input->get('nisn'));
  }

  public function editSemester()
  {
    $siswa            = $this->ModelSiswa->getByNisn($this->input->get('nisn'));
    $data             = $this->ModelNilai->getById($siswa['id_siswa']);
    $data['konten']   = 'tata_usaha/nilai/edit_semester';
    $data['id_siswa'] = $siswa['id_siswa'];
		$this->load->view('tata_usaha/template', $data);
  }

  public function updateSemester()
  {
    $mata_pelajaran = $this->input->post('mata_pelajaran');
    $nilai          = $this->input->post('nilai');

    $this->ModelNilai->update($this->input->post('id_nilai'), $this->input->post('semester'));
    $this->ModelNilai->deleteDetail($this->input->post('id_nilai'));
    
    for ($i=0; $i < count($mata_pelajaran); $i++) {
      $this->ModelNilai->storeDetail($this->input->post('id_nilai'), $mata_pelajaran[$i], $nilai[$i]);
    }
    
    $this->session->set_flashdata('sukses', 'Berhasil edit data semester');
    redirect('tata_usaha/nilai/cari_siswa?nisn=' . $this->input->get('nisn'));
  }
  
	public function tambah($id_siswa)
	{
    if ($this->input->post()) {
      $this->ModelNilai->tambah($id_siswa);
      $this->session->set_flashdata('pesan', 
        '<div class="alert alert-success" role="alert">
          Berhasil tambah data
        </div>'
      );
      redirect('tata_usaha/nilai');
    }
    $data['id_siswa']       = $id_siswa;
    $data['konten']         = 'tata_usaha/inputNilai';
    $data['mata_pelajaran'] = $this->ModelSiswa->mataPelajaran($id_siswa);
		$this->load->view('tata_usaha/template', $data);
	}
  
	public function edit($id_siswa)
	{
    if ($this->input->post()) {
      $this->ModelNilai->edit($id_siswa);
      $this->session->set_flashdata('pesan', 
        '<div class="alert alert-success" role="alert">
          Berhasil edit data
        </div>'
      );
      redirect('tata_usaha/nilai');
    }
    $data['nilai']          = $this->ModelNilai->getById($id_siswa);
    $data['konten']         = 'tata_usaha/editNilai';
    // $data['mata_pelajaran'] = $this->ModelSiswa->mataPelajaran($id_siswa);
    $data['id_siswa']       = $id_siswa;
		$this->load->view('tata_usaha/template', $data);
	}

  public function cetak()
  {
    $data['nilai']          = $this->ModelNilai->getAll();
    $data['mata_pelajaran'] = $this->ModelMataPelajaran->getAll();
      $this->load->view('nilai_pdf', $data);
  }
}
