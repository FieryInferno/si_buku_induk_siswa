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
		$this->load->view('tata_usaha/template', $data);
  }

  public function tambahSemester()
  {
    $data['konten'] = 'tata_usaha/nilai/tambah_semester';
		$this->load->view('tata_usaha/template', $data);
  }

  public function storeSemester()
  {
    
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
