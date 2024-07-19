<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

class uploadUsulanAwal extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		if ($this->session->userdata('sts_login') != true) {

			$this->session->set_flashdata('psn', '
				<div class="alert alert-important alert-danger alert-dismissible" role="alert">
				<div class="d-flex">
				<div>
				<svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
				</div>
				<div>
				Anda Belum Login/Sessi Login Anda Telah Berakhir.!
				</div>
				</div>
				<a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
				</div>
				');

			redirect('/Login', 'refresh');
			return;
		}

		$this->load->model('M_dinamis');

	}

	public function index()
	{
		$tmp = array(
			'tittle' => 'Upload Usulan Awal',
			'tittle_header' => 'Upload Usulan Awal',
			'content' => 'usulanAwal'
		);
		$this->load->view('tamplate/baseTamplate', $tmp);
	}


	public function prdUpload()
	{
		


		$path = "./assets/upload usulan awal/";

		$pathX = $_FILES["fileExel"]['name'];
		$ext = pathinfo($pathX, PATHINFO_EXTENSION);

		$config['upload_path'] = $path;
		$config['allowed_types'] = 'xlsx|xls';
		$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.' . $ext;
		$config['max_size'] = 300000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('fileExel')) {

			echo $this->upload->display_errors();

		} else {

			$upload_data = $this->upload->data();
			$namaFile = $upload_data['file_name'];
			$fullPath = $upload_data['full_path'];

			$this->_readExcel($fullPath);
		}

		$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Berhasil </strong> Data Berhasil Disimpan.!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');

		redirect('uploadUsulanAwal', 'refresh');
		
	}


	private function _readExcel($file_path) {
        // Load file Excel
		$spreadsheet = IOFactory::load($file_path);

        // Ambil data dari sheet pertama
		$sheet = $spreadsheet->getActiveSheet();
		$highestRow = $sheet->getHighestRow();
		$thang = $this->session->userdata('thang');
		$dataIdPaket;
		$excel_data = array();

		$this->M_dinamis->delete('data_awal_airminum', ['ta' => $thang]);

        // Mulai membaca dari baris kedua
		for ($row = 3; $row <= $highestRow; $row++) {
			
			$nmkabkota = htmlspecialchars($sheet->getCell('B' . $row)->getValue(), ENT_QUOTES);
			$kdsatker= null;
			$dataIdPaket= null;
			$idpaket=0;

			$dataKdSatker = $this->M_dinamis->getById('acuan_krisna', ['nmkabkota' => $nmkabkota]);

			if ($dataKdSatker == null) {
				$dataKdSatker = $this->M_dinamis->getById('d009_dak_awal', ['nmkabkota' => $nmkabkota]);
			}

			if (@$dataKdSatker->nmkabkota != null) {

				$kdbidang = substr(htmlspecialchars($sheet->getCell('I' . $row)->getValue(), ENT_QUOTES), 0, 2);
				$fullBidang = htmlspecialchars($sheet->getCell('I' . $row)->getValue(), ENT_QUOTES);

				if ($kdbidang == '04') {
					
					$kdbidang = '03';
				}


				if ($kdbidang == '05') {
					
					$kdbidang = '04';
				}


				if ($kdbidang == '06') {
					
					$kdbidang = '05';
				}


				$kdsatker = $dataKdSatker->kdsatker.$kdbidang;


				$dataIdPaket = @$this->M_dinamis->max_value_by_where('data_awal_airminum', 'idpaket', ['kdsatker' => $kdsatker, 'ta' => $thang, 'bidang' => $fullBidang])->idpaket+1;

			}

			$dataInsert = array(
				'kdsatker' => $kdsatker,
				'idpaket' => $dataIdPaket,
				'kecamatan'  => htmlspecialchars($sheet->getCell('E' . $row)->getValue(), ENT_QUOTES),
				'desa'  => htmlspecialchars($sheet->getCell('F' . $row)->getValue(), ENT_QUOTES),
				'sistem'  => htmlspecialchars($sheet->getCell('G' . $row)->getValue(), ENT_QUOTES),
				'bidang'  => htmlspecialchars($sheet->getCell('I' . $row)->getValue(), ENT_QUOTES),
				'subbidang'  => htmlspecialchars($sheet->getCell('J' . $row)->getValue(), ENT_QUOTES),
				'menu'  => htmlspecialchars($sheet->getCell('L' . $row)->getValue(), ENT_QUOTES),
				'rincian'  => htmlspecialchars($sheet->getCell('U' . $row)->getValue(), ENT_QUOTES),
				'pengadaan' => json_encode($sheet->getCell('AE' . $row)->getValue(), ENT_QUOTES),
				'volume' => htmlspecialchars($sheet->getCell('AK' . $row)->getValue(), ENT_QUOTES),
				'satuan' => htmlspecialchars($sheet->getCell('AG' . $row)->getValue(), ENT_QUOTES),
				'harga_satuan' => htmlspecialchars($sheet->getCell('AL' . $row)->getValue(), ENT_QUOTES),
				'usulan' => htmlspecialchars($sheet->getCell('AM' . $row)->getValue(), ENT_QUOTES),
				'komponen' => json_encode($sheet->getCell('BM' . $row)->getValue(), ENT_QUOTES),
				'Approval_KL' => 0,
				'Aprroval_PPN' => 0,
				'Approval_Sum' => 0,
				'ta' => $thang
			);

			$this->M_dinamis->save('data_awal_airminum', $dataInsert);
			
		}

		return true;
	}
}




