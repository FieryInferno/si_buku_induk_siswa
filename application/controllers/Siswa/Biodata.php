<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/autoload.php");
use Dompdf\Dompdf;
use Dompdf\Options;

class Biodata extends CI_Controller {
  
	public function index()
	{
    $data           = $this->ModelSiswa->getBiodata();
    $data['konten'] = 'siswa/biodata'; 
		$this->load->view('siswa/template', $data);
	}

  public function print()
  {
    $data = $this->ModelSiswa->getBiodata();
    ob_start(); 
      $this->load->view('siswa/biodata_pdf', $data);
      $html = ob_get_contents();
    ob_end_clean();
    ob_clean();
    $filename   = uniqid();
    $options  	= new Options();
    $options->set('isRemoteEnabled', TRUE);
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('legal', 'portrait');
    $dompdf->render();
    $output = $dompdf->output();
    $dompdf->stream($filename, array("Attachment" => 0) );
  }
}
